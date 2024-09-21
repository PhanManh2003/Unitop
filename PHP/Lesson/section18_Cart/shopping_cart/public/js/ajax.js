$(document).ready(function () {
    $(".num-order").change(function () {
        var id = $(this).attr('data-id'); // !
        var qty = $(this).val();
        var data = {
            id: id,
            qty: qty,
        };
        $.ajax({
            url: "?mod=cart&act=ajax", // Trang xử lí, mặc định trang hiện tại
            method: 'POST', // post hoặc get , mặc định get
            data: data, // Dữ liệu truyền lên server
            dataType: 'json', // kiểu dữ liệu trả về: html, text, script hoặc json 
            success: function (data) {
                // HIỂN THỊ DỮ LIỆU LÊN HTML:
                $("#sub-total-" + id).text(data.sub_total);
                $("#total-price").html("Tổng giá: " + "<span style='color: red'>" + data.total + "</span>");
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            },
        });
    });
})

