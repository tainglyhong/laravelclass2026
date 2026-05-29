@extends('layouts.dashboard')

@section('main')

    <div class="main-content">

        <!-- Top Navbar -->
        <div class="top-navbar d-flex justify-content-between align-items-center">
            <h4 class="mb-0 fw-bold text-dark">
                <i class="bi bi-envelope-fill"></i> Contact Messages
            </h4>

            <button class="btn btn-dark">
                <i class="bi bi-person-circle"></i> Admin
            </button>
        </div>

        <!-- Contact Table Card -->
        <div class="card dashboard-card border-0">

            <div class="card-header bg-white py-3 border-0">
                <h5 class="mb-0 fw-bold text-dark">
                    All Contact Messages
                </h5>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($contact as $con)

                                <tr>
                                    <td>{{ $con->id }}</td>

                                    <td>
                                        <i class="bi bi-person-fill text-primary"></i>
                                        {{ $con->name }}
                                    </td>

                                    <td>{{ $con->email }}</td>

                                    <td>
                                        <span class="badge bg-primary">
                                            {{ $con->subject }}
                                        </span>
                                    </td>

                                    <td>{{ $con->message }}</td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

@endsection