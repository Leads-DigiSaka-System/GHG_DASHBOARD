@extends('templates.guest')

@section('title','Multidisciplinary Approach')

@section('content')
	<header style="background-color: #28c76f; min-height: 50vh;">
      <div class="container">
        <!-- Main Content Section -->
        <div class="main-content">
            <div class="w-50 py-5">
              <h1 class="text-light display-2 fw-bolder">Our Multidisciplinary Approach</h1>
              <p class="fs-4 fw-normal">
              </p>
            </div>
        </div>
      </div>
    </header>

    <div style="background: linear-gradient(#f8f8f8, #ffffff);" class="pb-5">
      <div class="container mt-4 pt-4">
        <h1 class="fw-bold">Verified and Research-Backed Practices</h1>
          <div class="fs-5 fw-light pb-5">
              A foundation of science and collaboration.
          </div>

        <div class="row row-cols-md-2">
          <div class="col d-flex align-items-stretch">
            <div class="card p-3 ">
              <div class="card-body">
                <h1 class="display-4">Scientific Validation</h1>
                <ul>
                  <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> All monitored variables, from GHG emissions to water use and soil health, are measured using methods validated by peer-reviewed research.</li>
                  <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Our in-house scientific team ensures all protocols align with international DigiSaka Carbon Credits standards</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col d-flex align-items-stretch">
            <div class="card p-3">
              <div class="card-body">
                <h1 class="display-4">Collaborative Expertise</h1>
                <ul class="list-group">
                  <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> Partnerships with government agencies, academic institutions, and global research networks reinforce the credibility of our methodologies.</li>
                  <li class="fs-4 list-group-item border-0"> <i class="fas fa-check"></i> We integrate local knowledge and indigenous farming techniques, ensuring that the technology is not only data-driven but also contextually relevant to the realities of Filipino agriculture.</li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-5 pt-5">
        <h1 class="fw-bold">Why It Matters</h1>
          <div class="fs-5 fw-light pb-5">
              From farms to carbon Mmarkets, trust is in the details.
          </div>

          <div class="row row-cols-md-2 row-cols-lg-3 g-4">

          <div class="col d-flex align-items-stretch">
            <div class="card rounded-4 shadow ">
              <div class="card-header bg-black text-white">
              </div>
              <div class="card-body">
                
                <div class="card-text text-black-50 fs-5 px-2">Our monitoring ensures accuracy, timeliness, and spatial detail, critical for validating DigiSaka Carbon Credits.”</div>
              </div>
            </div>
          </div>

          <div class="col d-flex align-items-stretch">
            <div class="card rounded-4 shadow ">
              <div class="card-header bg-danger text-white">
              </div>
              <div class="card-body">
                
                <div class="card-text text-black-50 fs-5 px-2">Farmers gain access to carbon markets with the confidence that their practices meet global standards.</div>
              </div>
            </div>
          </div>

          <div class="col d-flex align-items-stretch">
            <div class="card rounded-4 shadow ">
              <div class="card-header bg-warning text-white">
              </div>
              <div class="card-body">
                
                <div class="card-text text-black-50 fs-5 px-2">Verified data fosters trust among investors, buyers, and regulators.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  
  @include('layouts.footer')
@endsection