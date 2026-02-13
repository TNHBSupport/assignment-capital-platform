@extends('layouts.app')

@section('title', 'Application #' . $application->id)

@section('content')
<main class="py-5">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-4 gap-2">
            <div>
                <h1 class="h4 fw-bold mb-1">Application #{{ $application->id }}</h1>
                <p class="text-muted mb-0">Submitted {{ $application->created_at?->format('Y-m-d H:i') }}</p>
            </div>
            <div>
                <a class="btn btn-outline-secondary" href="{{ route('applications.index') }}">Back to list</a>
            </div>
        </div>

        <div class="card p-3 p-md-4">
            <div class="row g-4">
                <div class="col-12">
                    <h2 class="h6 fw-bold mb-2">Contact</h2>
                    <div class="row g-2">
                        <div class="col-md-4"><strong>Name:</strong> {{ $application->fullName }}</div>
                        <div class="col-md-4"><strong>Company:</strong> {{ $application->companyName ?? '-' }}</div>
                        <div class="col-md-4"><strong>Role:</strong> {{ $application->role }}</div>
                        <div class="col-md-4"><strong>Email:</strong> {{ $application->email }}</div>
                        <div class="col-md-4"><strong>Phone:</strong> {{ $application->phone }}</div>
                        <div class="col-md-4"><strong>Decision Maker:</strong> {{ $application->decisionMaker }}</div>
                    </div>
                </div>

                <div class="col-12">
                    <h2 class="h6 fw-bold mb-2">Deal Snapshot</h2>
                    <div class="row g-2">
                        <div class="col-md-8"><strong>Property:</strong> {{ $application->propertyAddress }}</div>
                        <div class="col-md-4"><strong>State:</strong> {{ $application->state }}</div>
                        <div class="col-md-4"><strong>Closing Date:</strong> {{ $application->closingDate?->format('Y-m-d') }}</div>
                        <div class="col-md-4"><strong>Deal Type:</strong> {{ $application->dealType }}</div>
                        <div class="col-md-4"><strong>Buyer Under Contract:</strong> {{ $application->buyerUnderContract }}</div>
                        <div class="col-md-6"><strong>Title Opened:</strong> {{ $application->titleOpened }}</div>
                        <div class="col-md-6"><strong>Title Company:</strong> {{ $application->titleCompanyName ?? '-' }}</div>
                        <div class="col-md-6"><strong>Title Contact:</strong> {{ $application->titleCompanyContact ?? '-' }}</div>
                    </div>
                </div>

                <div class="col-12">
                    <h2 class="h6 fw-bold mb-2">Assignment Fee & Numbers</h2>
                    <div class="row g-2">
                        <div class="col-md-4"><strong>Total Fee:</strong> ${{ number_format((float) $application->assignmentFee, 2) }}</div>
                        <div class="col-md-4"><strong>Your Portion:</strong> ${{ number_format((float) $application->yourPortion, 2) }}</div>
                        <div class="col-md-4"><strong>Funding When:</strong> {{ $application->fundingWhen }}</div>
                        <div class="col-md-4"><strong>Advance Min:</strong> ${{ number_format((float) $application->advanceRequestedMin, 2) }}</div>
                        <div class="col-md-4"><strong>Advance Max:</strong> ${{ number_format((float) $application->advanceRequestedMax, 2) }}</div>
                        <div class="col-md-4"><strong>Seller Contract Price:</strong> {{ $application->sellerContractPrice ? '$' . number_format((float) $application->sellerContractPrice, 2) : '-' }}</div>
                        <div class="col-md-4"><strong>End Buyer Price:</strong> {{ $application->endBuyerPrice ? '$' . number_format((float) $application->endBuyerPrice, 2) : '-' }}</div>
                        <div class="col-md-4"><strong>Splitting Fee:</strong> {{ $application->splittingFee }}</div>
                        <div class="col-md-4"><strong>Net Portion:</strong> {{ $application->netPortion ?? '-' }}</div>
                        <div class="col-md-4"><strong>Use of Funds:</strong> {{ $application->useOfFunds ?? '-' }}</div>
                    </div>
                </div>

                <div class="col-12">
                    <h2 class="h6 fw-bold mb-2">Deal Strength & Verification</h2>
                    <div class="row g-2">
                        <div class="col-md-4"><strong>EMD Amount:</strong> ${{ number_format((float) $application->emdAmount, 2) }}</div>
                        <div class="col-md-4"><strong>EMD Cleared:</strong> {{ $application->emdCleared }}</div>
                        <div class="col-md-4"><strong>EMD Who:</strong> {{ $application->emdWho ?? '-' }}</div>
                        <div class="col-md-4"><strong>Contracts Executed:</strong> {{ $application->contractsExecuted }}</div>
                        <div class="col-md-4"><strong>Buyer Type:</strong> {{ $application->buyerType ?? '-' }}</div>
                        <div class="col-md-4"><strong>Title Payback Auth:</strong> {{ $application->titlePaybackAuth }}</div>
                        <div class="col-md-4"><strong>Contact Title OK:</strong> {{ $application->contactTitleOk }}</div>
                        <div class="col-md-6"><strong>Own Real Estate:</strong> {{ $application->ownRealEstate }}</div>
                        <div class="col-md-6"><strong>Own Real Estate Details:</strong> {{ $application->ownRealEstateDetails ?? '-' }}</div>
                        <div class="col-12"><strong>Notes:</strong> {{ $application->notes ?? '-' }}</div>
                    </div>
                </div>

                <div class="col-12">
                    <h2 class="h6 fw-bold mb-2">Documents</h2>
                    <div class="row g-2">
                        <div class="col-md-3"><strong>Purchase Contract:</strong> {!! $application->purchaseContract ? '<a href="' . asset('storage/' . $application->purchaseContract) . '" target="_blank">View</a>' : '-' !!}</div>
                        <div class="col-md-3"><strong>Assignment Agreement:</strong> {!! $application->assignmentAgreement ? '<a href="' . asset('storage/' . $application->assignmentAgreement) . '" target="_blank">View</a>' : '-' !!}</div>
                        <div class="col-md-3"><strong>Proof of Funds:</strong> {!! $application->proofOfFunds ? '<a href="' . asset('storage/' . $application->proofOfFunds) . '" target="_blank">View</a>' : '-' !!}</div>
                        <div class="col-md-3"><strong>JV Agreement:</strong> {!! $application->jvAgreement ? '<a href="' . asset('storage/' . $application->jvAgreement) . '" target="_blank">View</a>' : '-' !!}</div>
                    </div>
                    <div class="text-muted small mt-2">If a link doesn't open, ensure `php artisan storage:link` is set on the server.</div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
