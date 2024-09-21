// có 2 loại hàm: hàm built-in và hàm tự định nghĩa

// Trong JavaScript, this là một từ khóa đặc biệt mà giá trị của nó phụ thuộc vào
//  cách mà một hàm được gọi. Giá trị của this thường được xác định bởi ngữ cảnh
//   của việc gọi hàm, và có thể thay đổi theo cách mà hàm được gọi.

// Toán tử bind, call, apply
// 1. bind: trả về 1 hàm mới với giá trị this cố định và các tham số cố định
function greet(greeting) {
  console.log(greeting + ", " + this.name + "!");
}

const greetBind = greet.bind({ name: "Alice" }, "Hi");
greetBind(); // Kết quả: Hi, Alice!

// 2. call: gọi hàm đó luôn, cho phép bạn chỉ định giá trị của this và truyền vào các đối số
// function greet(greeting) {
//     console.log(greeting + ", " + this.name + "!");
// }

// const person = { name: "Alice" };

// // Sử dụng call() để gọi hàm greet() và truyền tham số "Hi" vào
// greet.call(person, "Hi"); // Kết quả: Hi, Alice!

// 3. apply: : Tương tự như .call(), nhưng bạn truyền các đối số dưới dạng một mảng.
// function greet(greeting) {
//     console.log(greeting + ", " + this.name + "!");
// }

// const person = { name: "Alice" };

// // Sử dụng call() để gọi hàm greet() và truyền tham số "Hi" vào
// greet.apply(person, ['Hi']); // Kết quả: Hi, Alice!

// Tham số hàm với đối tượng arguments
function writeLog() {
  myString = "";
  for (const param of arguments) {
    myString += `${param} - `;
  }
  console.log(myString);
}

writeLog("Hello", 2021, true);

// return trong hàm ( return có thể trả về bất cứ kiểu dữ liệu nào)
var isConfirm = confirm("Are you sure?");
console.log(isConfirm); // Kết quả: true hoặc false

// 1 hàm ko return thì mặc định sẽ return undefined

// Hàm trong hàm
function sayHi() {
  function sayHi2() {
    return "Hi!";
  }

  return sayHi2();
}
console.log(sayHi()); // Kết quả: Hi!

/**
 * Các loại function:
 * 1. Function declaration: có thể gọi trước khi khai báo( hoisting) còn function expression thì không
 *      function myFunction() {}
 * 2. Function expression
 *      let myFunction = function() {};
 * 3. Arrow function
 *      let myFunction = () => {};
 */
