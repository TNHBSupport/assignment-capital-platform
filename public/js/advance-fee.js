// Prefill main form from quick pre-qual
const startBtn = document.getElementById('startApplicationBtn');
if (startBtn) {
    startBtn.addEventListener('click', () => {
        const map = [
            ['quickName', 'fullName'],
            ['quickEmail', 'email'],
            ['quickPhone', 'phone'],
            ['quickAddress', 'propertyAddress'],
            ['quickFee', 'assignmentFee'],
            ['quickAdvance', 'advanceRequested'],
        ];
        map.forEach(([from, to]) => {
            const v = document.getElementById(from).value;
            if (v) document.getElementById(to).value = v;
        });
    });
}

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

// Bootstrap validation + form submit handler
const form = document.getElementById('dealForm');
const thankYouModalEl = document.getElementById('thankYouModal');

if (form && thankYouModalEl) {
    const thankYouModal = new bootstrap.Modal(thankYouModalEl);

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Trigger conditional logic state
        setSplitVisibility();

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
