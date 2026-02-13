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
setSplitVisibility();

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
setOwnRealEstateVisibility();

// Bootstrap validation + form submit handler
const form = document.getElementById('dealForm');
const thankYouModalEl = document.getElementById('thankYouModal');

if (form) {
    if (thankYouModalEl) {
        new bootstrap.Modal(thankYouModalEl);
    }

    form.addEventListener('submit', (e) => {
        // Trigger conditional logic state
        setSplitVisibility();
        setOwnRealEstateVisibility();

        if (!form.checkValidity()) {
            e.preventDefault();
            e.stopPropagation();
            form.classList.add('was-validated');
        }
    });
}
