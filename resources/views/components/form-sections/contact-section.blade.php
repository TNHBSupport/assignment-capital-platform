<div class="mb-4">
    <div class="d-flex justify-content-between align-items-end mb-2">
        <div class="form-section-title">Contact</div>
        <span class="text-muted small">Required</span>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label req">Full Name</label>
            <input name="fullName" id="fullName" class="form-control" required />
            <div class="invalid-feedback">Please enter your name.</div>
        </div>
        <div class="col-md-6">
            <label class="form-label">Company Name</label>
            <input name="companyName" id="companyName" class="form-control" placeholder="Optional" />
        </div>
        <div class="col-md-6">
            <label class="form-label req">Email</label>
            <input name="email" id="email" type="email" class="form-control" required />
            <div class="invalid-feedback">Please enter a valid email.</div>
        </div>
        <div class="col-md-6">
            <label class="form-label req">Phone</label>
            <input name="phone" id="phone" type="tel" class="form-control" required />
            <div class="invalid-feedback">Please enter a phone number.</div>
        </div>
        <div class="col-md-6">
            <label class="form-label req">Are you the decision maker?</label>
            <select name="decisionMaker" id="decisionMaker" class="form-select" required>
                <option value="" selected disabled>Select…</option>
                <option>Yes</option>
                <option>No</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>
        <div class="col-md-6">
            <label class="form-label req">Your Role</label>
            <select name="role" id="role" class="form-select" required>
                <option value="" selected disabled>Select…</option>
                <option>Wholesaler</option>
                <option>Dispo Company</option>
                <option>JV Partner</option>
                <option>Other</option>
            </select>
            <div class="invalid-feedback">Please select your role.</div>
        </div>
    </div>
</div>
