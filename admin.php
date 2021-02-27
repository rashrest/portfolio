<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">

    <link rel="stylesheet" href="styles/gueststyle.css">
    <link rel="stylesheet" href="styles/admin.css">


</head>

<body>
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


<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <p>Please login in to access myguest.</p>
        </div>

        <!-- Login Form -->
        <form action="guest.php" method="post">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>