<div class="mb-4">
    <div class="d-flex justify-content-between align-items-end mb-2">
        <div class="form-section-title">Deal Strength & Verification</div>
        <span class="text-muted small">Required</span>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label req">Earnest Money Deposited ($)</label>
            <input name="emdAmount" id="emdAmount" class="form-control @error('emdAmount') is-invalid @enderror" type="number" min="0" step="1" value="{{ old('emdAmount') }}" required />
            <div class="invalid-feedback">Enter EMD amount (enter 0 if none).</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">Has EMD cleared?</label>
            <select name="emdCleared" id="emdCleared" class="form-select @error('emdCleared') is-invalid @enderror" required>
                <option value="" disabled {{ old('emdCleared') ? '' : 'selected' }}>Select…</option>
                <option {{ old('emdCleared') === 'Yes' ? 'selected' : '' }}>Yes</option>
                <option {{ old('emdCleared') === 'No' ? 'selected' : '' }}>No</option>
                <option {{ old('emdCleared') === 'Not sure' ? 'selected' : '' }}>Not sure</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label">Who delivered EMD?</label>
            <select name="emdWho" id="emdWho" class="form-select @error('emdWho') is-invalid @enderror">
                <option value="" {{ old('emdWho') ? '' : 'selected' }}>Optional</option>
                <option {{ old('emdWho') === 'End Buyer' ? 'selected' : '' }}>End Buyer</option>
                <option {{ old('emdWho') === 'Me (Wholesaler)' ? 'selected' : '' }}>Me (Wholesaler)</option>
                <option {{ old('emdWho') === 'Dispo Company' ? 'selected' : '' }}>Dispo Company</option>
                <option {{ old('emdWho') === 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label req">Are all contracts fully executed?</label>
            <select name="contractsExecuted" id="contractsExecuted" class="form-select @error('contractsExecuted') is-invalid @enderror" required>
                <option value="" disabled {{ old('contractsExecuted') ? '' : 'selected' }}>Select…</option>
                <option {{ old('contractsExecuted') === 'Yes' ? 'selected' : '' }}>Yes</option>
                <option {{ old('contractsExecuted') === 'No' ? 'selected' : '' }}>No</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label">End Buyer Purchase Type</label>
            <select name="buyerType" id="buyerType" class="form-select @error('buyerType') is-invalid @enderror">
                <option value="" {{ old('buyerType') ? '' : 'selected' }}>Optional</option>
                <option {{ old('buyerType') === 'Cash' ? 'selected' : '' }}>Cash</option>
                <option {{ old('buyerType') === 'Hard Money' ? 'selected' : '' }}>Hard Money</option>
                <option {{ old('buyerType') === 'Conventional Financing' ? 'selected' : '' }}>Conventional Financing</option>
                <option {{ old('buyerType') === 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label req">Authorize repayment from title at closing?</label>
            <select name="titlePaybackAuth" id="titlePaybackAuth" class="form-select @error('titlePaybackAuth') is-invalid @enderror" required>
                <option value="" disabled {{ old('titlePaybackAuth') ? '' : 'selected' }}>Select…</option>
                <option {{ old('titlePaybackAuth') === 'Yes' ? 'selected' : '' }}>Yes</option>
                <option {{ old('titlePaybackAuth') === 'No' ? 'selected' : '' }}>No</option>
                <option {{ old('titlePaybackAuth') === 'Not sure' ? 'selected' : '' }}>Not sure</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label req">May we contact title to verify the deal?</label>
            <select name="contactTitleOk" id="contactTitleOk" class="form-select @error('contactTitleOk') is-invalid @enderror" required>
                <option value="" disabled {{ old('contactTitleOk') ? '' : 'selected' }}>Select…</option>
                <option {{ old('contactTitleOk') === 'Yes' ? 'selected' : '' }}>Yes</option>
                <option {{ old('contactTitleOk') === 'No' ? 'selected' : '' }}>No</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-12">
            <label class="form-label">Notes (Anything we should know?)</label>
            <textarea name="notes" id="notes" class="form-control @error('notes') is-invalid @enderror" rows="4" placeholder="Optional details: inspection issues, title issues, JV structure, etc.">{{ old('notes') }}</textarea>
        </div>

        <div class="col-md-8">
            <label class="form-label req">Do you or anybody close to you own real estate (this will help us keep your assignment fee advance cost down)?</label>
            <select name="ownRealEstate" id="ownRealEstate" class="form-select @error('ownRealEstate') is-invalid @enderror" required>
                <option value="" disabled {{ old('ownRealEstate') ? '' : 'selected' }}>Select…</option>
                <option {{ old('ownRealEstate') === 'Yes' ? 'selected' : '' }}>Yes</option>
                <option {{ old('ownRealEstate') === 'No' ? 'selected' : '' }}>No</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-4 {{ old('ownRealEstate') === 'Yes' ? '' : 'd-none' }}" id="ownRealEstateDetailsWrap">
            <label class="form-label req">Add Details</label>
            <textarea name="ownRealEstateDetails" id="ownRealEstateDetails" class="form-control @error('ownRealEstateDetails') is-invalid @enderror" rows="3" placeholder="e.g., primary residence, rentals">{{ old('ownRealEstateDetails') }}</textarea>
            <div class="invalid-feedback">Please add details.</div>
        </div>
    </div>
</div>
