<?php

#1 Lấy thông tin sản phẩm vừa thêm vào giỏ hàng
$id = (int)$_GET['id'];
add_cart($id);
redirect_to("?mod=cart&act=show");
