@extends('templates.guest')

@section('title', 'Home')

@section('content')

    <header style="margin-top: -145px;z-index: 10">
        <div id="locationCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img src="{{ asset('images/landing-1.jpg') }}" class="d-block w-100" alt="San Mateo, Isabela">
                    <div class="carousel-caption">
                        <h2>San Mateo, Isabela</h2>
                        <p>San Mateo, Isabela is a key agricultural hub known for its extensive rice farming systems...</p>
                    </div>
                </div>
                <div style="background-color: #28c76f; height: 80vh;" class="carousel-item">
                    <div class="container">
                        <!-- Main Content Section -->
                        <div class="main-content" style="margin-top: 100px">
                            <div class="w-50 py-5">
                                <h1 class="text-light display-2 fw-bolder">Same Yield, Less Emitted Carbon, More Income</h1>
                                <p class="fs-4 fw-normal">
                                    Empowering Climate-Smart Agriculture with an all-Filipino Innovation. We help farmers
                                    adapt and
                                    monitor their sustainable farming practices for DigiSaka Carbon Credits
                                </p>
                                <a href="#" class="btn btn-success p-3">SAMPLE PROJECTS </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/landing-2.jpg') }}" class="d-block w-100" alt="Pangasinan">
                    <div class="carousel-caption">
                        <h2>Pangasinan</h2>
                        <p>Pangasinan’s vast rice fields serve as a model for sustainable intensification...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/landing-3.jpg') }}" class="d-block w-100" alt="Sta. Maria, Laguna">
                    <div class="carousel-caption">
                        <h2>Sta. Maria, Laguna</h2>
                        <p>Located in the heart of Laguna’s agricultural belt, Sta. Maria is advancing regenerative
                            agriculture...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/landing-5.jpg') }}" class="d-block w-100" alt="Talavera, Nueva Ecija">
                    <div class="carousel-caption">
                        <h2>Talavera, Nueva Ecija</h2>
                        <p>As part of the country’s rice granary, Talavera, Nueva Ecija is at the forefront of DigiSaka
                            Carbon Credits initiatives...</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#locationCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#locationCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </header>

    <div style="background: linear-gradient(#f8f8f8, #ffffff);">
        <!-- Metrics Section -->
        <div class="container pt-1">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center text-center text-black-50">
                        <div class="p-2 flex-fill bd-highlight">
                            <h1 class="fw-bold">&euro;7M</h1>
                            <div>Financing Facilitated</div>
                        </div>
                        <div class="p-2 flex-fill bd-highlight">
                            <h1 class="fw-bold">3.5M</h1>
                            <div>Hectares Visualized</div>
                        </div>
                        <div class="p-2 flex-fill bd-highlight">
                            <h1 class="fw-bold">12</h1>
                            <div>Countries Covered</div>
                        </div>
                        <div class="p-2 flex-fill bd-highlight">
                            <h1 class="fw-bold">5</h1>
                            <div>Project Types</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 pt-2">
            <h1>Partners and project farms</h1>

            <div class="container mt-4 pt-4">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="fw-bold">Strategic Partnerships</h1>
                        <div class="fs-5 fw-light pb-5">
                            Advancing agricultural innovation through collaboration.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="fw-bold">Research & Capacity Building</h1>
                    </div>
                </div>
                <div class="row row-cols-md-2">
                    <div class="col d-flex align-items-stretch">
                        <div class="card p-3">
                            <div class="card-body">
                                <h1 class="display-4">SEARCA Partnership</h1>
                                <ul>
                                    <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Capacity-building programs to empower agricultural stakeholders with knowledge and skills</li>
                                    <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Pilot projects implementing climate-smart farming techniques</li>
                                    <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Collaborative training initiatives to enhance sustainable agriculture practices</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            
                    <div class="col d-flex align-items-stretch">
                        <div class="card p-3">
                            <div class="card-body">
                                <h1 class="display-4">IRRI Partnership</h1>
                                <ul class="list-group">
                                    <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Calibration of methane emission sensors for accurate greenhouse gas monitoring</li>
                                    <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Field validation of sensor-based emissions tracking methodologies</li>
                                    <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Integration of advanced sensor technologies to support climate-resilient agriculture</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-2">

            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card rounded-5 shadow ">
                        <img src="{{ asset('images/landing-1.jpg') }}" alt="Image 1">
                        <div class="card-body">
                            <h2>San Mateo, Isabela</h2>
                            <div class="card-text text-black-50">San Mateo, Isabela is a key agricultural hub known for its
                                extensive rice farming systems. Farmers in the area are integrating climate-smart practices
                                such as Alternate Wetting and Drying (AWD) and precision fertilizer management to optimize
                                yields while reducing methane emissions. With strong support from local cooperatives and
                                research institutions, Isabela is pioneering data-driven solutions for carbon-neutral rice
                                farming.</div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card rounded-5 shadow ">
                        <img src="{{ asset('images/landing-2.jpg') }}" alt="Image 1">
                        <div class="card-body">
                            <h2>Pangasinan</h2>
                            <p class="card-text text-black-50">Pangasinan’s vast rice fields serve as a model for
                                sustainable intensification, where farmers are adopting smart irrigation, residue
                                management, and soil health monitoring. Through partnerships with local government and
                                private stakeholders, innovative tools such as IoT-based sensors and remote sensing are
                                being deployed to track GHG emissions and improve farm productivity.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card rounded-5 shadow ">
                        <img src="{{ asset('images/landing-3.jpg') }}" alt="Image 1">
                        <div class="card-body">
                            <h2>Sta. Maria, Laguna</h2>
                            <p class="card-text text-black-50">Located in the heart of Laguna’s agricultural belt, Sta.
                                Maria is advancing regenerative agriculture through low-emission rice cultivation and
                                sustainable land use planning. Farmers here are leveraging multispectral drone imaging and
                                AI-powered monitoring systems to optimize crop health and verify carbon sequestration
                                efforts, making it a leading site for digital transformation in rice farming. </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-5 shadow ">
                        <img src="{{ asset('images/landing-5.jpg') }}" alt="Image 1">
                        <div class="card-body">
                            <h2>Talavera, Nueva Ecija </h2>
                            <p class="card-text text-black-50">As part of the country’s rice granary, Talavera, Nueva Ecija
                                is at the forefront of DigiSaka Carbon Credits initiatives for rice farming. Farmers are
                                piloting GHG measurement frameworks, including flux towers, IoT-based methane sensors, and
                                UAV-assisted field assessments, to validate emissions reductions under sustainable rice
                                practices. These efforts position Talavera as a crucial site for research-backed MRV
                                (Monitoring, Reporting, and Verification) systems in Philippine agriculture.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 pt-5 pb-5">
            <div class="card border-0 rounded-4 p-2" style="background-color:#f2f2f2">
                <div class="card-body">

                    <div class="card rounded-4 mt-5 px-2">
                        <div class="card-body">
                            <div class="row rows-col-md-2 py-3">
                                <div class="col my-auto">
                                    <h6 class="text-start">AN UNFAMILIAR SOLUTION</h6>
                                    <h2 class="text-start display-4">GHG</h2>
                                    <p class="text-start text-black-50">
                                        Our visualization platform animates DigiSaka Carbon Credits projects and their
                                        impacts, in an engaging and digestible format to restore trust in carbon markets and
                                        drive investment in nature.
                                        <br /><br /><br />

                                        Put simply, we replace lengthy PDF documents (e.g. Project Design Documents) with a
                                        dynamic, immersive, and transparent visualization tool that radically accelerates
                                        understanding.
                                    </p>
                                </div>
                                <div class="col">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div id="farm_image" style="height: 700px; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card rounded-4 mt-5 px-2">
                        <div class="card-body">
                            <div class="row rows-col-md-2 py-3">
                                <div class="col">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <img src="{{ asset('images/timelapses.gif') }}" class="img-fluid"
                                                alt="Image 2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col my-auto">
                                    <h6 class="text-start">AN UNFAMILIAR SOLUTION</h6>
                                    <h2 class="text-start display-4">GHG</h2>
                                    <p class="text-start text-black-50">
                                        Our visualization platform animates DigiSaka Carbon Credits projects and their
                                        impacts, in an engaging and digestible format to restore trust in carbon markets and
                                        drive investment in nature.
                                        <br /><br /><br />

                                        Put simply, we replace lengthy PDF documents (e.g. Project Design Documents) with a
                                        dynamic, immersive, and transparent visualization tool that radically accelerates
                                        understanding.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- <div style="background:#f8f8f8" class="mb-5">
      <div class="container mt-5">
        <h2 class="display-3 pb-5">Our Platform</h2>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card rounded-4 shadow ">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/661a7cda341b39d0093db21e_Card%201.webp"
                      alt="Image 1">
                <div class="card-body">
                  <h2 class="pb-3">Interactive Map</h2>
                  <div class="card-text text-black-50">High-resolution maps with powerful geospatial layers bring scalable insight</div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card rounded-4 shadow ">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/661a7cdb40f287484e99c220_Card%202.webp">
                <div class="card-body">
                  <h2 class="pb-3">Land Cover Change</h2>
                  <p class="card-text text-black-50">Dynamic maps overlaid with geospatial analysis provide digestible comparisons</p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card rounded-4 shadow ">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/661a7cda79224465a7ed5737_Card%203.webp"
                      alt="Image 3">
                <div class="card-body">
                  <h2 class="pb-3">3D Projections</h2>
                  <p class="card-text text-black-50">Forward-looking projections help visualize project impact from a 3D perspective</p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card rounded-4 shadow ">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/661a7cda40edaca5a8f665c6_Card%204.webp"
                      alt="Image 1">
                <div class="card-body">
                  <h2 class="pb-3">Quality Assessments</h2>
                  <div class="card-text text-black-50">Objective remote sensing analyses help validate project integrity and quality</div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card rounded-4 shadow ">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/66d043d983e2817d2155fc51_AI.png">
                <div class="card-body">
                  <h2 class="pb-3">AI ChatBot</h2>
                  <p class="card-text text-black-50">Purpose-built ChatBot answers any project-level questions that you may have</p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card rounded-4 shadow ">
                <img src="https://cdn.prod.website-files.com/6575cd076d9b6571ad26cf76/66d043d97e2b3bd49f9ec913_Canopy.png"
                      alt="Image 3">
                <div class="card-body">
                  <h2 class="pb-3">Canopy Height</h2>
                  <p class="card-text text-black-50">Globally deployable model to monitor changes in canopy heights over time</p>
                </div>
              </div>
            </div>

          </div>
      </div>
    </div> --}}


    <div style="background:#ffffff" class="pt-5 pb-5">

        <div class="container">
            <h1 class="display-3 pb-5"> Providing Value For Our Clients</h1>

            <div class="row row-cols-md-2">
                <div class="col">
                    <div class="card p-3">
                        <div class="card-body">
                            <h1 class="display-4">Project <br> Developers</h1>
                            <h2 class="text-muted fs-4">Visualise your project to better communicate project impact and
                                jump-start credit sales</h2>

                            <ul>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Boost marketing
                                    efforts via best-in-class visualization</li>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Take the obscurity
                                    out of sales conversations to fast-track financing</li>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Generate price
                                    premiums through improved understanding</li>
                            </ul>

                            <div class="d-grid gap-2">
                                <button class="btn btn-secondary btn-lg" type="button">CONTACT US</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-3">
                        <div class="card-body">
                            <h1 class="display-4">Corporate <br> Buyers</h1>
                            <h2 class="text-muted fs-4">Visualise your project to better communicate project impact and
                                jump-start credit sales</h2>

                            <ul>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Engage employees
                                    and customers through enhanced visualization</li>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Measure carbon
                                    impact — not just at point of sale, but on an ongoing basis</li>
                                <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Leverage objective
                                    earth observation tools to pressure test carbon claims</li>
                            </ul>

                            <div class="d-grid gap-2">
                                <button class="btn btn-secondary btn-lg" type="button">CONTACT US</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <h1 class="display-3 pb-5"> Featured Projects</h1>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img
                            src="https://cdn.prod.website-files.com/6575d040b89a7f7c0f53b18a/66d1d3147b276eb195a366b5_Screenshot%202024-08-30%20at%2016.10.53.png" />
                    </div>
                    <div class="swiper-slide"><img
                            src="https://cdn.prod.website-files.com/6575d040b89a7f7c0f53b18a/661d3e9822a0ddedbffd2baf_Slide%202.png" />
                    </div>
                    <div class="swiper-slide"><img
                            src="https://cdn.prod.website-files.com/6575d040b89a7f7c0f53b18a/661d3e78d81c45cb3355de29_Slide%201.png" />
                    </div>
                    <div class="swiper-slide"><img
                            src="https://cdn.prod.website-files.com/6575d040b89a7f7c0f53b18a/661d5ab3773b02ef7eba220a_Frame%201000006326.png" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="container mt-5 pt-5">
            <h1 class="display-3 pb-4"> Featured In</h1>

            <div class="row row-cols-1 row-cols-md-2 g-4">

                <div class="col">
                    <div class="card rounded-4 shadow ">
                        <div class="card-header bg-black text-white">
                            <div class="card-title fs-4 p-0">Carbon Herald</div>
                        </div>
                        <div class="card-body">

                            <div class="card-text text-black-50 fs-5 px-2">GHG innovative platform breathes new life into
                                DigiSaka Carbon Credits projects. They transform complex data into engaging and
                                understandable formats.”</div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card rounded-4 shadow ">
                        <div class="card-header bg-danger text-white">
                            <div class="card-title fs-4 p-0">Carbon Pulse</div>
                        </div>
                        <div class="card-body">

                            <div class="card-text text-black-50 fs-5 px-2">“A new tool using remote sensing data and
                                artificial intelligence (AI) to bring carbon projects to life hopes to rebuild trust in
                                credits by making projects more accessible.”</div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card rounded-4 shadow ">
                        <div class="card-header bg-warning text-white">
                            <div class="card-title fs-4 p-0">International Business Time.</div>
                        </div>
                        <div class="card-body">

                            <div class="card-text text-black-50 fs-5 px-2">"It's all about commoditizing crystal-clear,
                                comprehensible data on DigiSaka Carbon Credits and projects in a way that's increasing
                                people's attention capabilities."</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('layouts.footer')
    @push('scripts')
        <script type="text/javascript" src="{{ asset('js/landing_page.js') }}"></script>
    @endpush
@endsection
