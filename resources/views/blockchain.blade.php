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
                        GHG delivers a permissioned blockchain designed for global food supply chains.Its enterprise-grade security and data governance ensure your information is protected and well-managed.
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
                        Every day, GHG’s blockchain records business operations for millions of products.
                    </p>
                    <p class="fs-4 pe-5">
                        Since blockchain technology operates seamlessly in the background, it doesn’t hinder adoption. Thousands of farmers use it daily—many without even realizing they are interacting with blockchain.
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
                        A major benefit of blockchain technology is its decentralized network of nodes. The TrustChain operates through hundreds of nodes distributed across multiple countries worldwide.
                    </p>
                    <p class="fs-4">
                        Some nodes are managed by supply chain companies (Supernodes), while others are operated by the consumer community (Masternodes), creating a global partnership between industry and consumers to enhance efficiency and transparency.
                    </p>
                    <p class="fs-4">
                        GHG operates as a public-permissioned blockchain. Data marked as “public” by food companies can be viewed on the blockchain explorer, while adding new data or verifying transactions requires authorization for enhanced security.
                    </p>
                </div>
                
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection