<div class="mb-4">
    <div class="d-flex justify-content-between align-items-end mb-2">
        <div class="form-section-title">Deal Strength & Verification</div>
        <span class="text-muted small">Required</span>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label req">Earnest Money Deposited ($)</label>
            <input name="emdAmount" id="emdAmount" class="form-control" type="number" min="0" step="1" required />
            <div class="invalid-feedback">Enter EMD amount (enter 0 if none).</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">Has EMD cleared?</label>
            <select name="emdCleared" id="emdCleared" class="form-select" required>
                <option value="" selected disabled>Select…</option>
                <option>Yes</option>
                <option>No</option>
                <option>Not sure</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label">Who delivered EMD?</label>
            <select name="emdWho" id="emdWho" class="form-select">
                <option value="" selected>Optional</option>
                <option>End Buyer</option>
                <option>Me (Wholesaler)</option>
                <option>Dispo Company</option>
                <option>Other</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label req">Are all contracts fully executed?</label>
            <select name="contractsExecuted" id="contractsExecuted" class="form-select" required>
                <option value="" selected disabled>Select…</option>
                <option>Yes</option>
                <option>No</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label">End Buyer Purchase Type</label>
            <select name="buyerType" id="buyerType" class="form-select">
                <option value="" selected>Optional</option>
                <option>Cash</option>
                <option>Hard Money</option>
                <option>Conventional Financing</option>
                <option>Other</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label req">Authorize repayment from title at closing?</label>
            <select name="titlePaybackAuth" id="titlePaybackAuth" class="form-select" required>
                <option value="" selected disabled>Select…</option>
                <option>Yes</option>
                <option>No</option>
                <option>Not sure</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label req">May we contact title to verify the deal?</label>
            <select name="contactTitleOk" id="contactTitleOk" class="form-select" required>
                <option value="" selected disabled>Select…</option>
                <option>Yes</option>
                <option>No</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-12">
            <label class="form-label">Notes (Anything we should know?)</label>
            <textarea name="notes" id="notes" class="form-control" rows="4" placeholder="Optional details: inspection issues, title issues, JV structure, etc."></textarea>
        </div>
    </div>
</div>
