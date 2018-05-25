<?php include_once("home.html"); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/mystyle.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div id="exTab3" class="container">
    <ul  class="nav nav-pills">
        <li class="active">
            <a  href="#1b" data-toggle="tab">I AM RECRUITER</a>
        </li>
        <li>
            <a href="#2b" data-toggle="tab">I AM PROGRAMMER</a>
        </li>
    </ul>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="1b">
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
        </div>
        <div class="tab-pane" id="2b">
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
            </form>        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>