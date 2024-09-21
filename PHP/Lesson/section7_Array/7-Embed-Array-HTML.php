<?php
// Nhúng mảng PHP vào html

/*
    B1: Chuẩn bị mảng đã xử lí
    B2: Tạo khuôn HTML 
    B3: Duyệt mảng và đổ dữ liệu
  
 * 
 * PHP đổ dữ liệu từ mảng vào HTML  hơn Js ở chỗ là
 * nó không cần tạo mảng HTML trung gian mà nó đổ trực tiếp 
 * từ mảng data vào khuôn HTML luôn
 */
$list_prime = array(2, 3, 5, 7);

$list_user = array(
    1000 => array(
        'id' => 1000,
        'fullname' => 'Phan Tiến Mạnh',
        'email'    => 'manhamsterdam2003@gmail.com',
    ),
    1269 => array(
        'id' => 1269,
        'fullname' => 'Nguyễn Khả Tùng',
        'email'    => 'khatungnguyen1234@gmail.com',
    ),
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhúng dữ liệu mảng lên html</title>
</head>

<body>
    <h1>Nhúng dữ liệu mảng 1 chiều</h1>
    <table border="1">
        <thead>
            <tr>
                <th style="width: 30px;">Stt</th>
                <th style="width: 100px;">Số nguyên tố</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $temp = 0;
            foreach ($list_prime as $key => $value) {
                $temp++;
            ?>
                <!-- phải dùng 2 lần ?php ?> để kết thúc một đoạn mã PHP và 
                chuyển sang viết HTML rồi sau đó lại bắt đầu 1 đoạn mã PHP mới -->
                <tr>
                    <td><?php echo $temp ?></td>
                    <td><?php echo $value ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


    <h1>Nhúng dữ liệu mảng đa chiều</h1>
    <?php
    if (!empty($list_user)) { ?>
        <table border="1">
            <thead>
                <tr>
                    <th style="width: 30px;">Stt</th>
                    <th style="width: 30px;">Id</th>
                    <th style="width: 200px;">Họ và tên</th>
                    <th style="width: 300px;">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = 0;
                // Cần phải kiểm tra xem mảng có dữ liệu hay không trước khi đổ dữ liệu

                foreach ($list_user as $key => $value) {
                    $temp++;
                ?>
                    <!-- phải dùng 2 lần ?php ?> để tách biệt mã php và mã html -->
                    <tr>
                        <td style="text-align: center;"><?php echo $temp ?></td>
                        <td><?php echo $value['id'] ?></td>
                        <td style="text-align: center;"><?php echo $value['fullname'] ?></td>
                        <td style="text-align: center;"><?php echo $value['email'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>Không tồn tại dữ liệu</p>
    <?php } ?>
</body>

</html>