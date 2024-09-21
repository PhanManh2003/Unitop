<?php
require 'lib/data.php';

// Kiểm tra xem đã submit chưa và kiểm tra file: dung lượng vừa, đúng định dạng, tên file ko bị trùng
if (isset($_FILES['file'])) {
    // Hiển thị dữ liệu về tệp tin tải lên
    show_array($_FILES);
    // Phất cờ 
    $error = [];

    #1 Kiểm tra upload đúng file ảnh: 
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // option =  PATHINFO_DIRNAME, PATHINFO_BASENAME, PATHINFO_EXTENSION or PATHINFO_FILENAME.
    if (!in_array(strtolower($type), $type_allow)) {
        $error['type'] = "Chỉ được upload file ảnh có định dạng png, jpg, gif, jpeg";
    } else {
        #2 Kiểm tra upload đúng kích thước file(<20MB):
        $file_size = $_FILES['file']['size'];
        $max_size = 20 * 1024 * 1024; // 20 MB
        if (!($file_size <= $max_size)) {
            $error['size'] = "Chỉ được upload file nhỏ hơn 20MB";
        }

        #3 Kiểm tra trùng tên file đã upload: (cần thêm 1 thuật toán đổi tên tự động nếu trùng tên)
        // Thư mục lưu trữ tệp tin tải lên
        $upload_dir = 'uploads/';

        // Đường dẫn của tệp tin sau khi tải lên
        $upload_file = $upload_dir . $_FILES['file']['name'];
        // check xem đường dẫn file đã tồn tại hay chưa
        $i = 1;
        while (file_exists($upload_file)) {
            if ($i == 1) {
                $upload_file = $upload_dir . pathinfo($_FILES['file']['name'], PATHINFO_FILENAME) . " - Copy." . $type;
            } else {
                $upload_file = $upload_dir . pathinfo($_FILES['file']['name'], PATHINFO_FILENAME) . " - Copy({$i})." . $type;
            }
            $i++;
//            $error['file_exists'] = "File đã tồn tại trên hệ thống";
        }
    }




    if (empty($error)) {
        // Di chuyển tệp tin từ thư mục tạm thời đến thư mục lưu trữ (chính là upload file lên server thật sự )
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "<img src='{$upload_file}'><br>";
            $download_name = pathinfo($upload_file, PATHINFO_BASENAME);
            echo "<a href='{$upload_file}'>Download: {$download_name}</a>";
        } else {
            echo "Tải lên tệp tin không thành công";
        }
    } else {
        show_array($error);
    }


    //        // Thư mục lưu trữ tệp tin tải lên
//        $upload_dir = 'uploads/';
//
//// Đường dẫn của tệp tin sau khi tải lên
//        $upload_file = $upload_dir . $_FILES['file']['name'];
//
//// Di chuyển tệp tin từ thư mục tạm thời đến thư mục lưu trữ (chính là upload file lên server thật sự )
//        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
//            echo "<a href='{$upload_file}'>Download {$_FILES['file']['name']}</a>";
//        } else {
//            echo "Tải lên tệp tin không thành công";
//        }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload file lên server với PHP</title>
    </head>

    <body>
        <h1>Upload file</h1>
        <form enctype="multipart/form-data" action="" method="POST">
            Chọn file: <input type="file" name="file" required><br><br>
            <input type="submit" value="Upload file">
        </form>
    </body>

</html>
