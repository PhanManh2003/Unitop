<?php
#Danh mục
/*
    id => id,
    tên danh mục => cat_title

*/

$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => 'Điện thoại',
    ),
    2 => array(
        'id' => 2,
        'cat_title' => 'Macbook',
    ),
);

#Dữ liệu sản phẩm
/*
    id => id,
    tên sản phẩm => product_title,
    giá => price,
    Mã sp => code
    Mô tả => product_desc
    Ảnh đại diện => product_thumb => url
    Chi tiết sản phẩm => product_content
    Id danh mục => cat_id
*/
$list_product = array(
    1 => array(
        'id' => 1,
        'product_title' => 'iPhone X 256GB Gray',
        'price' => 34790000,
        'code' => 'UNI#1',
        'product_desc' => 'iPhone X 256 GB  được đã được Apple cho ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/153857/iphone-x-plus-600x600.jpg',
        'product_content' => "<p>iPhone X 256 GB  được đã được Apple cho ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.</p>
        <p><img src = 'https://cdn.tgdd.vn/Files/2017/09/13/1021094/apple-iphone-2017-20170912-11675_800x450.jpg'></p>",
        'cat_id' => 1,
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'iPhone 7 Plus 256GB',
        'price' => 23990000,
        'code' => 'UNI#2',
        'product_desc' => 'Với thiết kế không quá nhiều thay đổi, vẫn bảo tồn vẻ đẹp truyền thống từ thời iPhone 6 Plus,  iPhone 7 Plus được trang bị nhiều nâng cấp đáng giá như camera kép, đạt chuẩn chống nước chống bụi cùng cấu hình cực mạnh.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb-hh-600x600.jpg',
        'product_content' => "<p>Với thiết kế không quá nhiều thay đổi, vẫn bảo tồn vẻ đẹp truyền thống từ thời iPhone 6 Plus,  iPhone 7 Plus được trang bị nhiều nâng cấp đáng giá như camera kép, đạt chuẩn chống nước chống bụi cùng cấu hình cực mạnh.
        </p>
        <p><img src = 'https://cdn.tgdd.vn/Products/Images/42/87840/iphone-7-plus-256gb1-1.jpg'></p>",
        'cat_id' => 1,
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'Samsung Galaxy A05',
        'price' => 19990000,
        'code' => 'UNI#3',
        'product_desc' => 'Samsung Galaxy A05 4GB được nhà Samsung công bố chính thức tại thị trường Việt Nam vào tháng 09/2023. Sản phẩm này được định hình là dòng máy giá rẻ, tập trung chủ yếu vào thiết kế, camera và thời lượng pin.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/319584/samsung-galaxy-a15-5g-xanh-thumb-600x600.jpg',
        'product_content' => "<p>Samsung Galaxy A05 4GB được nhà Samsung công bố chính thức tại thị trường Việt Nam vào tháng 09/2023. Sản phẩm này được định hình là dòng máy giá rẻ, tập trung chủ yếu vào thiết kế, camera và thời lượng pin.
        </p>
        <p><img src = 'https://cdn.tgdd.vn/Products/42/319584/samsung-galaxy-a15-5g-1-1020x570.jpg'></p>",
        'cat_id' => 1,
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'MacBook Air 15 inch M2 8GB/256GB',
        'price' => 30000000,
        'code' => 'UNI#4',
        'product_desc' => 'Sau 14 năm, ba lần sửa đổi và hai kiến trúc bộ vi xử lý khác nhau, kiểu dáng mỏng dần mang tính biểu tượng của MacBook Air đã đi vào lịch sử. Thay vào đó là một chiếc MacBook Air M2 với thiết kế hoàn toàn mới, độ dày không thay đổi tương tự như MacBook Pro, đánh bật mọi rào cản với con chip Apple M2 đầy mạnh mẽ.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/309016/apple-macbook-air-15-inch-m2-2023-gray-thumb-600x600.jpg',
        'product_content' => "<p>Sau 14 năm, ba lần sửa đổi và hai kiến trúc bộ vi xử lý khác nhau, kiểu dáng mỏng dần mang tính biểu tượng của MacBook Air đã đi vào lịch sử. Thay vào đó là một chiếc MacBook Air M2 với thiết kế hoàn toàn mới, độ dày không thay đổi tương tự như MacBook Pro, đánh bật mọi rào cản với con chip Apple M2 đầy mạnh mẽ.
        </p>
        <p><img src = 'https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-161122-112213.jpg'></p>",
        'cat_id' => 2,
    ),
    5 => array(
        'id' => 5,
        'product_title' => 'MacBook Air 13 inch M1 2020 7-core GPU',
        'price' => 18990000,
        'code' => 'UNI#5',
        'product_desc' => 'Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg',
        'product_content' => "<p>Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn.
        </p>
        <p><img src = 'https://cdn.tgdd.vn/Products/Images/44/231244/apple-macbook-air-2020-mgn63saa-280323-125154.jpg'></p>",
        'cat_id' => 2,
    ),
    6 => array(
        'id' => 6,
        'product_title' => 'MacBook Air 13 inch M2 16GB/256GB',
        'price' => 29990000,
        'code' => 'UNI#6',
        'product_desc' => 'Với sức mạnh bùng nổ đến từ bộ vi xử lý M2 cùng thiết kế của một chiếc laptop cao cấp - sang trọng, MacBook Air M2 đáp ứng đầy đủ mọi nhu cầu từ học tập, văn phòng đến đồ họa, kỹ thuật nâng cao.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/289472/apple-macbook-air-m2-2022-16gb-256gb-thumb-600x600.jpg',
        'product_content' => "<p>Với sức mạnh bùng nổ đến từ bộ vi xử lý M2 cùng thiết kế của một chiếc laptop cao cấp - sang trọng, MacBook Air M2 đáp ứng đầy đủ mọi nhu cầu từ học tập, văn phòng đến đồ họa, kỹ thuật nâng cao.
        </p>
        <p><img src = 'https://cdn.tgdd.vn/Products/Images/44/289472/apple-macbook-air-m2-2022-16gb-256gb-ab-3.jpg'></p>",
        'cat_id' => 2,
    ),

);
