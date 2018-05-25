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
    $sql = "INSERT INTO persons (first_name, job_title, email_comp, comp_name, phone_comp, country_name, number_apl, ats) VALUES (:first_name, :job_title, :email_comp, :comp_name, :phone_comp, :country_name, :number_apl, :ats)";
    $stmt = $pdo->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':first_name', $_REQUEST['first_name']);
    $stmt->bindParam(':job_title', $_REQUEST['job_title']);
    $stmt->bindParam(':email_comp', $_REQUEST['email_comp']);
    $stmt->bindParam(':comp_name', $_REQUEST['comp_name']);
    $stmt->bindParam(':phone_comp', $_REQUEST['phone_comp']);
    $stmt->bindParam(':country_name', $_REQUEST['country_name']);
    $stmt->bindParam(':number_apl', $_REQUEST['number_apl']);
    $stmt->bindParam(':ats', $_REQUEST['ats']);

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