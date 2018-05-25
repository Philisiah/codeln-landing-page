<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Records Form</title>
</head>
<body>
<form action="insertdevelopper.php" method="post">
    <p>
        <label for="firstName">Complete Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="email" name="email_dev" id="emailAddress">
    </p>
    <p>
        <label for="lastName">Phone Number:</label>
        <input type="text" name="phone_comp" id="lastName">
    </p>
    <p>
        <label for="lastName">Country:</label>
        <input type="text" name="country_name" id="lastName">
    </p>
    <input type="submit" value="Add Records">
</form>
</body>
</html>