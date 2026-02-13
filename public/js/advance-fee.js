// Conditional split fields
const splittingFee = document.getElementById('splittingFee');
const splitWrap = document.getElementById('splitDetailsWrap');
const netPortion = document.getElementById('netPortion');

function setSplitVisibility() {
    if (!splittingFee) return;

    const isYes = splittingFee.value === 'Yes';
    splitWrap.classList.toggle('d-none', !isYes);
    if (isYes) {
        netPortion.setAttribute('required', 'required');
    } else {
        netPortion.removeAttribute('required');
        netPortion.value = '';
        netPortion.classList.remove('is-invalid');
    }
}

if (splittingFee) {
    splittingFee.addEventListener('change', setSplitVisibility);
}

// Conditional real estate details
const ownRealEstate = document.getElementById('ownRealEstate');
const ownRealEstateDetailsWrap = document.getElementById('ownRealEstateDetailsWrap');
const ownRealEstateDetails = document.getElementById('ownRealEstateDetails');

function setOwnRealEstateVisibility() {
    if (!ownRealEstate) return;

    const isYes = ownRealEstate.value === 'Yes';
    ownRealEstateDetailsWrap.classList.toggle('d-none', !isYes);
    if (isYes) {
        ownRealEstateDetails.setAttribute('required', 'required');
    } else {
        ownRealEstateDetails.removeAttribute('required');
        ownRealEstateDetails.value = '';
        ownRealEstateDetails.classList.remove('is-invalid');
    }
}

if (ownRealEstate) {
    ownRealEstate.addEventListener('change', setOwnRealEstateVisibility);
}

// Bootstrap validation + form submit handler
const form = document.getElementById('dealForm');
const thankYouModalEl = document.getElementById('thankYouModal');

if (form && thankYouModalEl) {
    const thankYouModal = new bootstrap.Modal(thankYouModalEl);

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Trigger conditional logic state
        setSplitVisibility();
        setOwnRealEstateVisibility();

        if (!form.checkValidity()) {
            e.stopPropagation();
            form.classList.add('was-validated');
            return;
        }

        // Submit form via AJAX or standard form submission
        // For now, we'll use standard form submission
        // Uncomment below to use AJAX instead:
        /*
        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            });

            if (response.ok) {
                thankYouModal.show();
                form.reset();
                form.classList.remove('was-validated');
                splitWrap.classList.add('d-none');
            }
        } catch (error) {
            console.error('Submission error:', error);
        }
        */

        // Standard form submission (remove this if using AJAX)
        form.submit();
    });
}
