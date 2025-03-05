@extends('templates.guest')

@section('title', 'Multidisciplinary Approach')

@section('content')
    <header style="background-color: #28c76f; min-height: 50vh;margin-bottom:-250px">
        <div class="container">
            <!-- Main Content Section -->
            <div class="main-content">
                <div class="w-50 py-5">
                    <h1 class="text-light display-2 fw-bolder">Our Framework</h1>
                </div>
            </div>
        </div>
    </header>

    <div style="background: linear-gradient(#f8f8f8, #ffffff);" class="pb-5">
        <div class="container mt-4 pt-4">

            <div class="row row-cols-md-12">
                <div class="col d-flex align-items-stretch">
                    <div class="card p-3 ">
                        <div class="card-body">
                            <h1 class="display-12">The <strong>LEADS MRV Framework</strong> provides a structured approach to <strong>accreditation and verification</strong> for carbon credits in climate-smart rice farming. It incorporates <strong>remote sensing, IoT-based GHG monitoring, and AI-driven analytics</strong> to systematically track key farming practices such as <strong>water management (AWD), tillage, crop rotation, and residue handling.</strong> Developed in collaboration with <strong>SEARCA and international certifiers</strong>, the framework follows a <strong>multi-tiered verification process</strong> to align with global carbon market standards
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    @include('layouts.footer')
@endsection
