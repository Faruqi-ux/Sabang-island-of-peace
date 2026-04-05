<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sabang - Island of Peace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Denk+One&family=Inter:wght@400;700&family=Nokora&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- HERO -->
    <section class="hero">
        <div class="overlay"></div>

        <!-- NAVBAR -->
        <div class="navbar">
            <a href="/">Home</a>
            <a href="#">Itineraries</a>
        </div>

        <!-- TITLE -->
        <div class="hero-content">
            <h1>Sabang<br>Island of Peace</h1>
            <p>Inspiration & launch plans for next your trip</p>
        </div>
    </section>

    <!-- DESCRIPTION -->
    <section class="desc">
        <p>
            Sabang, the westernmost point of Indonesia, offers beautiful beaches,
            clear waters, and a peaceful atmosphere.<br>
            This website helps you plan your trip with simple guides, destinations, and travel tips.<br>
            Enjoy a relaxing and memorable journey in Sabang.
        </p>
    </section>

    <!-- CATEGORY -->
    <section class="category">
        <h2>ITINERARIES CATEGORY</h2>

        <div class="cards">
            <div class="card"><img src="{{ asset('images/img1.jpg') }}"></div>
            <div class="card"><img src="{{ asset('images/img2.jpg') }}"></div>
            <div class="card"><img src="{{ asset('images/img3.jpg') }}"></div>
            <div class="card"><img src="{{ asset('images/img4.jpg') }}"></div>
        </div>
    </section>

</body>
</html>