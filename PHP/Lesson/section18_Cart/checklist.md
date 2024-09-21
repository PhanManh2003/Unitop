1. Lên cấu trúc file, thư mục + Xây dựng database 
2. Ghép theme website bán hàng
    - Copy header footer từ theme sang
    - Copy home.php từ theme sang home>main.php 
    - Tạo hàm get_sidebar() và sửa lại sidebar.php;
    - Detail_news.php copy sang page>detail.php;
    - Copy cart.php sang cart>show.php và thêm get_header() , get_footer()
    - copy detail_product.php sang product>detail.php và thêm get_header() , get_footer()
3. Đổ dữ liệu trang
4. Đổ dữ liệu sản phẩm 
    # 4.1 Đổ trang giới thiệu: đổ page>detail.php,
    # 4.2 Đổ dữ liệu sản phẩm vào product>main.php và product>detail.php
5. Đổ dữ liệu trang chủ
6. Ý tưởng lưu trữ dữ liệu giỏ hàng
    - Lưu dữ liệu vào 2 mảng $_SESSION['cart']['buy'] và $_SESSION['cart']['info']
7. Thêm sản phẩm giỏ hàng
    - Lấy thông tin sản phẩm vừa thêm vào giỏ hàng (id) từ URL
    - Cập nhật mảng sản phẩm giỏ hàng $_SESSION['cart']['buy']
    - Cập nhật mảng hóa đơn $_SESSION['cart']['info']
8. Hiển thị danh sách sản phẩm đã mua ở show.php
    - cần hàm redirect() ở add.php
9. Hiển thị tổng hóa đơn
10. Xóa sản phẩm trong giỏ hàng
11. Xóa toàn bộ giỏ hàng
12. Cập nhật giỏ hàng
 - Ý tưởng:  <input type="number" min="1" max="10" name="qty[<?php echo $item['id'] ?>]" value="<?php echo $item['qty'] ?>  class="num-order"> và thêm 1  cái thẻ form bao quanh