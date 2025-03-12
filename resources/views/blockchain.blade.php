@extends('templates.guest')

@section('title', 'Multidisciplinary Approach')

@section('content')
    <header style="background-color: #28c76f; min-height: 50vh;">
        <div class="container">
            <!-- Main Content Section -->
            <div class="main-content">
                <div class="w-50 py-5">
                    <h1 class="text-light display-2 fw-bolder">Secure and scalable blockchain</h1>
                    <p class="fs-4 fw-normal">
                        GHG offers a secure and scalable permissioned blockchain tailored for global food supply chains. Designed with enterprise-grade security and robust data governance, it ensures your information remains protected and efficiently managed.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <div class="my-5">
        <div class="container">
            <div class="d-flex">
                <div class="flex-fill">
                    <div class="fs-1">Millions of Business Transactions</div>
                    <p class="fs-4 pe-5 pb-4">
                        GHG’s blockchain seamlessly records millions of business transactions daily, ensuring transparency and efficiency across global supply chains.
                    </p>
                    <p class="fs-4 pe-5">
                        Operating in the background, it enables widespread adoption—thousands of farmers use it every day, often without even realizing they are interacting with blockchain technology.
                    </p>

                    <a href="#" class="btn btn-success p-3">Blockchain Explorer </a>
                </div>
                <div class="flex-fill">
                    <img fetchpriority="high" decoding="async" width="435" height="445" src="https://te-food.com/wp-content/uploads/2020/03/blockchain_3.png" class="attachment-large size-large wp-image-1812" alt="" srcset="https://te-food.com/wp-content/uploads/2020/03/blockchain_3.png 435w, https://te-food.com/wp-content/uploads/2020/03/blockchain_3-293x300.png 293w" sizes="(max-width: 435px) 100vw, 435px">
                </div>
            </div>

            <div class="row pt-5">
                <div class="col align-self-center text-center">
                    <img decoding="async" width="297" height="336" src="https://te-food.com/wp-content/uploads/2020/03/bc_image3.png" class="attachment-large size-large wp-image-1762" alt="" srcset="https://te-food.com/wp-content/uploads/2020/03/bc_image3.png 297w, https://te-food.com/wp-content/uploads/2020/03/bc_image3-265x300.png 265w" sizes="(max-width: 297px) 100vw, 297px">
                </div>

                <div class="col">
                    <div class="fs-1">Decentralized ledger with hundreds of nodes</div>
                    <p class="fs-4 py-4">
                        A key advantage of blockchain technology is its decentralized network of nodes. TrustChain operates across hundreds of nodes in multiple countries, ensuring global transparency and security.
                    </p>
                    <p class="fs-4">
                        Supply chain companies manage Supernodes, while consumers operate Masternodes, fostering a collaborative ecosystem that enhances efficiency and trust between industries and consumers.
                    </p>
                    <p class="fs-4">
                        GHG functions as a public-permissioned blockchain, allowing food companies to make selected data publicly viewable through the blockchain explorer. However, adding new data or verifying transactions requires authorization, ensuring robust security and governance.
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection