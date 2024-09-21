$(document).ready(function () {
    $("#num_order").change(function () {
        var num_order = $("#num_order").val();
        var price = $("#price").text();
        var data = {
            num_order: num_order,
            price: price,
        }
        $.ajax({
            url: "process.php", // Trang xử lí, mặc định trang hiện tại
            method: 'POST', // post hoặc get , mặc định get
            data: data, // Dữ liệu truyền lên server
            dataType: 'text', // kiểu dữ liệu trả về: html, text, script hoặc json 
            success: function (data) {
                // alert("return data from server: " + data);
                // console.log(data);
                // alert(data.total); // total là 1 thuộc tính của data

                // HIỂN THỊ DỮ LIỆU LÊN HTML:
                // $("#total").text(data);
                $("#total").html("<strong>" + data + "</strong>");
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            },
        });
    });
})

