
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GRC Student Summary</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/gueststyle.css">
</head>
<?php

ini_set('display_error', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('/home/rshresth/connect.php');

$connect = connect();
//check connection
if ($connect->connect_error) {
    die("Connection failed : " . $connect->connect_error);
}

?>
<body style="background: white!important">
<header>
    <nav class="navbar navbar-expand-lg site-header navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav">
                <a class="nav-link " href="http://rshrestha9.greenriverdev.com/resume.html">Resume</a>

                <a class="nav-link" href="#">Github</a>

                <a class="nav-link " href="http://rshrestha9.greenriverdev.com/admin.php">Login</a>

                <a class="nav-link " href="http://rshrestha9.greenriverdev.com/guestbook.html">Contact</a>

            </div>
        </div>
        <form class="form-inline my-2 my-lg-0 text-right searchh"  method="get">
            <input class="form-control mr-sm-0" type="search" placeholder="Search" aria-label="Search" id="barsearch">
            <button class="btn my-2 my-sm-0" type="submit">Search</button>
        </form>


    </nav>
</header>
<div class="container">

    <h3>My Guest Summary</h3>

    <table id="guest-table">
        <thead>
            <tr>

                <th>First Name</th>
                <th>Last Name</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>Linkden URL</th>
                <th>Email</th>
                <th>How we met?</th>
                <th>Message</th>
                <th>Registered Date</th>
            </tr>
        </thead>
        <tbody>

    <?php

        //Define a query
        $sql = "SELECT * FROM MyGuests ";

        //Send the query to the db
        $result = mysqli_query($connect, $sql);
        //var_dump($result);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $firstName = $row['firstname'];
            $lastName = $row['lastname'];
            $jobTitle = $row['jobtitle'];
            $company = $row['company'];
            $linkden_url = $row['linkden_url'];
            $email=$row['email'];
            $howwemet=$row['how_we_met'];
            $message=$row['message'];
            $date=$row['reg_date'];

            echo "<tr>

                    <td>$firstName</td>
                    <td>$lastName</td>
                     <td>$jobTitle</td>
                    <td>$company</td>
                    <td>$linkden_url</td>
                     <td>$email</td>
                    <td>$howwemet</td>
                    <td>$message</td>
                    <td>$date</td>
                  </tr>";
        }

    ?>
      </tbody>
    </table>
</div>
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

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="//code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#guest-table').DataTable({
            "order": [[8, "desc"]]
        });
    });

</script>
</body>
</html>