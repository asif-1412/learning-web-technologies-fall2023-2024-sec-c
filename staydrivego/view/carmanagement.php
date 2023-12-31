<?php
if (!isset($_COOKIE['status'])) {
    header('location: ../view/signin.php?error=bad_request');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Management</title>
</head>
<?php include_once('../view/header.php'); ?>
<body>
    <h1>Car Rental Listings</h1>

    <fieldset>
    <legend>List Your Car Rental</legend>
    <form method="post" action="../controller/carmanagementval.php">
        <label for="crmdl">Car Model:</label>
        <input type="text" name="crmodel" required><br>
        <label for="location">Location:</label>
        <input type="text" name="location" required><br>
        <label for="prcprd">Price per Day:</label>
        <input type="number" name="prcprd" required><br>
        <label for="pickuptime">Pick up time:</label>
        <input type="text" name="pickuptime" required><br>
        <label for="availability">Availability:</label>
        <input type="checkbox" name="availability" checked><br>
        <button type="submit">List Car</button>
    </form>
    </fieldset>

    <?php
    if (isset($_GET['message'])) {
        echo "<p>{$_GET['message']}</p>";
    }
    ?>
     <?php include_once('../view/footerpublic.php'); ?>
     <p align="center"><a href="listofcars.php">Listed Cars</a></p>
</body>
</html>
