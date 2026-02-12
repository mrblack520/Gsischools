@extends('frontend.layout.app')


@section('content')


    <section class="contact-us-banner" style="padding-bottom: 30px; min-height: 245px;">
        <div class="text-center">
            <h2><span>Questionnaire</span></h2>
        </div>
    </section>
    <section class="pt-0 questionnaire-form-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-7 questionnaire-form-con">
                    <div class="">
                        <div class="">
                            <div id="progress-container" class="mb-4 d-none">
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted small"></span>
                                    <span id="progress-text" style="line-height: 20px;"
                                        class="text-muted small">0%</span>
                                </div>
                                <div class="progress">
                                    <div id="progress-fill" class="progress-bar bg-primary" role="progressbar"
                                        style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div id="category-selection">
                                <h2 class="card-title">Which of the following best describes your
                                    current situation?</h2>
                                <div id="categories">
                                </div>
                                <div class="d-flex justify-content-end mt-2">
                                    <button id="next-btn" disabled>Next →</button>
                                </div>
                            </div>

                            <div id="questions-section" class="d-none">
                                <h2 id="category-title" class="card-title mb-4"></h2>
                                <div id="question-container" class="mb-4">
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <button id="back-btn" class="">← Previous</button>
                                    <div>
                                        <button id="skip-btn" class="me-2">Skip</button>
                                        <button id="next-btn-questions" class="" disabled>Next →</button>
                                    </div>
                                </div>
                            </div>

                            <div id="completion-message" class="d-none text-center">
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none" />
                                    <path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                </svg>
                                <h3 class="mb-3">Completed</h3>
                                <p class="text-muted">Thank you for completing the questionnaire!</p>
                                <p class="text-muted">If you are interested in the platform, please insert your email to
                                    be sent a registration link or sign-up <a
                                        href="{{ route('frontend.register') }}"><u><strong>here</strong></u></a></p>
                                <button id="return-btn" class="mt-3" disabled><a href="/">Visit homepage</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
        const categories = [
            {
                id: 1, name: 'Applying to or considering applying to university', questions: [
                    {
                        id: 1, text: "Would you be interested joining a platform where you can video chat with university students to ask questions and learn from their experiences, and if yes, how much would you pay per session?", type: 'radio', options: [
                            { label: 'Absolutely ', input: null },
                            { label: 'Possibly', input: null },
                            { label: 'No', input: null },
                        ], answer: null
                    },
                    { id: 2, text: 'What would you be interested in learning from the university students during the video chat session?', type: 'multiple', options: ['Support with applications', 'Interview preparation', 'Choosing the right university, course or career path', 'Course insight', 'Advice on preparing for university', 'Insight into workload, expectations and student life', 'Recommendations on useful resources', 'Personal experiences and background', 'Networking opportunities', 'General tips and common pitfalls to avoid', 'Social support (handling rejection, managing stress, work-life balance)', 'Campus life and societies', 'Other, please specify'], answer: [] },
                    {
                        id: 3, text: "Would you be willing to pay for the video chat session with the university student from your selected criteria?", type: 'radio', options: [
                            { label: 'Yes - please specify the maximum GBP amount you would be willing to pay for a one hour video chat £', input: 'text', labelPosition: 'before' },
                            { label: 'No', input: null }
                        ], answer: null
                    },
                    { id: 4, text: 'How many video chat sessions would you be interested in having?', type: 'text', answer: '' }
                ]
            },
            {
                id: 2, name: 'Seeking to enter a profession', questions: [
                    {
                        id: 1, text: "Would you be interested joining a platform where you can video chat with university students to ask questions and learn from their experiences, and if yes, how much would you pay per session?", type: 'radio', options: [
                            { label: 'Absolutely ', input: null },
                            { label: 'Possibly', input: null },
                            { label: 'No', input: null },
                        ], answer: null
                    },
                    { id: 2, text: 'What would you be interested in learning from the university students during the video chat session?', type: 'multiple', options: ['Support with applications', 'Interview preparation', 'Choosing the right university, course or career path', 'Course insight', 'Advice on preparing for university', 'Insight into workload, expectations and student life', 'Recommendations on useful resources', 'Personal experiences and background', 'Networking opportunities', 'General tips and common pitfalls to avoid', 'Social support (handling rejection, managing stress, work-life balance)', 'Campus life and societies', 'Other, please specify'], answer: [] },
                    {
                        id: 3, text: "Would you be willing to pay for the video chat session with the university student from your selected criteria?", type: 'radio', options: [
                            { label: 'Yes - please specify the maximum GBP amount you would be willing to pay for a one hour video chat £', input: 'text', labelPosition: 'before' },
                            { label: 'No', input: null }
                        ], answer: null
                    },
                    { id: 4, text: 'How many video chat sessions would you be interested in having?', type: 'text', answer: '' }
                ]
            },
            {
                id: 3, name: 'Working or have worked in a profession', questions: [
                    {
                        id: 1, text: "Would you be interested joining a platform where you can video chat with university students to ask questions and learn from their experiences, and if yes, how much would you pay per session?", type: 'radio', options: [
                            { label: 'Absolutely ', input: null },
                            { label: 'Possibly', input: null },
                            { label: 'No', input: null },
                        ], answer: null
                    },
                    { id: 2, text: 'What would you be interested in learning from the university students during the video chat session?', type: 'multiple', options: ['Support with applications', 'Interview preparation', 'Choosing the right university, course or career path', 'Course insight', 'Advice on preparing for university', 'Insight into workload, expectations and student life', 'Recommendations on useful resources', 'Personal experiences and background', 'Networking opportunities', 'General tips and common pitfalls to avoid', 'Social support (handling rejection, managing stress, work-life balance)', 'Campus life and societies', 'Other, please specify'], answer: [] },
                    {
                        id: 3, text: "Would you be willing to pay for the video chat session with the university student from your selected criteria?", type: 'radio', options: [
                            { label: 'Yes - please specify the maximum GBP amount you would be willing to pay for a one hour video chat £', input: 'text', labelPosition: 'before' },
                            { label: 'No', input: null }
                        ], answer: null
                    },
                    { id: 4, text: 'How many video chat sessions would you be interested in having?', type: 'text', answer: '' }
                ]
            },
            {
                id: 4, name: 'University student or alumni', questions: [
                    {
                        id: 1, text: "Would you be interested joining a platform where you can video chat with university students to ask questions and learn from their experiences, and if yes, how much would you pay per session?", type: 'radio', options: [
                            { label: 'Absolutely ', input: null },
                            { label: 'Possibly', input: null },
                            { label: 'No', input: null },
                        ], answer: null
                    },
                    { id: 2, text: 'What would you be interested in learning from the university students during the video chat session?', type: 'multiple', options: ['Support with applications', 'Interview preparation', 'Choosing the right university, course or career path', 'Course insight', 'Advice on preparing for university', 'Insight into workload, expectations and student life', 'Recommendations on useful resources', 'Personal experiences and background', 'Networking opportunities', 'General tips and common pitfalls to avoid', 'Social support (handling rejection, managing stress, work-life balance)', 'Campus life and societies', 'Other, please specify'], answer: [] },
                    {
                        id: 3, text: "Would you be willing to pay for the video chat session with the university student from your selected criteria?", type: 'radio', options: [
                            { label: 'Yes - please specify the maximum GBP amount you would be willing to pay for a one hour video chat £', input: 'text', labelPosition: 'before' },
                            { label: 'No', input: null }
                        ], answer: null
                    },
                    { id: 4, text: 'How many video chat sessions would you be interested in having?', type: 'text', answer: '' }
                ]
            },
            {
                id: 5, name: 'None', questions: [
                    {
                        id: 1, text: "Would you be interested joining a platform where you can video chat with university students to ask questions and learn from their experiences, and if yes, how much would you pay per session?", type: 'radio', options: [
                            { label: 'Absolutely ', input: null },
                            { label: 'Possibly', input: null },
                            { label: 'No', input: null },
                        ], answer: null
                    },
                    { id: 2, text: 'What would you be interested in learning from the university students during the video chat session?', type: 'multiple', options: ['Support with applications', 'Interview preparation', 'Choosing the right university, course or career path', 'Course insight', 'Advice on preparing for university', 'Insight into workload, expectations and student life', 'Recommendations on useful resources', 'Personal experiences and background', 'Networking opportunities', 'General tips and common pitfalls to avoid', 'Social support (handling rejection, managing stress, work-life balance)', 'Campus life and societies', 'Other, please specify'], answer: [] },
                    {
                        id: 3, text: "Would you be willing to pay for the video chat session with the university student from your selected criteria?", type: 'radio', options: [
                            { label: 'Yes - please specify the maximum GBP amount you would be willing to pay for a one hour video chat £', input: 'text', labelPosition: 'before' },
                            { label: 'No', input: null }
                        ], answer: null
                    },
                    { id: 4, text: 'How many video chat sessions would you be interested in having?', type: 'text', answer: '' }
                ]
            },
        ];


        const els = {
            categories: document.getElementById('categories'),
            categorySelection: document.getElementById('category-selection'),
            questionsSection: document.getElementById('questions-section'),
            completionMessage: document.getElementById('completion-message'),
            questionContainer: document.getElementById('question-container'),
            categoryTitle: document.getElementById('category-title'),
            completedCategory: document.getElementById('completed-category'),
            progressContainer: document.getElementById('progress-container'),
            progressText: document.getElementById('progress-text'),
            progressFill: document.getElementById('progress-fill'),
            nextBtn: document.getElementById('next-btn'),
            nextBtnQuestions: document.getElementById('next-btn-questions'),
            backBtn: document.getElementById('back-btn'),
            skipBtn: document.getElementById('skip-btn'),
            returnBtn: document.getElementById('return-btn')
        };

        let currentCategory = null;
        let currentQuestionIndex = 0;
        let selectedCategory = null;

        categories.forEach(category => {
            const card = document.createElement('div');
            card.className = 'category-card';
            card.innerHTML = `<div><div><h5>${category.name}</h5></div></div>`;
            card.addEventListener('click', () => {
                selectedCategory = category;
                document.querySelectorAll('.category-card').forEach(c => c.classList.remove('active'));
                card.classList.add('active');
                els.nextBtn.disabled = false;
            });
            els.categories.appendChild(card);
        });

        function startCategory(category) {
            currentCategory = category;
            currentQuestionIndex = 0;
            els.categorySelection.classList.add('d-none');
            els.questionsSection.classList.remove('d-none');
            els.completionMessage.classList.add('d-none');
            els.progressContainer.classList.remove('d-none');
            updateProgress();
            showQuestion();
        }

        function showQuestion() {
            const question = currentCategory.questions[currentQuestionIndex];
            els.questionContainer.innerHTML = `<p>${question.text}</p>`;

            if (question.type === 'radio') {
                question.options.forEach(option => {
                    const div = document.createElement('div');
                    div.className = 'form-check mb-2';
                    const optionId = option.label.replace(/\s+/g, '_');
                    let inputHtml = `<input class="form-check-input" type="radio" name="question" id="${optionId}" value="${option.label}" ${question.answer === option.label ? 'checked' : ''}>`;
                    if (option.input === 'text') {
                        const textValue = question.answer && typeof question.answer === 'object' && question.answer.value !== undefined ? question.answer.value : '';
                        const labelPosition = option.labelPosition || 'before';
                        if (labelPosition === 'before') {
                            inputHtml += `<label class="form-check-label ms-2" for="${optionId}">${option.label} <input class="radio-input" style="width: 100px;" type="text" value="${textValue}"></label>`;
                        } else {
                            inputHtml += `<label class="form-check-label ms-2" for="${optionId}"><input class="radio-input" style="width: 100px;" type="text" value="${textValue}">${option.label}</label>`;
                        }
                    } else {
                        inputHtml += `<label class="form-check-label ms-2" for="${optionId}">${option.label}</label>`;
                    }
                    div.innerHTML = inputHtml;
                    els.questionContainer.appendChild(div);
                });
            } else if (question.type === 'multiple') {
                question.options.forEach(option => {
                    const div = document.createElement('div');
                    div.className = 'form-check mb-2';
                    const optionId = option.replace(/\s+/g, '_');
                    const existingOther = question.answer.find(ans => ans.startsWith('Other:')) || '';
                    const otherText = existingOther.split('Other: ')[1] || '';
                    const isChecked = question.answer.includes(option) || existingOther;

                    if (option.toLowerCase().startsWith('other')) {
                        div.innerHTML = `
                        <input class="form-check-input" type="checkbox" id="${optionId}" value="Other:" ${isChecked ? 'checked' : ''}>
                        <label class="form-check-label ms-2" for="${optionId}">${option}</label>
                        <input type="text" class="form-control mt-2 ms-2 pt-2 pb-1 other-text-input ${isChecked ? '' : 'd-none'}" placeholder="Please specify" value="${otherText}">
                    `;
                    } else {
                        div.innerHTML = `
                        <input class="form-check-input" type="checkbox" id="${optionId}" value="${option}" ${question.answer.includes(option) ? 'checked' : ''}>
                        <label class="form-check-label ms-2" for="${optionId}">${option}</label>`;
                    }
                    els.questionContainer.appendChild(div);
                });
            } else if (question.type === 'text') {
                const textarea = document.createElement('textarea');
                textarea.className = 'form-control';
                textarea.value = question.answer || '';
                els.questionContainer.appendChild(textarea);
            }

            updateNextButton();
        }

        function isQuestionAnswered(question) {
            if (question.type === 'radio') {
                return question.answer !== null && (typeof question.answer === 'string' || (question.answer.value && question.answer.value.trim() !== ''));
            }
            if (question.type === 'multiple') {
                return question.answer.length > 0;
            }
            if (question.type === 'text') {
                return question.answer.trim() !== '';
            }
            return false;
        }

        function updateProgress() {
            const total = currentCategory.questions.length;
            const answered = currentCategory.questions.filter(isQuestionAnswered).length;
            const progress = (answered / total) * 100;
            els.progressText.textContent = `${Math.round(progress)}%`;
            els.progressFill.style.width = `${progress}%`;
            els.progressFill.setAttribute('aria-valuenow', Math.round(progress));
        }

        function saveAnswer() {
            const question = currentCategory.questions[currentQuestionIndex];

            if (question.type === 'radio') {
                const selected = document.querySelector('input[name="question"]:checked');
                if (selected) {
                    const option = question.options.find(opt => opt.label === selected.value);
                    if (option && option.input === 'text') {
                        const textInput = selected.parentElement.querySelector('input[type="text"]');
                        question.answer = { value: textInput.value };
                    } else {
                        question.answer = selected.value;
                    }
                } else {
                    question.answer = null;
                }
            } else if (question.type === 'multiple') {
                const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                const answers = [];
                checkboxes.forEach(input => {
                    if (input.checked) {
                        if (input.value === 'Other:') {
                            const otherTextInput = input.parentElement.querySelector('.other-text-input');
                            if (otherTextInput && otherTextInput.value.trim() !== '') {
                                answers.push(`Other: ${otherTextInput.value.trim()}`);
                            }
                        } else {
                            answers.push(input.value);
                        }
                    }
                });
                question.answer = answers;
            } else if (question.type === 'text') {
                const input = els.questionContainer.querySelector('textarea') || els.questionContainer.querySelector('input[type="text"]');
                question.answer = input.value;
            }

            updateProgress();
            updateNextButton();
        }

        function updateNextButton() {
            if (!currentCategory) {
                els.nextBtn.disabled = !selectedCategory;
            } else {
                els.nextBtnQuestions.disabled = !isQuestionAnswered(currentCategory.questions[currentQuestionIndex]);
            }
        }

        function showCompletionMessage() {
            els.questionsSection.classList.add('d-none');
            els.completionMessage.classList.remove('d-none');
            els.progressContainer.classList.add('d-none');
            els.completedCategory.textContent = currentCategory.name;
        }

        els.nextBtn.addEventListener('click', () => {
            if (!currentCategory && selectedCategory) {
                startCategory(selectedCategory);
                selectedCategory = null;
            }
        });

        els.nextBtnQuestions.addEventListener('click', () => {
            saveAnswer();
            if (currentQuestionIndex < currentCategory.questions.length - 1) {
                currentQuestionIndex++;
                showQuestion();
            } else {
                showCompletionMessage();
            }
        });

        els.skipBtn.addEventListener('click', () => {
            if (currentQuestionIndex < currentCategory.questions.length - 1) {
                currentQuestionIndex++;
                showQuestion();
            } else {
                showCompletionMessage();
            }
        });

        els.backBtn.addEventListener('click', () => {
            saveAnswer();
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                showQuestion();
            } else {
                els.categorySelection.classList.remove('d-none');
                els.questionsSection.classList.add('d-none');
                els.completionMessage.classList.add('d-none');
                els.progressContainer.classList.add('d-none');
                currentCategory = null;
                updateNextButton();
            }
        });

        els.returnBtn.addEventListener('click', () => {
            els.categorySelection.classList.remove('d-none');
            els.completionMessage.classList.add('d-none');
            els.progressContainer.classList.add('d-none');
            currentCategory = null;
            document.querySelectorAll('.category-card').forEach(item => {
                item.classList.remove("active")
            });
            updateNextButton();
        });

        els.questionContainer.addEventListener('change', e => {
            if (e.target.type === 'checkbox' && e.target.value === 'Other:') {
                const parent = e.target.closest('.form-check');
                const input = parent.querySelector('.other-text-input');
                if (e.target.checked) {
                    input.classList.remove('d-none');
                } else {
                    input.classList.add('d-none');
                    input.value = '';
                }
            }
            saveAnswer();
        });

        els.questionContainer.addEventListener('input', e => {
            if (
                e.target.tagName === 'TEXTAREA' ||
                e.target.classList.contains('radio-input') ||
                e.target.classList.contains('other-text-input')
            ) {
                saveAnswer();
            }
        });
    </script>

@endsection
