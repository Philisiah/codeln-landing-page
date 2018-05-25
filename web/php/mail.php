
<?php 
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $email=$_REQUEST['Subject'];
        $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("elohor.thomas@meltwater.org", $subject, $message, $from);
        echo "Email sent!";
        header('location: ../index.html');
        }
    }  
?>