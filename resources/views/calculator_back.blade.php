<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stamp Duty Calculator</title>

    <link rel="stylesheet" type="text/css" href="css/app.css">

    <link rel="stylesheet" type="text/css" href="css/calculator.css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">

<div class="main_container">
    <div class="calc-div"></div>
    <div class="cont-calc-text">
        <div class="container-text">
            <img src="images/top-triangle.png" alt="alt" class="arrow_down"/>
            <h1 class="calc-title">Stamp duty</h1>
            <h1 class="calc-title calc-title-bold"><strong>calculator</strong></h1>
            <span class="calc_break"></span>
            <p class="calc-description">Calculate how much stamp duty you pay for a residential UK property both during and after the stamp duty holiday.</p>
        </div>
        <div class="only-calc-cont">
            <img src="images/top-triangle.png" alt="alt" class="arrow_top"/>
            <div id="calculator"/>
        </div>
    </div>
</div>

<script src="js/app.js"></script>
</body>
</html>
