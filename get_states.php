<?php
include 'db.php';

$country_id = $_POST['country_id'];

$query = $conn->query("SELECT * FROM states WHERE country_id = $country_id");

echo '<option value="">Select State</option>';
while($row = $query->fetch_assoc()) {
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
?>