@extends('templates.guest')

@section('title', 'Multidisciplinary Approach')

@section('content')
    <header style="background-color: #28c76f; min-height: 50vh;margin-bottom:-250px">
        <div class="container">
            <!-- Main Content Section -->
            <div class="main-content">
                <div class="w-50 py-5  ">
                    <h1 class=" text-light display-2 fw-bolder">Contact Us</h1>
                    <p class="fs-4 fw-normal">We would love to hear from you! Please reach out using the form below.</p>
                </div>
            </div>
        </div>
    </header>


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="bg-white p-5 rounded">
                    <div class="text-center mt-2">
                        <h3>Message</h3>
                       
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" id="subject" required>
                                    <option selected disabled>Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="support">Customer Support</option>
                                    <option value="feedback">Feedback</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Write your message here" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="mt-4">
                    <h5>Other Ways to Reach Us:</h5>
                    <ul class="list-group">
                        <li class="list-group-item">📧 Email: support@example.com</li>
                        <li class="list-group-item">📞 Phone: +1 234 567 890</li>
                        <li class="list-group-item">📍 Address: 123 Main Street, City, Country</li>
                        <li class="list-group-item">🌍 Website: <a href="https://example.com">https://example.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
