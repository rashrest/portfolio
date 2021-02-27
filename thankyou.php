<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="styles/reset_styles.css">
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
    <link rel="stylesheet" href="styles/thankyou.css">
    <title>Thank You</title>
</head>



<?php
ini_set('display_error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('/home/rshresth/connect.php');

$connect=connect();
//check connection
if($connect -> connect_error){
    die("Connection failed : " .$connect->connect_error);
}
?>
<body>
<main>
<header>
    <nav class="navbar navbar-expand-lg site-header navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav">
                <a class="nav-link " href="http://rshrestha9.greenriverdev.com/index.html">Resume</a>

                <a class="nav-link" href="#">Portfolio</a>

                <a class="nav-link " href="#">About</a>

                <a class="nav-link " href="http://rshrestha9.greenriverdev.com/guestbook.html">Contact</a>

            </div>

        </div>
        <form class="form-inline my-2 my-lg-0 text-right searchh"  method="get">
            <input class="form-control mr-sm-0" type="search" placeholder="Search" aria-label="Search" id="barsearch">
            <button class="btn my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
</header>
<div class="jumbotron text-center">
<?php
//var_dump($_GET);
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$url=$_GET['url'];
$jobTitle=$_GET['jobT'];
$company=$_GET['company'];
$personEmail=$_GET['personEmail'];
$meetMethod=$_GET['response'];
$message=$_GET['message'];
if($meetMethod=="Other"){
    $meetMethod.=$_GET['Other'];

}
else//insert into database
$sql = "INSERT INTO MyGuests (id, firstname, lastname, jobtitle, company, linkden_url, email, how_we_met, message, reg_date)
VALUES (NULL, '$fname', '$lname', '$jobTitle', '$company', '$url', '$personEmail', '$meetMethod', '$message', NULL)";


if ($connect->query($sql) === TRUE) {
    echo "Your information has been recorded successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}


    echo"<h1>Thank You $fname !</h1>";
    ?>
    <p class="lead"><strong>Please keep an eye on your email</strong> I will be contacting you soon.</p>
    <hr>
    <p>
        Having trouble? <a href="mailto:rshrestha9@mail.greenriver.edu">Contact us</a>
    </p>
    <p class="lead">
        <a class="btn btn-primary btn-sm" href="http://rshrestha9.greenriverdev.com/index.html" role="button">Continue to homepage</a>
    </p>
    <footer class="jumbotron lead text-center">
        <h2 class="display-7">Contacts</h2>
        <div id="contacts">
            rshrestha9@mail.greenriver.edu <br>
            (253)263-9669
        </div>
        <div id="links">
            https://www.linkedin.com/in/raju-shrestha-185b931a1/ <br>
            https://github.com/rashrest010
        </div>
    </footer>
</div>

</main>
</body>
</html>
