<?php
$name = $_POST['name'];
$email    =  $_POST['email'];
$phone    =  $_POST['phone'];
$message = $_POST['message'];


if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}
$greeting = "Hello!
This form has been submitted by:

Name: $name

E-mail: $email

Phone: $phone

Message: $message


";
$recipient = "maha.gowda0171@gmail.com";
mail($recipient, $subject, $greeting);
echo "<script>alert('Your Message has been sent, Thank you!')</script>";
echo "<script>window.open('index.html','_self')</script>";
exit();
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}
function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>