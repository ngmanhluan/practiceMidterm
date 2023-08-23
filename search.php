<?php require_once('./model/connect.php'); ?>
<?php 
$searchInput = $_POST['searchInput'];


// Kiểm tra kết nối
if (!$conn) {
    die('Lỗi kết nối: ' . mysqli_connect_error());
}

$query = "SELECT * FROM products WHERE column LIKE '%$searchInput%'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>'.$row['column'].'</p>';
    }
} else {
    echo 'No results found.';
}

// Đóng kết nối