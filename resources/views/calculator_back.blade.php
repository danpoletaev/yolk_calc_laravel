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

<div class="mainContainer">
    <div class="calcDivMobile"></div>
    <div class="calcDiv">
    <div class="containerCalcText">
        <div class="containerText">
            <img src="images/top-triangle.png" alt="alt" class="arrowDown"/>
            <h1 class="calculatorTitle">Stamp duty</h1>
            <h1 class="calculatorTitle calculatorTitleBold"><strong>calculator</strong></h1>
            <span class="calcBreak"></span>
            <p class="calcDescription">Calculate how much stamp duty you pay for a residential UK property both during and after the stamp duty holiday.</p>
        </div>
        <div class="onlyCalcContainer">
            <img src="images/top-triangle.png" alt="alt" class="arrowTop"/>
            <div id="calculator"/>
        </div>
    </div>
    </div>
</div>

<script src="js/app.js"></script>
</body>
</html>
