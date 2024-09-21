<?php
if (isset($_POST['add_post'])) {
    $error = [];
    #1 CHECK EMPTY
    if (empty($_POST['post_title'])) {
        $error['post_title'] = "Không được để trống tiêu đề bài viết";
    } else {
        $post_title = $_POST['post_title'];
    }

    if (empty($_POST['post_content'])) {
        $error['post_content'] = "Không được để trống nội dung bài viết";
    } else {
        $post_content = $_POST['post_content'];
    }
    // 
    #2 CHECK FILE
    //1 Kiểm tra upload đúng file ảnh: 
    if (isset($_FILES)) {
        $type_allow = array('png', 'jpg', 'gif', 'jpeg');
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // option =  PATHINFO_DIRNAME, PATHINFO_BASENAME, PATHINFO_EXTENSION or PATHINFO_FILENAME.
        if (!in_array(strtolower($type), $type_allow)) {
            $error['type'] = "Chỉ được upload file ảnh có định dạng png, jpg, gif, jpeg";
        } else {
            //2 Kiểm tra upload đúng kích thước file(<20MB):
            $file_size = $_FILES['file']['size'];
            $max_size = 20 * 1024 * 1024; // 20 MB
            if (!($file_size <= $max_size)) {
                $error['size'] = "Chỉ được upload file nhỏ hơn 20MB";
            }

            //3 Kiểm tra trùng tên file đã upload: (cần thêm 1 thuật toán đổi tên tự động nếu trùng tên)
            // Thư mục lưu trữ tệp tin tải lên 
            $upload_dir = "public/img/uploads/"; // Mình chạy theo điều hướng Nên nó tính đường dẫn bắt đầu từ index.php
            // Đường dẫn của tệp tin sau khi tải lên
            $upload_file = $upload_dir . $_FILES['file']['name'];
            // thuật toán đổi tên tự động
            $i = 1;
            while (file_exists($upload_file)) {
                if ($i == 1) {
                    $upload_file = $upload_dir . pathinfo($_FILES['file']['name'], PATHINFO_FILENAME) . " - Copy." . $type;
                } else {
                    $upload_file = $upload_dir . pathinfo($_FILES['file']['name'], PATHINFO_FILENAME) . " - Copy({$i})." . $type;
                }
                $i++;
            }
        }
    }

    #3 KẾT LUẬN
    if (empty($error)) {
        $post_desc = $_POST['post_desc'];
        echo "{$post_title}<br>{$post_desc}<br>{$post_content}";
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "<img src='{$upload_file}'><br>";
            $download_name = pathinfo($upload_file, PATHINFO_BASENAME);
            echo "<a href='{$upload_file}'>Download: {$download_name}</a>";
        } else {
            echo "Tải lên tệp tin không thành công";
        }
    } else {
//        show_array($error);
//        show_array($_POST);
//        show_array($_FILES);
    }
}
?>

<base href="http://localhost/Unitop/PHP/Lesson/section15_File/exercise15/system_basic/"> 
<div id="content">
    <h1>Thêm bài viết</h1>
    <form method="POST"  enctype="multipart/form-data" action="">
        <label for="post_title">Tiêu đề bài viết</label><br>
        <input type="text" name="post_title" id="post_title"><br><br>
        <?php echo form_error('post_title'); ?>

        <label for="post_desc">Mô tả ngắn</label><br>
        <textarea name="post_desc" id="post_desc" cols="60" rows="6"></textarea><br><br>

        <label for="post_content">Nội dung</label><br>
        <textarea name="post_content" class="ckeditor" id="post_content" cols="30" rows="10"></textarea><br><br>
        <?php echo form_error('post_content'); ?>

        <label>Ảnh đại diện</label><br>
        <input type="file" name="file" required>
        <?php echo form_error('size') . "" . form_error('type'); ?>
        <br><br>
        <input type="submit" name="add_post" value="Thêm bài viết">
    </form>
</div>

<script src="ckeditor/ckeditor.js"></script>