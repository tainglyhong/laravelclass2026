@extends('layouts.app')

@section('main')
    <!-- Contact Section -->
    <div class="container py-5">

        <!-- Page Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h1 class="fw-bolder display-4 mb-3">Get in Touch</h1>
                <p class="text-muted lead">
                    Have questions or want to learn more? Reach out to us using the contact details below or send us a
                    direct message.
                </p>
            </div>
        </div>

        <!-- Top Row: Contact Info Icon Cards -->
        <div class="row g-4 mb-5">
            <!-- Address Card -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center py-4">
                    <div class="card-body">
                        <!-- Soft Background Icon Wrapper -->
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary mb-4"
                            style="width: 80px; height: 80px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-2">Our Location</h4>
                        <p class="text-muted mb-0">Preah Norodom Blvd<br>Phnom Penh, Cambodia</p>
                    </div>
                </div>
            </div>

            <!-- Phone Card -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center py-4">
                    <div class="card-body">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary mb-4"
                            style="width: 80px; height: 80px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-2">Call Us</h4>
                        <p class="text-muted mb-0">+855 23 456 789<br>Mon-Fri, 8am - 5pm</p>
                    </div>
                </div>
            </div>

            <!-- Email Card -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center py-4">
                    <div class="card-body">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary mb-4"
                            style="width: 80px; height: 80px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-2">Email Us</h4>
                        <p class="text-muted mb-0">contact@yourdomain.com.kh<br>Online 24/7</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Row: Unified Form & Map Card -->
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
            <!-- g-0 removes the gap between bootstrap columns so the map touches the form -->
            <div class="row g-0">

                <!-- Left Side: Form Section -->
                <div class="col-lg-6 p-4 p-md-5 bg-white">

                    @if(session('success'))
                        {{ session('success') }}
                    
                    @endif
                    <h3 class="fw-bold mb-4">Send us a Message</h3>

                    <form action="/contact" method="POST">
                        @csrf <!-- Laravel CSRF Token -->

                        <div class="row">
                            <!-- Floating Label Full Name -->
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="name" name="name" 
                                        placeholder="John Doe" required>
                                    <label for="name" class="text-muted">Full Name</label>
                                </div>
                            </div>

                            <!-- Floating Label Email -->
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" id="email" name="email"
                                        placeholder="name@example.com">
                                    <label for="email" class="text-muted">Email Address</label>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Label Subject -->
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-light border-0" id="subject" name="subject"
                                    placeholder="Subject">
                                <label for="subject" class="text-muted">Subject</label>
                            </div>
                        </div>

                        <!-- Floating Label Message -->
                        <div class="mb-4">
                            <div class="form-floating">
                                <textarea class="form-control bg-light border-0" id="message" name="message"
                                    placeholder="Leave a message here" style="height: 150px" required></textarea>
                                <label for="message" class="text-muted">Message</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="me-2 mb-1" viewBox="0 0 16 16">
                                <path
                                    d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Right Side: Google Map -->
                <!-- The map fills 100% height of whatever the left form forces the card to be -->
                <div class="col-lg-6 position-relative" style="min-height: 400px;">
                    <iframe
                        src="https://maps.google.com/maps?q=Phnom%20Penh,%20Cambodia&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        class="position-absolute top-0 start-0 w-100 h-100" frameborder="0" style="border:0;"
                        allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>

            </div>
        </div>

    </div>
@endsection