<?php
include 'db.php';

$city_id = $_POST['city_id'];

$query = $conn->query("SELECT * FROM postal_codes WHERE city_id = $city_id");

echo '<option value="">Select Postal Code</option>';
while($row = $query->fetch_assoc()) {
    echo '<option value="'.$row['postal_code'].'">'.$row['postal_code'].'</option>';
}
?>