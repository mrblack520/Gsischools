document.getElementById("register-submit-btn").addEventListener("click", () => {
    Swal.fire({
        title: 'Submitted!',
        text: 'Your form has been submitted.',
        title: 'Submitted!',
        text: 'Your form has been submitted.',
        icon: 'success',
        confirmButtonText: 'OK',
        confirmButtonColor: '#503A8E',
        allowOutsideClick: false,
        allowEscapeKey: false,
        color: "black"
    }).then(() => {
        location.reload();
    })
})

const languageChoices = new Choices("#language-select", {
    // placeholderValue: 'What languages do you speak?',
    removeItemButton: true,
    placeholderValue: 'Select language',
    searchPlaceholderValue: 'Search country...',
})

const aficionadoFormBtns = document.querySelectorAll("input[name='choice']")
const proceedBtn = document.getElementById("click-to-proceed");

aficionadoFormBtns.forEach(radio => {
    radio.addEventListener("change", () => {
        proceedBtn.disabled = false;
        const selectedForm = document.querySelector("input[name='choice']:checked");
    })
})

proceedBtn.addEventListener('click', () => {
    const selectedForm = document.querySelector("input[name='choice']:checked");
    if (selectedForm) {
        window.location.href = selectedForm.value;
        aficionadoFormBtns.forEach(radio => {
            radio.checked = false;
        });
    }
})

const countryChoice1 = new Choices('#locations', {
    // removeItemButton: true,
    placeholderValue: 'Where are you based?',
    searchPlaceholderValue: 'Search country...',
});

// fetch('https://restcountries.com/v3.1/all')
//     .then(response => response.json())
//     .then(data => {
//         const sortedCountries = data.sort((a, b) =>
//             a.name.common.localeCompare(b.name.common)
//         );
//         countryChoice1.clearChoices();
//         const countryOptions = sortedCountries.map(country => ({
//             value: country.cca2,
//             label: country.name.common
//         }));

//         countryChoice1.setChoices(countryOptions, 'value', 'label', false);
//     });

const checkboxes = document.querySelectorAll('.toggle-checkbox');

checkboxes.forEach(checkbox => {
    const targetSelector = checkbox.getAttribute('data-toggle-target');
    const target = document.querySelector(targetSelector);

    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            target.style.display = 'block';
        } else {
            target.style.display = 'none';
        }
    });
});
