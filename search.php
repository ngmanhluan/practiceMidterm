<?php require_once('./model/connect.php'); ?>
<?php 
$searchInput = $_POST['searchInput'];

$query = "SELECT * FROM products WHERE `name` LIKE '%$searchInput%'";
$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p>'.$row['name'].'</p>';
        }
    } else {
        echo 'No results found.';
    }
} else {
    echo 'Query error: ' . mysqli_error($conn);
}
?>