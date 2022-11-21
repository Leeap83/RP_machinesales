<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RP Machinery Sales</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="shortcut icon" href="images/favicon.ico">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/b42b424358.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <meta name="description" content="Shropshire based Tractors and Used Machinery Sales to UK and International">
        <meta name="keywords" content="Shropshire, Agricultural Machinery, Used Machinery, Tractors, Telehandlers, Trailers, UK, International">
        <meta property="og:title" content="RP Machinery Sales | Buy used tractors, telehandlers or machinery"/> 
        <meta property="og:description" content="Shropshire, Agricultural Machinery, Used Machinery, Tractors, Telehandlers, Trailers, UK, International"/>        
        <meta property="og:site_name" content="RP Machinery Sales"/>        
        <meta property="og:locale" content="en_GB"/>
    </head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PVYWCHXZY9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-PVYWCHXZY9');
    </script>
    <body>
    
        <header>
            <nav class="navbar navbar-expand-lg" id="mainNav">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="images/logos-06.png" width="400" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars ms-1"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#about-us">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="products.php">Products</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link sub_menu" href="tractors.php">Tractors</a></li>
                                    <li class="nav-item"><a class="nav-link sub_menu" href="telehandlers.php">Telehandlers</a></li>
                                    <li class="nav-item"><a class="nav-link sub_menu" href="machinery.php">Used Machinery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="exports.php">Export</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>