<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=profselfie", "devselfie", "@Msmdpb225@");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

// Attempt insert query execution
try{
    // create prepared statement
    $sql = "INSERT INTO developper (first_name, email_dev, phone_comp, country_name) VALUES (:first_name, :email_dev, :phone_comp, :country_name)";
    $stmt = $pdo->prepare($sql);

    // bind parameters to statement
    $stmt->bindParam(':first_name', $_REQUEST['first_name']);
    $stmt->bindParam(':email_dev', $_REQUEST['email_dev']);
    $stmt->bindParam(':phone_comp', $_REQUEST['phone_comp']);
    $stmt->bindParam(':country_name', $_REQUEST['country_name']);

    // execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
    header('Location: index.html');

} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>