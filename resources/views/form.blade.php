@extends('layouts.app')

@section('main')
    <div class="container-fluid min-vh-100 d-flex align-items-center m-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5">

                    <!-- Card Container -->
                    <div class="card border-0 shadow-sm rounded-4 bg-white overflow-hidden">

                        <!-- Clean Header (White background, no borders) -->
                        <div class="card-body p-5">
                            <div class="text-center mb-5">
                                <div class="icon-shape mb-3">
                                    <i class="fas fa-circle-user fa-3x text-dark"></i>
                                </div>
                                <h3 class="fw-bold text-dark">Create Account</h3>
                                <p class="text-muted small">Please fill in the details to register</p>
                            </div>

                            <form action="/form/store" method="POST">
                                @csrf

                                <!-- Name Field -->
                                <div class="mb-4">
                                    <label class="form-label small fw-semibold text-secondary">FULL NAME</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text bg-white border-end-0">
                                            <i class="fas fa-user text-muted small"></i>
                                        </span>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control border-start-0 ps-0 custom-input"
                                            placeholder="John Doe">
                                    </div>
                                    @error('name')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email Field -->
                                <div class="mb-4">
                                    <label class="form-label small fw-semibold text-secondary">EMAIL ADDRESS</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text bg-white border-end-0">
                                            <i class="fas fa-envelope text-muted small"></i>
                                        </span>
                                        <input type="email" name="email" value="{{ old('email') }}" 
                                            class="form-control border-start-0 ps-0 custom-input"
                                            placeholder="name@example.com">
                                    </div>
                                    @error('email')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Major Field -->
                                <div class="mb-5">
                                    <label class="form-label small fw-semibold text-secondary">ACADEMIC MAJOR</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text bg-white border-end-0">
                                            <i class="fas fa-graduation-cap text-muted small"></i>
                                        </span>
                                        <select name="major" class="form-select border-start-0 ps-0 custom-input">
                                            <option selected disabled>Select your major</option>
                                            <option>Computer Science</option>
                                            <option>Business Administration</option>
                                            <option>Graphic Design</option>
                                        </select>
                                    </div>
                                    @error('major')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Submit Button - Minimalist Dark style -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark btn-lg py-3 rounded-3 fw-bold shadow-sm">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Footer Link -->
                        <div class="card-footer bg-white border-0 text-center pb-4">
                            <p class="small text-muted">Already have an account? <a href="#"
                                    class="text-dark fw-bold text-decoration-none">Sign In</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom refinements for the "Clean" look */
        .custom-input {
            border-color: #e9ecef;
            font-size: 0.95rem;
            padding-top: 0.7rem;
            padding-bottom: 0.7rem;
        }

        .custom-input:focus {
            border-color: #dee2e6;
            box-shadow: none;
            /* Removes the heavy blue glow */
            background-color: #fff;
        }

        .input-group-text {
            border-color: #e9ecef;
            color: #adb5bd;
        }

        /* Change focus behavior for the whole group */
        .input-group:focus-within .input-group-text,
        .input-group:focus-within .form-control {
            border-color: #000 !important;
        }

        .form-label {
            letter-spacing: 0.5px;
        }
    </style>
@endsection