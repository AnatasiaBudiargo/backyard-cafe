<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icon -->
    <script src="https://kit.fontawesome.com/9d314a5997.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="flaticon/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- FONT LATO -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300,400,700&display=swap" rel="stylesheet">

    <!-- CSS Internal -->
    <script src="<?= base_url('assets/'); ?>jquery/jquery-3.5.1.min.js" rel="stylesheet"></script>
    <script src="<?= base_url('assets/'); ?>js/booking.js" rel="stylesheet"></script>
    <link href="<?= base_url('assets/'); ?>css/booking.css" rel="stylesheet">
</head>

<body>

<!-- <script>
    $(document).ready(function () {
    var current_fs, next_fs, previous_fs;

    $(".next-satu").click(function () {
        str1 = "next1";
        str2 = "next2";

        if (!str1.localeCompare($(this).attr("id")) && validate1(0) == true) {
        val1 = true;
        } else {
        val1 = false;
        }

        if (!str2.localeCompare($(this).attr("id")) && validate2(0) == true) {
        val2 = true;
        } else {
        val2 = false;
        }

        if (
        (!str1.localeCompare($(this).attr("id")) && val1 == true) ||
        (!str2.localeCompare($(this).attr("id")) && val2 == true)
        ) {
        current_fs = $(this).parent().parent().parent();
        next_fs = $(this).parent().parent().parent().next();

        $(current_fs).removeClass("show");
        $(next_fs).addClass("show");

        $("#progressbar li").eq($(".card").index(next_fs)).addClass("active");

        current_fs.animate(
            {},
            {
            step: function () {
                current_fs.css({
                display: "none",
                position: "relative",
                });

                next_fs.css({
                display: "block",
                });
            },
            }
        );
        }
    });

    $(".prev").click(function () {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        $(current_fs).removeClass("show");
        $(previous_fs).addClass("show");

        $("#progressbar li").eq($(".card").index(next_fs)).removeClass("active");

        current_fs.animate(
        {},
        {
            step: function () {
            current_fs.css({
                display: "none",
                position: "relative",
            });

            previous_fs.css({
                display: "block",
            });
            },
        }
        );
    });
    });

</script> -->
    <nav class="navbar navbar-expand-lg justify-content-center">
        <h1>Booking at <b>Backyard Cafe</b></h1>
    </nav>
    <div class="container-fluid px-1 py-5 mx-auto">
        
