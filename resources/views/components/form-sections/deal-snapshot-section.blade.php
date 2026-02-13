<div class="mb-4">
    <div class="d-flex justify-content-between align-items-end mb-2">
        <div class="form-section-title">Deal Snapshot</div>
        <span class="text-muted small">Required</span>
    </div>

    <div class="row g-3">
        <div class="col-12">
            <label class="form-label req">Property Address</label>
            <input name="propertyAddress" id="propertyAddress" class="form-control" value="{{ old('propertyAddress') }}" required />
            <div class="invalid-feedback">Please enter the property address.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">State</label>
            <input name="state" id="state" class="form-control" value="{{ old('state') }}" placeholder="e.g., TX" maxlength="2" required />
            <div class="invalid-feedback">Enter a 2-letter state.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">Projected Closing Date</label>
            <input name="closingDate" id="closingDate" type="date" class="form-control" value="{{ old('closingDate') }}" required />
            <div class="invalid-feedback">Please select a date.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">Deal Type</label>
            <select name="dealType" id="dealType" class="form-select" required>
                <option value="" disabled {{ old('dealType') ? '' : 'selected' }}>Select…</option>
                <option {{ old('dealType') === 'Assignment' ? 'selected' : '' }}>Assignment</option>
                <option {{ old('dealType') === 'Double Close' ? 'selected' : '' }}>Double Close</option>
                <option {{ old('dealType') === 'Novation / Wholetail' ? 'selected' : '' }}>Novation / Wholetail</option>
                <option {{ old('dealType') === 'Other' ? 'selected' : '' }}>Other</option>
            </select>
            <div class="invalid-feedback">Please choose a deal type.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label req">Is the end buyer under contract?</label>
            <select name="buyerUnderContract" id="buyerUnderContract" class="form-select" required>
                <option value="" disabled {{ old('buyerUnderContract') ? '' : 'selected' }}>Select…</option>
                <option {{ old('buyerUnderContract') === 'Yes' ? 'selected' : '' }}>Yes</option>
                <option {{ old('buyerUnderContract') === 'No' ? 'selected' : '' }}>No</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label req">Has title been opened?</label>
            <select name="titleOpened" id="titleOpened" class="form-select" required>
                <option value="" disabled {{ old('titleOpened') ? '' : 'selected' }}>Select…</option>
                <option {{ old('titleOpened') === 'Yes' ? 'selected' : '' }}>Yes</option>
                <option {{ old('titleOpened') === 'No' ? 'selected' : '' }}>No</option>
                <option {{ old('titleOpened') === 'Not sure' ? 'selected' : '' }}>Not sure</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label">Title Company Name</label>
            <input name="titleCompanyName" id="titleCompanyName" class="form-control" value="{{ old('titleCompanyName') }}" placeholder="Optional (recommended)" />
        </div>
        <div class="col-md-6">
            <label class="form-label">Title Company Contact (Email or Phone)</label>
            <input name="titleCompanyContact" id="titleCompanyContact" class="form-control" value="{{ old('titleCompanyContact') }}" placeholder="Optional (recommended)" />
        </div>
    </div>
</div>
