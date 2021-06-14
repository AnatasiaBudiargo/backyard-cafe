<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- FONT LATO -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/Index_CSS.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/menu.css" rel="stylesheet">

    <title> <?= $title; ?> </title>

    <style> 

    body {
        overflow-x: hidden;
    }

    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse text-light" id="navbarNavDropdown">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/'); ?>"> HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            OUR MENU
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url('auth/menu'); ?>"> APPETIZER </a>
                            <a class="dropdown-item" href="<?= base_url('auth/menu'); ?>"> SALAD </a>
                            <a class="dropdown-item" href="<?= base_url('auth/menu'); ?>"> MAIN COURSE </a>
                            <a class="dropdown-item" href="<?= base_url('auth/menu'); ?>"> ALL DAY BREAKFAST </a>
                            <a class="dropdown-item" href="<?= base_url('auth/menu'); ?>"> PASTRY </a>
                            <a class="dropdown-item" href="<?= base_url('auth/menu'); ?>"> PASTA </a>
                            <a class="dropdown-item" href="<?= base_url('auth/menu'); ?>"> ASIAN CUISINE </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> CONTACT </a>
                    </li>
                    <li class="nav-item book">
                        <a class="nav-link" href="#"> BOOKING </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- AKHIR NAVBAR -->