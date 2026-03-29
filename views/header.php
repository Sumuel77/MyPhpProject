<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">My PHP Project</a>
        <ul class="navbar-nav">
            <li><a href="web.php?page=home" class="nav-link">Home</a></li>
            <li><a href="web.php?page=about" class="nav-link">About</a></li>
            <li><a href="web.php?page=contact" class="nav-link">Contact</a></li>

            <?php if (isset($_SESSION['id'])) { ?>
                <li><a href="web.php?page=logout" class="nav-link">Logout</a></li>
            <?php } else { ?>
                <li><a href="web.php?page=login" class="nav-link">Login</a></li>
            <?php } ?>

        </ul>
    </div>
</nav>