@extends('layouts.auth')

@section('title')
    Home
@endsection

@section('content')
    <div style="background-color: #28c76f; min-height: 50vh;">
        <!-- Header Section -->
        <header class="header">
            <div class="logo"><span class="logo-highlight">GH</span>G</div>
            <nav>
                <ul class="nav">
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#insights">Insights</a></li>
                </ul>
            </nav>
            <div>
                <a href="#" class="btn btn-outline-light buttons">CONTACT US</a>
                <a href="#" class="btn btn-light buttons">SIGN IN</a>
            </div>
        </header>

        <!-- Main Content Section -->
        <div class="main-content">
            <h1>Bringing Carbon Projects to Life</h1>
            <p>
                Our visualization platform harnesses remote sensing data and AI to bring carbon projects to life,
                rebuilding trust in credits and supercharging investments in nature.
            </p>
            <a href="#" class="btn btn-success">SAMPLE PROJECTS</a>
        </div>

        <!-- Decorative Elements -->
        <div class="decorative-element">
            <img src="/images/logo.png" alt="Design Element">
        </div>
    </div>

    <!-- Metrics Section -->
    <div class="metrics-section">
        <div class="container">
            <div>
                <h2>&euro;7M</h2>
                <p>Financing Facilitated</p>
            </div>
            <div>
                <h2>3.5M</h2>
                <p>Hectares Visualized</p>
            </div>
            <div>
                <h2>12</h2>
                <p>Countries Covered</p>
            </div>
            <div>
                <h2>5</h2>
                <p>Project Types</p>
            </div>
        </div>
    </div>

    <!-- Why Visualize Projects Section -->
    <div style="background-color: #f9fbff; padding: 50px 20px; text-align: center;">
        <h2 style="font-size: 2.5rem; font-weight: bold;">Why Visualize Projects?</h2>
        <p style="margin: 20px 0; font-size: 1rem; max-width: 800px; margin-left: auto; margin-right: auto;">
            Metrics from third-party survey of 500 randomly-selected employees on the GHG platform.
        </p>
        <div class="d-flex justify-content-center" style="gap: 20px; flex-wrap: wrap;">
            <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/66d1c818d315871284457200_1.png"
                alt="Image 1" style="border-radius: 10px; max-width: 300px;">
            <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/66d1c8195d59d33f46f3af78_2.png"
                alt="Image 2" style="border-radius: 10px; max-width: 300px;">
            <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/66d1c81912434f7c462112d5_3.png"
                alt="Image 3" style="border-radius: 10px; max-width: 300px;">
        </div>
    </div>
    <!-- Greenwashing Concerns Section -->
    <div class="greenwashing-section">
        <h6>A Familiar Problem</h6>
        <h2>Greenwashing Concerns</h2>
        <p>
            Widespread public scrutiny of credit validity and greenwashing claims inhibit the effectiveness of carbon
            markets and restrict capital for critical climate impact.
        </p>
        <div class="cards">
            <div class="card">
                <h6>Financial Times</h6>
                <p>“Resellers operating in opaque and unregulated market accused of profiting at expense of environmental
                    goals”</p>
            </div>
            <div class="card">
                <h6>The Guardian</h6>
                <p>“Revealed: more than 90% of rainforest offsets by biggest certifier are worthless, analysis shows”</p>
            </div>
            <div class="card">
                <h6>WSJ Pro</h6>
                <p>“Many companies are shying away from DigiSaka Carbon Credits”</p>
            </div>
            <div class="card">
                <h6>Time</h6>
                <p>“Bogus DigiSaka Carbon Credits are a ‘pervasive’ problem, scientists warn”</p>
            </div>
            <div class="card">
                <h6>Bloomberg</h6>
                <p>“Junk carbon offsets are what make these big companies ‘carbon neutral’”</p>
            </div>
        </div>
    </div>

    <!-- Our Platform Section -->
    {{-- <div class="our-platform-section">
        <h2>Our Platform</h2>
        <div class="platform-cards">
            <!-- Card 1 -->
            <div class="platform-card">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/661a7cda341b39d0093db21e_Card%201.webp"
                    alt="Project A">
                <h3>Interactive Map</h3>
                <p>High-resolution maps with powerful geospatial layers bring scalable insight</p>
            </div>
            <!-- Card 2 -->
            <div class="platform-card">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/661a7cdb40f287484e99c220_Card%202.webp"
                    alt="Land Cover Change">
                <h3>Land Cover Change</h3>
                <p>Dynamic maps overlaid with geospatial analysis provide digestible comparisons</p>
            </div>
            <!-- Card 3 -->
            <div class="platform-card">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/661a7cda79224465a7ed5737_Card%203.webp"
                    alt="3D Projections">
                <h3>3D Projections</h3>
                <p>Forward-looking projections help visualize project impact from a 3D perspective</p>
            </div>
            <!-- Card 4 -->
            <div class="platform-card">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/66d043d983e2817d2155fc51_AI.png"
                    alt="3D Projections">
                <h3>AI ChatBot</h3>
                <p>Forward-looking projections help visualize project impact from a 3D perspective</p>
            </div>
            <!-- Card 5 -->
            <div class="platform-card">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/66d043d97e2b3bd49f9ec913_Canopy.png"
                    alt="3D Projections">
                <h3>Canopy Height</h3>
                <p>Purpose-built ChatBot answers any project-level questions that you may have</p>
            </div>
        </div>
    </div> --}}
@endsection

<style>
    .our-platform-section {
        text-align: center;
        padding: 50px 20px;
        background-color: #f9f9f9;
    }

    .our-platform-section h2 {
        font-size: 2.5rem;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .platform-cards {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .platform-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        padding: 20px;
        text-align: center;
    }

    .platform-card img {
        max-width: 100%;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .platform-card h3 {
        font-size: 1.25rem;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .platform-card p {
        font-size: 1rem;
        color: #555;
    }

    /* General Styles */
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    /* Header Section */
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 30px;
        background-color: #28c76f;
        color: white;
    }

    .logo {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .logo-highlight {
        color: #00d7a9;
    }

    .nav {
        display: flex;
        gap: 20px;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    a.btn.btn-success{
        background-color: #2d6245 !important;
    }
    .buttons{
        color: #fff !important;
        background-color: #2d6245 !important;
    }
    h1{
        color:#fff !important;
    }
    .nav a {
        color: white !important;
        text-decoration: none;
        font-weight: bold;
    }

    .btn {
        margin-right: 10px;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 5px;
    }

    /* Main Content Section */
    .main-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        color: white;
        padding: 100px 20px;
    }

    .main-content h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    .main-content p {
        font-size: 1.2rem;
        margin: 20px 0;
        max-width: 800px;
    }

    /* Decorative Element */
    .decorative-element {
        position: absolute;
        bottom: 10%;
        right: 10%;
    }

    .decorative-element img {
        max-width: 400px;
    }

    /* Metrics Section */
    .metrics-section {
        background-color: #ffffff;
        padding: 50px 20px;
        text-align: center;
    }

    .metrics-section .container {
        display: flex;
        justify-content: space-around;
        max-width: 1200px;
        margin: 0 auto;
    }

    .metrics-section h2 {
        font-size: 2rem;
        font-weight: bold;
    }

    .metrics-section p {
        margin: 0;
        font-size: 1rem;
    }

    /* Greenwashing Section */
    .greenwashing-section {
        background-color: #ffffff;
        padding: 50px 20px;
        text-align: center;
        margin-top: 50px;
    }

    .greenwashing-section h6 {
        font-size: 1rem;
        color: #006699;
        font-weight: bold;
        text-transform: uppercase;
    }

    .greenwashing-section h2 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-top: 10px;
    }

    .greenwashing-section p {
        margin: 20px auto;
        font-size: 1rem;
        max-width: 800px;
        color: #555555;
    }

    .cards {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .card {
        background-color: #fafafa;
        padding: 15px;
        border-radius: 10px;
        max-width: 200px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card h6 {
        font-size: 0.9rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 0.85rem;
        color: #555;
    }
</style>
