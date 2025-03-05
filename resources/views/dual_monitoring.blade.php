@extends('templates.guest')

@section('title', 'Dual Monitoring')

@section('content')
    <header style="background-color: #28c76f; min-height: 50vh;">
        <div class="container">
            <!-- Main Content Section -->
            <div class="main-content">
                <div class="w-50 py-5">
                    <h1 class="text-light display-2 fw-bolder">How do we monitor?</h1>
                    <p class="fs-4 fw-normal">
                    </p>
                </div>
            </div>
        </div>
    </header>

    <div style="background: linear-gradient(#f8f8f8, #ffffff);" class="pb-5">
        <div class="container mt-4 pt-4">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="fw-bold">Dual Monitoring Approach</h1>
                    <div class="fs-5 fw-light pb-5">
                        Ground-based precision meets remote sensing scale.
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="fw-bold">Sensors</h1>
                </div>
            </div>
            <div class="row row-cols-md-2">
                <div class="col d-flex align-items-stretch">
                    <div class="card p-3 ">
                        <div class="card-body">
                            <h1 class="display-4">Ground-Based Monitoring</h1>
                            <ul>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> IoT-enabled sensors
                                    for real-time data collection on methane (CH₄) and carbon dioxide (CO₂) emissions</li>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Field-level tracking
                                    of essential agricultural practices such as Alternate Wetting and Drying (AWD), tillage,
                                    and residue management</li>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Gold-Standard
                                    Calibration: Our remote sensing methodologies are validated using gas chromatography,
                                    flux towers, and in-field emission sampling, in collaboration with national and
                                    international research partners to ensure the highest accuracy</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col d-flex align-items-stretch">
                    <div class="card p-3">
                        <div class="card-body">
                            <h1 class="display-4">Remote Sensing Integration</h1>
                            <ul class="list-group">
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Satellite imagery
                                    and AI-powered data analysis to provide spatial and temporal insights on farming
                                    practices and emissions</li>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> High-resolution
                                    mapping ensures every hectare is accounted for</li>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> We rely on satellite
                                    imagery, UAV data and machine learning models to analyze agricultural variables, farming
                                    practices and emissions </li>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Our AI-driven system
                                    minimizes uncertainty from low-quality data inputs, avoiding the "garbage in, garbage
                                    out" problem
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
