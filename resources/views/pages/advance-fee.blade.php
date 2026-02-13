@extends('layouts.app')

@section('title', 'Assignment Fee Advance — Deal Submission')

@push('styles')
<link href="{{ asset('css/advance-fee.css') }}" rel="stylesheet">
@endpush

@section('content')
<!-- HERO -->
@include('components.hero-section')

<!-- MAIN -->
<main class="py-5" id="apply">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <div class="fw-semibold mb-1">Please fix the errors below.</div>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row g-4">
            <!-- FORM -->
            <div class="col-lg-8">
                <div class="card p-4 p-md-5">
                    <div class="mb-4">
                        <h2 class="h4 fw-bold mb-1">Deal Submission Form</h2>
                        <p class="text-muted mb-0">Complete the details below so we can verify and send terms.</p>
                    </div>

                    <form id="dealForm" action="{{ route('advance-fee.submit') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <!-- CONTACT -->
                        @include('components.form-sections.contact-section')

                        <hr class="my-4" />

                        <!-- DEAL SNAPSHOT -->
                        @include('components.form-sections.deal-snapshot-section')

                        <hr class="my-4" />

                        <!-- ASSIGNMENT FEE -->
                        @include('components.form-sections.fee-section')

                        <hr class="my-4" />

                        <!-- DEAL STRENGTH -->
                        @include('components.form-sections.strength-section')

                        <hr class="my-4" />

                        <!-- OPTIONAL UPLOADS -->
                        @include('components.form-sections.upload-section')

                        <!-- SUBMIT -->
                        <div class="d-flex flex-column flex-sm-row gap-2 align-items-sm-center justify-content-between">
                            <div class="text-muted small">
                                By submitting, you confirm the information provided is accurate to the best of your knowledge.
                            </div>
                            <button class="btn btn-success btn-lg" type="submit">
                                Submit Deal
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="col-lg-4">
                <div class="sticky-cta">
                    @include('components.sidebar.next-steps')
                    @include('components.sidebar.approval-signals')
                </div>
            </div>
        </div>
    </div>
</main>

<!-- THANK YOU MODAL -->
@include('components.modals.thank-you')
@endsection

@push('scripts')
<script src="{{ asset('js/advance-fee.js') }}"></script>
@endpush
