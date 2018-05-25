<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
</head>
<body>
<form action="insertrecruter.php" method="post">
	<p>
    	<label for="firstName">Complete Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
    	<label for="lastName">Job Title:</label>
        <input type="text" name="job_title" id="lastName">
    </p>
    <p>
    	<label for="emailAddress">Email Address:</label>
        <input type="email" name="email_comp" id="emailAddress">
    </p>
    <p>
        <label for="lastName">Name of company:</label>
        <input type="text" name="comp_name" id="lastName">
    </p>
    <p>
        <label for="lastName">Phone Number:</label>
        <input type="text" name="phone_comp" id="lastName">
    </p>
    <p>
        <label for="lastName">Country:</label>
        <input type="text" name="country_name" id="lastName">
    </p>
    <p>
        <label for="lastName">What is the average number of Job applicants you get per vacancy:</label>
        <input type="number" name="number_apl" id="lastName">
    </p>
    <p>
        <label for="lastName">Which Application Tracking System do you use?</label>
        <input type="text" name="ats" id="lastName">
    </p>
    <input type="submit" value="Add Records">
</form>
</body>
</html>