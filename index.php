<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Country State City Dropdown</title>
    <script src="script.js"></script>
</head>
<body>

<h2>Select Location</h2>

<!-- Country -->
<select id="country" onchange="getStates(this.value)">
    <option value="">Select Country</option>
    <?php
    $result = $conn->query("SELECT * FROM countries");
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row['id']."'>".$row['name']."</option>";
    }
    ?>
</select>

<!-- State -->
<select id="state" onchange="getCities(this.value)">
    <option value="">Select State</option>
</select>

<!-- City -->
<select id="city" onchange="getPostal(this.value)">
    <option value="">Select City</option>
</select>

<!-- Postal Code -->
<select id="postal">
    <option value="">Select Postal Code</option>
</select>

</body>
</html>