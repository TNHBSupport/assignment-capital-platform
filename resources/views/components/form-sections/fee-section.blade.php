<div class="mb-4">
    <div class="d-flex justify-content-between align-items-end mb-2">
        <div class="form-section-title">Assignment Fee & Numbers</div>
        <span class="text-muted small">Required</span>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label req">Are you splitting this assignment fee?</label>
            <select name="splittingFee" id="splittingFee" class="form-select" required>
                <option value="" disabled {{ old('splittingFee') ? '' : 'selected' }}>Select…</option>
                <option {{ old('splittingFee') === 'No' ? 'selected' : '' }}>No</option>
                <option {{ old('splittingFee') === 'Yes' ? 'selected' : '' }}>Yes</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-6 {{ old('splittingFee') === 'Yes' ? '' : 'd-none' }}" id="splitDetailsWrap">
            <label class="form-label req">Your net portion (%, or $ amount)</label>
            <input name="netPortion" id="netPortion" class="form-control" value="{{ old('netPortion') }}" placeholder="e.g., 50% or $10,000" />
            <div class="invalid-feedback">Please enter your net portion.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">Projected Total Fee ($)</label>
            <input name="assignmentFee" id="assignmentFee" class="form-control" type="number" min="0" step="1" value="{{ old('assignmentFee') }}" required />
            <div class="invalid-feedback">Enter the projected assignment fee total.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">Your Portion ($)</label>
            <input name="yourPortion" id="yourPortion" class="form-control" type="number" min="0" step="1" value="{{ old('yourPortion') }}" required />
            <div class="invalid-feedback">Enter your portion.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">When do you need funds?</label>
            <select name="fundingWhen" id="fundingWhen" class="form-select" required>
                <option value="" disabled {{ old('fundingWhen') ? '' : 'selected' }}>Select…</option>
                <option {{ old('fundingWhen') === 'Same day' ? 'selected' : '' }}>Same day</option>
                <option {{ old('fundingWhen') === 'Within 24 hours' ? 'selected' : '' }}>Within 24 hours</option>
                <option {{ old('fundingWhen') === 'Within 48 hours' ? 'selected' : '' }}>Within 48 hours</option>
                <option {{ old('fundingWhen') === 'This week' ? 'selected' : '' }}>This week</option>
            </select>
            <div class="invalid-feedback">Please select timing.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label req">Minimum Advance Requested ($)</label>
            <input name="advanceRequestedMin" id="advanceRequestedMin" class="form-control" type="number" min="0" step="1" value="{{ old('advanceRequestedMin') }}" required />
            <div class="invalid-feedback">Enter the minimum amount you want advanced.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label req">Maximum Advance Requested ($)</label>
            <input name="advanceRequestedMax" id="advanceRequestedMax" class="form-control" type="number" min="0" step="1" value="{{ old('advanceRequestedMax') }}" required />
            <div class="invalid-feedback">Enter the maximum amount you want advanced.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label">Seller Contract Price ($)</label>
            <input name="sellerContractPrice" id="sellerContractPrice" class="form-control" type="number" min="0" step="1" value="{{ old('sellerContractPrice') }}" placeholder="Optional" />
        </div>

        <div class="col-md-6">
            <label class="form-label">End Buyer Purchase Price ($)</label>
            <input name="endBuyerPrice" id="endBuyerPrice" class="form-control" type="number" min="0" step="1" value="{{ old('endBuyerPrice') }}" placeholder="Optional" />
        </div>

        <div class="col-12">
            <label class="form-label">What will you use the advance for?</label>
            <select name="useOfFunds" id="useOfFunds" class="form-select">
                <option value="" {{ old('useOfFunds') ? '' : 'selected' }}>Optional</option>
                <option {{ old('useOfFunds') === 'Marketing / Ads' ? 'selected' : '' }}>Marketing / Ads</option>
                <option {{ old('useOfFunds') === 'Earnest Money for another deal' ? 'selected' : '' }}>Earnest Money for another deal</option>
                <option {{ old('useOfFunds') === 'Paying Dispo / JV' ? 'selected' : '' }}>Paying Dispo / JV</option>
                <option {{ old('useOfFunds') === 'Business operations' ? 'selected' : '' }}>Business operations</option>
                <option {{ old('useOfFunds') === 'Personal / Emergency' ? 'selected' : '' }}>Personal / Emergency</option>
                <option {{ old('useOfFunds') === 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>
    </div>
</div>
