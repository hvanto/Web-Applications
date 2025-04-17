<?php session_start(); ?>
<?php include "db.php"; ?>

<?php

if (isset($_POST['submit'])) {
    $make        = filter_var($_POST['make'], FILTER_SANITIZE_STRING);
    $model       = filter_var($_POST['model'], FILTER_SANITIZE_STRING);
    $pick_loc    = filter_var($_POST['pick_loc'], FILTER_SANITIZE_STRING);
    $drop_loc    = filter_var($_POST['drop_loc'], FILTER_SANITIZE_STRING);
    $pick_date   = filter_var($_POST['pick_date'], FILTER_SANITIZE_STRING);
    $drop_date   = filter_var($_POST['drop_date'], FILTER_SANITIZE_STRING);


    $_SESSION['make'] = $make;
    $_SESSION['model'] = $model;
    $_SESSION['pick_loc'] = $pick_loc;
    $_SESSION['drop_loc'] = $drop_loc;
    $_SESSION['pick_date'] = $pick_date;
    $_SESSION['drop_date'] = $drop_date;

    // Insert form data into database
    $query = $connection->prepare("INSERT INTO booking (make, model, pick_loc, drop_loc, pick_date, drop_date) VALUES (?, ?, ?, ?, ?, ?)");
    $query->bind_param('ssssss', $make, $model, $pick_loc, $drop_loc, $pick_date, $drop_date);

    if ($query->execute()) {
        // Set session variable to indicate success
        $_SESSION['form_success'] = true;
    } else {
        echo "Error: " . $query->error;
    }

    // Close the connection and statement
    $query->close();
    $connection->close();

    header("Location: ../index.php?success=true#");
    exit;
}
?>
