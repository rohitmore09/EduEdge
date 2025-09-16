
<script src="https://www.google.com/recaptcha/api.js?render=6LeKmkorAAAAAGyeYo1RwupoLJ1uwpdSyI0ZB5Pu"></script>
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<form id="appointmentForm2">
    <div class="form-group">
        <input type="text" name="name" placeholder="Name" />
        <div class="error" id="error-name"></div>
    </div>
    <div class="form-group">
        <input type="email" name="email" placeholder="Email" />
        <div class="error" id="error-email"></div>
    </div>
    <div class="form-group">
        <input type="tel" name="phone" placeholder="Phone" />
        <div class="error" id="error-phone"></div>
    </div>
    <div class="form-group">
        <select id="courses" disabled>
            <option value="" disabled selected>Courses</option>
        </select>
        <input type="hidden" name="courses" id="courses_hidden">
        <div class="error" id="error-courses"></div>
    </div>
    <div class="form-group">
        <select id="options" disabled>
            <option value="" disabled selected>Options</option>
        </select>
        <input type="hidden" name="options" id="options_hidden">
        <div class="error" id="error-options"></div>
    </div>
    <div>
        <button type="submit" id="submitBtn">Submit & Book Appointment</button>
    </div>
</form>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const appointmentForm2 = document.getElementById("appointmentForm2");
    const submitBtn = document.getElementById("submitBtn");

    // Autofill Courses & Options from URL
    const pathParts = window.location.pathname.split("/").filter(Boolean);
    const courseSlug = pathParts[0] || "";
    const optionSlug = pathParts[1] ? pathParts[1].replace(".php", "") : "";

    const courseSelect = document.getElementById("courses");
    const optionSelect = document.getElementById("options");
    const courseHidden = document.getElementById("courses_hidden");
    const optionHidden = document.getElementById("options_hidden");

    if (courseSlug) {
        const opt = document.createElement("option");
        opt.value = courseSlug;
        opt.textContent = courseSlug.replace(/-/g, " ");
        opt.selected = true;
        courseSelect.appendChild(opt);
        courseHidden.value = courseSlug;
    }

    if (optionSlug) {
        const opt = document.createElement("option");
        opt.value = optionSlug;
        opt.textContent = optionSlug.replace(/-/g, " ");
        opt.selected = true;
        optionSelect.appendChild(opt);
        optionHidden.value = optionSlug;
    }

    // Show error function
    function showError(id, message) {
        const errorEl = document.getElementById(id);
        if (message) {
            errorEl.textContent = message;
            errorEl.style.display = "block";
        } else {
            errorEl.textContent = "";
            errorEl.style.display = "none";
        }
    }

    // Validation
    function validate() {
        let isValid = true;

        const name = appointmentForm2.querySelector('[name="name"]').value.trim();
        const email = appointmentForm2.querySelector('[name="email"]').value.trim();
        const phone = appointmentForm2.querySelector('[name="phone"]').value.trim();
        const courses = appointmentForm2.querySelector('[name="courses"]').value.trim();
        const options = appointmentForm2.querySelector('[name="options"]').value.trim();

        // Name
        if (!name) { showError("error-name", "Please enter your name"); isValid = false; }
        else { showError("error-name", ""); }

        // Email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email) { showError("error-email", "Please enter your email"); isValid = false; }
        else if (!emailPattern.test(email)) { showError("error-email", "Enter a valid email address"); isValid = false; }
        else { showError("error-email", ""); }

        // Phone
        const phonePattern = /^[0-9]{7,15}$/;
        if (!phone) { showError("error-phone", "Please enter your phone number"); isValid = false; }
        else if (!phonePattern.test(phone)) { showError("error-phone", "Enter digits only (7–15 characters)"); isValid = false; }
        else { showError("error-phone", ""); }

        // Courses
        if (!courses) { showError("error-courses", "Course selection missing"); isValid = false; }
        else { showError("error-courses", ""); }

        // Options
        if (!options) { showError("error-options", "Option selection missing"); isValid = false; }
        else { showError("error-options", ""); }

        return isValid;
    }

    // Form submit
    appointmentForm2.addEventListener("submit", function (e) {
        e.preventDefault();

        if (!validate()) return;

        submitBtn.disabled = true;
        submitBtn.textContent = "Processing...";

        grecaptcha.ready(function () {
            grecaptcha.execute('6LeKmkorAAAAAGyeYo1RwupoLJ1uwpdSyI0ZB5Pu', { action: 'submit' })
                .then(function (token) {
                    const formData = new FormData(appointmentForm2);
                    formData.append('recaptcha_token', token);

                    const data = {};
                    formData.forEach((value, key) => data[key] = value.trim());

                    Calendly.initPopupWidget({
                        url: 'https://calendly.com/vaidehi-eduedgepro/30min',
                        prefill: { name: data.name, email: data.email }
                    });

                    window.addEventListener('message', function (e) {
                        if (e.origin === "https://calendly.com" && e.data.event === 'calendly.event_scheduled') {
                            fetch('https://www.eduedgeglobal.com/api/save_appointment2.php', {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/json' },
                                body: JSON.stringify({
                                    formData: data,
                                    recaptcha_token: token,
                                    calendlyEvent: e.data.payload,
                                }),
                            })
                            .then(res => res.json())
                            .then(response => {
                                if (response.success) {
                                    alert('Appointment booked and data saved successfully!');
                                    appointmentForm2.reset();
                                    submitBtn.disabled = false;
                                    submitBtn.textContent = "Submit & Book Appointment";
                                } else {
                                    showError("error-courses", "Error saving appointment, please try again");
                                    submitBtn.disabled = false;
                                    submitBtn.textContent = "Submit & Book Appointment";
                                }
                            })
                            .catch(err => {
                                console.error(err);
                                showError("error-courses", "Error saving appointment, please try again");
                                submitBtn.disabled = false;
                                submitBtn.textContent = "Submit & Book Appointment";
                            });
                        }
                    });
                });
        });
    });
});
</script>
