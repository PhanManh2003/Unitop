
<?php
if (isset($_POST['btn_add'])) {
    echo $_POST['post_content'];
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <!-- <base href="http://localhost/phpmaster/ckeditor-ckfinder/"> -->
        <script src="ckeditor/ckeditor.js"></script>
        <title>Trình soạn thảo và trình quản lí file Ckeditor/ckfinder</title>
    </head>
    <body>
        <style>
            #content{
                width: 960px;
                margin: 0px auto;
            }
        </style>
        <div id ="content">
            <h1>Ckeditor Ckfinder</h1>
            <form method="post">
                <textarea name="post_content" class="ckeditor" id="" cols="30" rows="10"></textarea><br>
                <input type ="submit" name="btn_add" value="Thêm dữ liệu" >
            </form>
        </div>
    </body>
</html>
<?php
//print_r(phpinfo());

/* 1. vào file config.js trong thư mục ckeditor thêm 2 dòng này
  config.filebrowserBrowseUrl = 'ckfinder/ckfinder.html';
  config.filebrowserUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

  2. vào file config.php trong thư mục ckfinder 
    2.1 set return false -> return true;
         $config['authentication'] = function () {
            return true;
                };
 
    2.2 Set lại thư mục lưu các file được upload lên với ckfinder, ví dụ:
    'baseUrl'  => 'http://localhost/Unitop/PHP/Lesson/section14-thayCuong/ckeditor-ckfinder_phancuong/uploads'
 * 
 * 

 */
?>


