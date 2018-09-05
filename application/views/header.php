<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title> Siyoth.lk </title>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url('index.php/home'); ?>">
        <img src="<?php echo base_url() ?>asset/images/logo_white.jpg" width="30" height="30" class="rounded-circle" alt="image">
        Siyoth.lk
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bird WiKi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News & Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sanctuaries</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Maps
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Pic Map</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Distribution Maps</a>
                    <a class="dropdown-item" href="#">Sanctuary Maps</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav navbar-right mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("index.php/home/login") ?>">
                    <?php
                    if($this->session->userdata('username')==false) {
                        echo "Login";
                    }
                    ?>
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <?php
                if($this->session->userdata('username')) {
                    echo "<li class=\"nav-item dropdown\">";
                        echo "<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n";
                                echo $this->session->userdata('username');
                        echo "</a>\n";
                        echo "<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
                            echo "<a class=\"dropdown-item\" href=\"#\">Profile</a>\n";
                            echo "<a class=\"dropdown-item\" href=\"" . base_url('index.php/login/user_logout');
                            echo "\">Logout</a>\n";
                       echo " </div>";
                    echo "</li>";
                }
            ?>
        </ul>
    </div>
</nav>