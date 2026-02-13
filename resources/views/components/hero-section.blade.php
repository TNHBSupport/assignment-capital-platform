<header class="hero py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge rounded-pill px-3 py-2 mb-3">Assignment Fee Advance</span>
                <h1 class="display-6 fw-bold mb-3">Get a portion of your assignment fee before closing.</h1>
                <p class="lead mb-4">
                    Submit your deal details. If it qualifies, we'll confirm with title and send terms fast.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <div class="bg-white bg-opacity-10 rounded-3 px-3 py-2">✅ Simple submission</div>
                    <div class="bg-white bg-opacity-10 rounded-3 px-3 py-2">✅ Title verification</div>
                    <div class="bg-white bg-opacity-10 rounded-3 px-3 py-2">✅ Payback at closing</div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h2 class="h5 mb-0 fw-bold text-dark">Quick Pre-Qual</h2>
                        <span class="text-success fw-semibold">~2 minutes</span>
                    </div>
                    <p class="small text-muted mb-3">Start here. More fields appear only if needed.</p>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label req text-dark">Full Name</label>
                            <input class="form-control" type="text" id="quickName" placeholder="John Smith" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label req text-dark">Phone</label>
                            <input class="form-control" type="tel" id="quickPhone" placeholder="(555) 555-5555" />
                        </div>
                        <div class="col-12">
                            <label class="form-label req text-dark">Email</label>
                            <input class="form-control" type="email" id="quickEmail" placeholder="you@email.com" />
                        </div>
                        <div class="col-12">
                            <label class="form-label req text-dark">Property Address</label>
                            <input class="form-control" type="text" id="quickAddress" placeholder="123 Main St, City, ST 12345" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label req text-dark">Projected Assignment Fee ($)</label>
                            <input class="form-control" type="number" id="quickFee" min="0" step="1" placeholder="20000" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label req text-dark">Advance Requested ($)</label>
                            <input class="form-control" type="number" id="quickAdvance" min="0" step="1" placeholder="6000" />
                        </div>

                        <div class="col-12 d-grid">
                            <a class="btn btn-primary btn-lg" href="#apply" id="startApplicationBtn">
                                Continue Application
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="small-help small">
                                By submitting, you agree we may contact you and the title company to verify deal details.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
