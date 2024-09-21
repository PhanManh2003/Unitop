// data: đọc và ghi liên tục từ localStorage dưới dạng mảng các Object

// 1. saveData() vào localStorage
const todolist = "works";
const saveData = (data) => {
  localStorage.setItem(todolist, JSON.stringify(data));
};

// 2. loadData() : lấy dữ liệu từ localStorage ra và return data
const loadData = () => {
  let data = JSON.parse(localStorage.getItem(todolist));
  data = data ? data : []; // tránh return data bị null khi ko có gì trong localStorage
  return data;
};

// 3. addTask(): Thêm dữ liệu vừa submit vào mảng data ở localStorage
const taskForm = document.forms.taskForm;
const addTask = (new_task) => {
  let data = loadData();
  data.push(new_task);
  saveData(data); // lưu lại mảng data vào localStorage
};

// 4. renderTask(): Hiển thị danh sách công việc trên giao diện
const renderTask = () => {
  let data = loadData();
  let htmlTaskList = data.map((element, index) => {
    return `
    <li class="task-item" index="${index}" complete="${element.complete}" editing="false">
        <span onclick="markTaskComplete(${index});">${element.task}</span>
        <div class="task-option">
            <button onclick = "editTask(${index});">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
            </button>
            <button onclick = "deleteTask(${index});">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </li> `;
  });
  const taskList = document.querySelector("ul.task-list");
  taskList.innerHTML = htmlTaskList.join("");

  // Hiển thị số lương công việc hoàn thành
  const taskResult = document.querySelector("span.task-result");
  if (countCompletedTask() > 0) {
    taskResult.innerHTML = `Yeah, ${countCompletedTask()} task completed!`;
  } else {
    taskResult.innerHTML = ``;
  }
};

// Hiển thị nội dung như cũ khi load lại trang
window.addEventListener("load", () => {
  renderTask();
});

//5.  Lệnh submit
taskForm.addEventListener("submit", (e) => {
  // Chỉ định độ dài tên của task để ADD hoặc EDIT
  if (taskInput.value.trim().length == 0) {
    alert("Please give your task a name!");
    return false; // thoát luôn hàm xử lí sự kiện submit
  }

  const index = taskInput.getAttribute("index");
  if (index) {
    // EDIT mode: Update existing task
    let data = loadData();
    data[index].task = taskInput.value;
    saveData(data);
    // Trả lại giao diện như ban đầu sau khi edit
    taskInput.removeAttribute("index");
    const addTaskButton = document.querySelector("form.task-head button");
    addTaskButton.innerText = "ADD TASK";
  } else {
    // ADD mode: Add new task
    let new_task = {
      task: taskInput.value, // trỏ đến thẻ input bằng chính id của nó mà ko cần truy cập qua document
      complete: false,
    };
    addTask(new_task);
  }

  taskInput.value = "";
  renderTask();
  e.preventDefault();
});

// 6. markTaskComplete()
const markTaskComplete = (index) => {
  let data = loadData();
  if (data[index].complete) {
    data[index].complete = false;
  } else {
    data[index].complete = true;
  }
  saveData(data);
  renderTask();
};

// 7. deleteTask()
const deleteTask = (index) => {
  let data = loadData();
  let userConfirmed = confirm("Bạn có chắc chắn muốn xóa tệp này?");

  if (userConfirmed) {
    data.splice(index, 1);
    saveData(data);
    renderTask();
  } else {
    return false;
  }
};
// 8. editTask()
const editTask = (index) => {
  // hiển thị tên task vào input
  let data = loadData();
  taskInput.value = data[index].task;

  // Sửa nút ADD TASK
  const taskButton = document.querySelector("form.task-head button");
  taskButton.innerText = "EDIT TASK";

  // Ẩn tất cả icon edit và delete
  const taskOption = document.querySelectorAll(".task-option button");
  taskOption.forEach((option) => {
    option.style.display = "none";
  });

  // Vấn đề bây giờ là phải phân biệt 2 form ADD TASK và form EDIT TASK khi submit ???
  // => thêm 1 điều kiện rẽ nhanh cho event submit ở task button
  taskInput.setAttribute("index", index);
};
// 9. countCompletedTask(): đếm các phần tử data có thuộc tính complete = true
const countCompletedTask = () => {
  let data = loadData();
  let count = 0;

  data.forEach((dataElement) => {
    if (dataElement.complete === true) {
      count++;
    }
  });
  return count;
};

// 10. Tạo phím tắt ESC khi đang addTask hoặc editTask
document.addEventListener("keydown", (e) => {
  if (e.which == 27) {
    taskInput.value = "";
    const taskButton = document.querySelector("form.task-head button");
    taskButton.innerText = "ADD TASK";

    // nếu đang edit thì hủy index và hiển thị lại các nút edit/delete
    taskInput.removeAttribute("index");
    const taskOption = document.querySelectorAll(".task-option button");
    taskOption.forEach((option) => {
      option.style.display = "block";
    });
  }
});
