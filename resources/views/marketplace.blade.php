@extends('templates.guest')

@section('title', 'Multidisciplinary Approach')
@push('styles')
    <style>
        .fs-7 {
            font-size:.75rem !important;
        }
    </style>
@endpush
@section('content')
    <header style="background-color: #28c76f; min-height: 50vh;">
        <div class="container">
            <!-- Main Content Section -->
            <div class="main-content">
                <div class="w-50 py-5">
                    <h1 class="text-light display-2 fw-bolder">Marketplace</h1>
                </div>
            </div>
        </div>
    </header>

    <div style="background: linear-gradient(#f8f8f8, #ffffff);" class="pb-5">
        <div class="container mt-4 pt-4">

            <div class="row row-cols-md-3">

                <div class="col mb-4">
                  <div class="card shadow h-100">
                    <img src="https://www.philrice.gov.ph/wp-content/uploads/2024/12/negros.jpg"
                          alt="Image 2">
                    <div class="card-body bg-light">
                      <h2 class="text-truncate">El Globo Habitat Bank</h2>
                      <p class="card-text text-black-50 fs-7 mt-3"><i class="fas fa-map-marker-alt"></i> Cuchilla JArdin-Tamesis Integrated Management District(DMI), Colombia | 340.11 ha.</p>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="d-flex">
                            <div class="flex-fill">
                                <p class="mb-1">AVG Price <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="This is the median average price of all open sell orders for this project."></i></p>
                                <p>$24.95</p>
                            </div>
                            <div class="flex-fill text-end">
                                <p class="mb-1">CREDITS AVAILABLE</p>
                                <p>7760.467</p>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mb-2">
                            <button class="btn btn-outline-success rounded-0">BUY ECOCREDITS</button>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col mb-4">
                  <div class="card shadow h-100">
                    <img src="https://www.philrice.gov.ph/wp-content/uploads/2024/12/negros.jpg"
                          alt="Image 2">
                    <div class="card-body bg-light">
                      <h2 class="text-truncate">Biocultural Jaguar Credits, Ancestral Stewardship in the Sharamentsa Community</h2>
                      <p class="card-text text-black-50 fs-7 mt-3"><i class="fas fa-map-marker-alt"></i> Pastaza, Ecuador | 10,000 ha.</p>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="d-flex">
                            <div class="flex-fill">
                                <p class="mb-1">AVG Price <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="This is the median average price of all open sell orders for this project."></i></p>
                                <p>$24.95</p>
                            </div>
                            <div class="flex-fill text-end">
                                <p class="mb-1">CREDITS AVAILABLE</p>
                                <p>7760.467</p>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mb-2">
                            <button class="btn btn-outline-success rounded-0">BUY ECOCREDITS</button>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col mb-4">
                  <div class="card shadow h-100">
                    <img src="https://www.philrice.gov.ph/wp-content/uploads/2024/12/negros.jpg"
                          alt="Image 2">
                    <div class="card-body bg-light">
                      <h2 class="text-truncate">Philipson Estate Blaston</h2>
                      <p class="card-text text-black-50 fs-7 mt-3"><i class="fas fa-map-marker-alt"></i> Blaston, Leicestershire, England, United Kingdom | 267 ha.</p>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="d-flex">
                            <div class="flex-fill">
                                <p class="mb-1">AVG Price <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="This is the median average price of all open sell orders for this project."></i></p>
                                <p>$24.95</p>
                            </div>
                            <div class="flex-fill text-end">
                                <p class="mb-1">CREDITS AVAILABLE</p>
                                <p>7760.467</p>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mb-2">
                            <button class="btn btn-outline-success rounded-0">BUY ECOCREDITS</button>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col mb-4">
                  <div class="card shadow h-100">
                    <img src="https://www.philrice.gov.ph/wp-content/uploads/2024/12/negros.jpg"
                          alt="Image 2">
                    <div class="card-body bg-light">
                      <h2 class="text-truncate">Sandy Cross Forest Preservation Project</h2>
                      <p class="card-text text-black-50 fs-7 mt-3"><i class="fas fa-map-marker-alt"></i> Lexington, Ohio, United States of AMerica, NOrth America | 53.4 ha.</p>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="d-flex">
                            <div class="flex-fill">
                                <p class="mb-1">AVG Price <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="This is the median average price of all open sell orders for this project."></i></p>
                                <p>$24.95</p>
                            </div>
                            <div class="flex-fill text-end">
                                <p class="mb-1">CREDITS AVAILABLE</p>
                                <p>7760.467</p>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mb-2">
                            <button class="btn btn-outline-success rounded-0">BUY ECOCREDITS</button>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col mb-4">
                  <div class="card shadow h-100">
                    <img src="https://www.philrice.gov.ph/wp-content/uploads/2024/12/negros.jpg"
                          alt="Image 2">
                    <div class="card-body bg-light">
                      <h2 class="text-truncate">El Globo Habitat Bank</h2>
                      <p class="card-text text-black-50 fs-7 mt-3"><i class="fas fa-map-marker-alt"></i> Cuchilla JArdin-Tamesis Integrated Management District(DMI), Colombia | 340.11 ha.</p>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="d-flex">
                            <div class="flex-fill">
                                <p class="mb-1">AVG Price <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="This is the median average price of all open sell orders for this project."></i></p>
                                <p>$24.95</p>
                            </div>
                            <div class="flex-fill text-end">
                                <p class="mb-1">CREDITS AVAILABLE</p>
                                <p>7760.467</p>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mb-2">
                            <button class="btn btn-outline-success rounded-0">BUY ECOCREDITS</button>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col mb-4">
                  <div class="card shadow h-100">
                    <img src="https://www.philrice.gov.ph/wp-content/uploads/2024/12/negros.jpg"
                          alt="Image 2">
                    <div class="card-body bg-light">
                      <h2 class="text-truncate">El Globo Habitat Bank</h2>
                      <p class="card-text text-black-50 fs-7 mt-3"><i class="fas fa-map-marker-alt"></i> Cuchilla JArdin-Tamesis Integrated Management District(DMI), Colombia | 340.11 ha.</p>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="d-flex">
                            <div class="flex-fill">
                                <p class="mb-1">AVG Price <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="This is the median average price of all open sell orders for this project."></i></p>
                                <p>$24.95</p>
                            </div>
                            <div class="flex-fill text-end">
                                <p class="mb-1">CREDITS AVAILABLE</p>
                                <p>7760.467</p>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mb-2">
                            <button class="btn btn-outline-success rounded-0">BUY ECOCREDITS</button>
                        </div>
                    </div>
                  </div>
                </div>



            </div>

        </div>


    </div>
    
    @include('layouts.footer')
    @push('scripts')
        <script type="text/javascript">

        </script>
    @endpush
@endsection
