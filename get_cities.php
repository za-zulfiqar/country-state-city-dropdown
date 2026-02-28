<?php
include 'db.php';

$state_id = $_POST['state_id'];

$query = $conn->query("SELECT * FROM cities WHERE state_id = $state_id");

echo '<option value="">Select City</option>';
while($row = $query->fetch_assoc()) {
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
?>