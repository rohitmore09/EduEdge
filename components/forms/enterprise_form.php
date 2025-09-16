<script src="https://www.google.com/recaptcha/api.js?render=6LeKmkorAAAAAGyeYo1RwupoLJ1uwpdSyI0ZB5Pu"></script>
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<form id="appointmentForm3">
    <div class="form-group">
        <input type="text" name="name" placeholder="Name" />
        <small class="error-msg" style="color:red; display:none;"></small>
    </div>
    <div class="form-group">
        <input type="email" name="email" placeholder="Email" />
        <small class="error-msg" style="color:red; display:none;"></small>
    </div>
    <div class="form-group">
        <input type="tel" name="phone" placeholder="Phone" />
        <small class="error-msg" style="color:red; display:none;"></small>
    </div>
    <div class="form-group">
        <input type="text" name="level" readonly />
    </div>
    <div>
        <button type="submit" id="submitBtn">Book An Appointment</button>
    </div>
</form>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let levelInput = document.querySelector("input[name='level']");

    // Detect CFA Level from URL
    function getLevelFromUrl() {
        let url = window.location.href;
        let match = url.match(/cfa-level(\d+)\.php/i);
        if (match && match[1]) {
            return "CFA Level " + match[1];
        }
        return "";
    }
    levelInput.value = getLevelFromUrl();

    // Get form & button
    const appointmentForm3 = document.getElementById("appointmentForm3");
    const submitBtn = document.getElementById("submitBtn");

    // Show inline error
    function showError(input, message) {
        const errorEl = input.parentElement.querySelector(".error-msg");
        errorEl.textContent = message;
        errorEl.style.display = "block";
        input.classList.add("error-input");
    }

    function clearError(input) {
        const errorEl = input.parentElement.querySelector(".error-msg");
        errorEl.textContent = "";
        errorEl.style.display = "none";
        input.classList.remove("error-input");
    }

    // Validation
    function validate() {
        let isValid = true;

        let name = appointmentForm3.querySelector("input[name='name']");
        let email = appointmentForm3.querySelector("input[name='email']");
        let phone = appointmentForm3.querySelector("input[name='phone']");

        // Name check
        let nameRegex = /^[A-Za-z\s]{2,50}$/;
        if (!nameRegex.test(name.value.trim())) {
            showError(name, "Enter a valid name (only letters and spaces).");
            isValid = false;
        } else clearError(name);

        // Email check
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value.trim())) {
            showError(email, "Enter a valid email address.");
            isValid = false;
        } else clearError(email);

        // Phone check
        let phoneRegex = /^\+?\d{10,15}$/;
        if (!phoneRegex.test(phone.value.trim())) {
            showError(phone, "Enter a valid phone number (10–15 digits).");
            isValid = false;
        } else clearError(phone);

        return isValid;
    }

    // Form submit
    appointmentForm3.addEventListener("submit", function (e) {
        e.preventDefault();

        if (!validate()) return;

        submitBtn.disabled = true;
        submitBtn.textContent = "Processing...";

        grecaptcha.ready(function () {
            grecaptcha.execute('6LeKmkorAAAAAGyeYo1RwupoLJ1uwpdSyI0ZB5Pu', { action: 'submit' })
                .then(function (token) {
                    const formData = new FormData(appointmentForm3);
                    formData.append('recaptcha_token', token);

                    const data = {};
                    formData.forEach((value, key) => data[key] = value.trim());

                    Calendly.initPopupWidget({
                        url: 'https://calendly.com/vaidehi-eduedgepro/30min',
                        prefill: { name: data.name, email: data.email }
                    });

                    window.addEventListener('message', function (e) {
                        if (e.origin === "https://calendly.com" && e.data.event === 'calendly.event_scheduled') {
                            fetch('https://www.eduedgeglobal.com/api/save_appointment3.php', {
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
                                    appointmentForm3.reset();
                                } else {
                                    alert("Error saving appointment, please try again");
                                }
                                submitBtn.disabled = false;
                                submitBtn.textContent = "Book An Appointment";
                            })
                            .catch(err => {
                                console.error(err);
                                alert("Error saving appointment, please try again");
                                submitBtn.disabled = false;
                                submitBtn.textContent = "Book An Appointment";
                            });
                        }
                    });
                });
        });
    });
});
</script>

<style>
/* Optional: Red border for invalid fields */
.error-input {
    border: 1px solid red;
}
</style>
