<?php
/*
  Mục tiêu bài học: Lưu trữ kết nối phiên làm việc bằng SESSION

  --------------------COOKIE VÀ SESSION----------------------
  Tóm lại, cả COOKIE và SESSION đều là cách để lưu trữ thông tin về trạng thái của
  người dùng trên các trang web, nhưng chúng có cách thức hoạt động và mục đích
  sử dụng khác nhau. COOKIE được lưu trữ trên máy tính của người dùng và khi người
  dùng truy cập vào một trang web, trình duyệt sẽ tự động gửi các COOKIE tương ứng
  với trang web đó lên máy chủ thông qua request, trong khi SESSION được lưu trữ
  trên máy chủ và gắn nó với một phiên làm việc cụ thể của người dùng.
 */

session_start();
// Nếu ghi nhớ đăng nhập thì in ra dòng bên dưới
if (isset($_COOKIE['is_login'])) {
    echo "COOKIE: {$_COOKIE['user_login']}";
} 

// kiểm tra xem đã đăng nhập chưa, nếu chưa thì điều hướng sang file login.php
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
} else {
    echo "<br>Chào mừng bạn đến với trang chủ<br>";
}
?>
<a href="logout.php">Đăng xuất</a>


