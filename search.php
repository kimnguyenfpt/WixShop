<?php
require_once('database/config.php');
require_once('database/dbhelper.php');

// Lấy từ khóa tìm kiếm từ URL
if(isset($_GET['keyword'])){
    $keyword = $_GET['keyword'];

    // Thực hiện truy vấn tìm kiếm
    $sql = "SELECT * FROM `product` WHERE `title` LIKE '%$keyword%'";
    $result = executeResult($sql);

    // Hiển thị kết quả tìm kiếm
    if (count($result) > 0) {
        echo '<h2>Kết quả tìm kiếm cho: "' . $keyword . '"</h2>';
        foreach ($result as $item) {
            echo '<div class="product">';
            echo '<a href="details.php?id=' . $item['id'] . '">';
            echo '<img src="' . $item['thumbnail'] . '" alt="' . $item['title'] . '">';
            echo '<h3>' . $item['title'] . '</h3>';
            echo '<p>Giá: ' . number_format($item['price']) . ' VNĐ</p>';
            echo '</a>';
            echo '</div>';
        }
    } else {
        echo '<h2>Không tìm thấy sản phẩm nào phù hợp.</h2>';
    }
}
?>
