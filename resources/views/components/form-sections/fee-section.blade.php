<div class="mb-4">
    <div class="d-flex justify-content-between align-items-end mb-2">
        <div class="form-section-title">Assignment Fee & Numbers</div>
        <span class="text-muted small">Required</span>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label req">Projected Total Fee ($)</label>
            <input name="assignmentFee" id="assignmentFee" class="form-control" type="number" min="0" step="1" required />
            <div class="invalid-feedback">Enter the projected assignment fee total.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">Your Portion ($)</label>
            <input name="yourPortion" id="yourPortion" class="form-control" type="number" min="0" step="1" required />
            <div class="invalid-feedback">Enter your portion.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">Advance Requested ($)</label>
            <input name="advanceRequested" id="advanceRequested" class="form-control" type="number" min="0" step="1" required />
            <div class="invalid-feedback">Enter the amount you want advanced.</div>
        </div>

        <div class="col-md-4">
            <label class="form-label req">When do you need funds?</label>
            <select name="fundingWhen" id="fundingWhen" class="form-select" required>
                <option value="" selected disabled>Select…</option>
                <option>Same day</option>
                <option>Within 24 hours</option>
                <option>Within 48 hours</option>
                <option>This week</option>
            </select>
            <div class="invalid-feedback">Please select timing.</div>
        </div>

        <div class="col-md-6">
            <label class="form-label">Seller Contract Price ($)</label>
            <input name="sellerContractPrice" id="sellerContractPrice" class="form-control" type="number" min="0" step="1" placeholder="Optional" />
        </div>

        <div class="col-md-6">
            <label class="form-label">End Buyer Purchase Price ($)</label>
            <input name="endBuyerPrice" id="endBuyerPrice" class="form-control" type="number" min="0" step="1" placeholder="Optional" />
        </div>

        <div class="col-md-6">
            <label class="form-label req">Are you splitting this assignment fee?</label>
            <select name="splittingFee" id="splittingFee" class="form-select" required>
                <option value="" selected disabled>Select…</option>
                <option>No</option>
                <option>Yes</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>

        <div class="col-md-6 d-none" id="splitDetailsWrap">
            <label class="form-label req">Your net portion (%, or $ amount)</label>
            <input name="netPortion" id="netPortion" class="form-control" placeholder="e.g., 50% or $10,000" />
            <div class="invalid-feedback">Please enter your net portion.</div>
        </div>

        <div class="col-12">
            <label class="form-label">What will you use the advance for?</label>
            <select name="useOfFunds" id="useOfFunds" class="form-select">
                <option value="" selected>Optional</option>
                <option>Marketing / Ads</option>
                <option>Earnest Money for another deal</option>
                <option>Paying Dispo / JV</option>
                <option>Business operations</option>
                <option>Personal / Emergency</option>
                <option>Other</option>
            </select>
        </div>
    </div>
</div>
