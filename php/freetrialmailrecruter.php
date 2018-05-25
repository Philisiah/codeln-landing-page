
<?php
{
    $name=$_REQUEST['name'];
    $jobtitle=$_REQUEST['jobtitle'];
    $email=$_REQUEST['email'];
    $compagnyname=$_REQUEST['compagnyname'];
    $phonenumber=$_REQUEST['phonenumber'];
    $country=$_REQUEST['country'];
    $applicantnumber=$_REQUEST['applicantnumber'];
    $tracksystem=$_REQUEST['tracksystem'];
    $message=$_REQUEST['message'];

//    if (($name=="")||(($jobtitle=="")||(($compagnyname=="")||(($phonenumber=="")||(($applicantnumber=="")||($email=="")||($message==""))

    if (($name=="")||($email=="")||($message==""))
    {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
    }
    else{
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("dexter.ouattara@meltwater.org", $subject, $message, $from);
        echo "Email sent!";
        header('location: ../index.html');
    }
}
?>