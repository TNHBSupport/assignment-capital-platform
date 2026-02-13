@extends('layouts.app')

@section('title', 'Submitted Applications')

@section('content')
<main class="py-5">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-4 gap-2">
            <div>
                <h1 class="h4 fw-bold mb-1">Submitted Applications</h1>
                <p class="text-muted mb-0">Temporary view for reviewing submissions.</p>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="btn btn-outline-secondary btn-sm" type="submit">Sign Out</button>
            </form>
        </div>

        <div class="card p-3 p-md-4 shadow-sm border-0">
            @if($applications->count() === 0)
                <div class="text-muted">No applications found.</div>
            @else
                <div class="d-flex flex-wrap gap-3 mb-3">
                    <div class="px-3 py-2 rounded-3 bg-light border">
                        <div class="small text-muted">Total on this page</div>
                        <div class="fw-semibold">{{ $applications->count() }}</div>
                    </div>
                    <div class="px-3 py-2 rounded-3 bg-light border">
                        <div class="small text-muted">Latest Submission</div>
                        <div class="fw-semibold">{{ optional($applications->first())->created_at?->format('Y-m-d H:i') ?? '-' }}</div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Submitted</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Property</th>
                                <th>State</th>
                                <th>Fee Total</th>
                                <th>Advance Range</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($applications as $app)
                                <tr>
                                    <td>{{ $app->id }}</td>
                                    <td>{{ $app->created_at?->format('Y-m-d H:i') }}</td>
                                    <td>{{ $app->fullName }}</td>
                                    <td>{{ $app->email }}</td>
                                    <td>{{ $app->phone }}</td>
                                    <td>{{ $app->propertyAddress }}</td>
                                    <td>{{ $app->state }}</td>
                                    <td>${{ number_format((float) $app->assignmentFee, 2) }}</td>
                                    <td>${{ number_format((float) $app->advanceRequestedMin, 2) }} - ${{ number_format((float) $app->advanceRequestedMax, 2) }}</td>
                                    <td class="text-end">
                                        <a class="btn btn-sm btn-primary" href="{{ route('applications.show', $app) }}">View Details</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $applications->links() }}
                </div>
            @endif
        </div>
    </div>
</main>
@endsection
