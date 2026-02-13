@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<main class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card p-4 shadow-sm border-0">
                    <h1 class="h5 fw-bold mb-3">Admin Login</h1>

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.login.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input class="form-control" name="username" value="{{ old('username') }}" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input class="form-control" type="password" name="password" required />
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
