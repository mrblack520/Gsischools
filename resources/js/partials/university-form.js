document.addEventListener('DOMContentLoaded', () => {


            document.querySelectorAll('.euro-input').forEach(input => {
                input.placeholder = '£ 0';

                input.addEventListener('input', () => {
                    const numbers = input.value.replace(/[^0-9]/g, '');
                    input.value = numbers ? '£ ' + numbers : '';
                });

                input.addEventListener('focus', () => {
                    if (input.value === '') input.value = '';
                });

                input.addEventListener('blur', () => {
                    const numbers = input.value.replace(/[^0-9]/g, '');
                    input.value = numbers ? '£ ' + numbers : '';
                });

                input.addEventListener('keydown', (e) => {
                    if (!e.key.match(/[0-9]/) && !['Backspace', 'ArrowLeft', 'ArrowRight', 'Delete', 'Tab'].includes(e.key)) {
                        e.preventDefault();
                    }
                });
            });


            document.querySelectorAll('.custom-select').forEach(select => {
                const otherInputId = select.dataset.otherId;
                const otherInput = document.getElementById(otherInputId);

                // Hide the input field by default
                if (otherInput) {
                    otherInput.style.display = "none";
                }

                select.addEventListener('change', function () {
                    if (this.value === 'other-please-specify') {
                        otherInput && (otherInput.style.display = "block");
                    } else {
                        otherInput && (otherInput.style.display = "none");
                    }
                });
            });


            let addAnotherUniBtn = document.querySelector(".add-another");
            addAnotherUniBtn.addEventListener("click", () => {
                addAnotherUniBtn.style.display = "none";
                document.querySelectorAll(".add-course, .add-university, .add-status").forEach(element => {
                    element.style.display = "block";
                    setTimeout(() => {
                        element.style.opacity = 1;
                    }
                        , 200)
                })
            })

            const universityChoices = new Choices("#university-select", {
                searchEnabled: true,
                placeholderValue: 'Select university',
                searchPlaceholderValue: 'Search university...',
                shouldSort: false,
                itemSelectText: '',
            })
            const universityChoices2 = new Choices("#university-select-2", {
                searchEnabled: true,
                placeholderValue: 'Select university',
                searchPlaceholderValue: 'Search university...',
                shouldSort: false,
                itemSelectText: '',
            })

            const courseChoices = new Choices("#course-select", {
                searchEnabled: true,
                placeholderValue: 'Select course',
                searchPlaceholderValue: 'Search course...',
                shouldSort: false,
                itemSelectText: '',
            })
            const courseChoices2 = new Choices("#course-select-2", {
                searchEnabled: true,
                placeholderValue: 'Select course',
                searchPlaceholderValue: 'Search course...',
                shouldSort: false,
                itemSelectText: '',
            })

            const statusChoice = new Choices("#status-select", {
                searchEnabled: false,
                placeholderValue: 'Select status',
                // searchPlaceholderValue: 'Search ...',
                shouldSort: false,
                itemSelectText: '',
            })

            const statusChoice2 = new Choices("#status-select-2", {
                searchEnabled: false,
                placeholderValue: 'Select status',
                // searchPlaceholderValue: 'Search ...',
                shouldSort: false,
                itemSelectText: '',
            })

            document.getElementById("man-university-submit-btn").addEventListener("click", () => {
                Swal.fire({
                    title: 'Submitted!',
                    text: 'Your form has been submitted.',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#503A8E',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    color: "black"
                }).then(() => {
                    window.location.href = "{{ route('frontend.optional-university-form') }}";
                })
            })

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

            document.getElementById("man-university-save-btn").addEventListener("click", () => {
                Swal.fire({
                    title: 'Saved!',
                    text: 'Your progress has been saved. You can continue later.',
                    icon: 'info',
                    confirmButtonColor: '#503A8E',
                    confirmButtonText: 'Ok',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    color: "black"
                })
            })
        });
