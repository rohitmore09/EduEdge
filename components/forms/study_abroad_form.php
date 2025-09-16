<form id="appointmentForm">
  <h3>Start Your Prep with a<br>
Free Consultation</h3>
  <!-- Common Fields -->
    <div class="form-group">
      <input type="text" name="name" placeholder="Name"  />
      <div class="error-message"></div>
    </div>
    <div class="form-group">
      <input type="email" name="email" placeholder="Email"  />
      <div class="error-message"></div>
    </div>
    <div class="form-group">
      <input type="tel" name="phone" placeholder="Phone"  />
      <div class="error-message"></div>
    </div>
    <div class="form-group">
      <input type="text" name="city" placeholder="City"  />
      <div class="error-message"></div>
    </div>
  <div class="form-group">
    <select id="service" name="service" >
      <option value="">Select a service</option>
      <option value="admissions consulting">Admissions Consulting</option>
      <option value="early profile building and mentoring">Early Profile Building and Mentoring</option>
      <option value="application writing and review">Application Writing and Review</option>
    </select>
    <div class="error-message"></div>
  </div>

  <!-- Plans (hidden by default, shown after service select) -->
  <div id="careerCourses" class="form-group hidden">
    <select id="courseSelect" name="plan">
      <option value="">Select a Plan</option>
    </select>
    <div class="error-message"></div>
  </div>

  <input type="hidden" name="recaptcha_token" id="recaptchaToken">
  <!-- Submit Button -->
  <div id="submitSection" >
    <button type="submit" id="submitBtn">Book An Appointment</button>
  </div>
</form>

<script>
const serviceSelect = document.getElementById("service");
const careerCourses = document.getElementById("careerCourses");
const courseSelect = document.getElementById("courseSelect");
const submitSection = document.getElementById("submitSection");

// New service → plans mapping
const servicePlans = {
  "admissions consulting": [
    "Essentials Plan",
    "Comprehensive Plan",
    "Premium Plan"
  ],
  "early profile building and mentoring": [
    "Comprehensive Plan with Training",
    "Mentoring and Profile Building Plan"
  ],
};

// Handle service change
serviceSelect.addEventListener("change", function () {
  const selectedService = this.value;

  // Reset plans dropdown
  courseSelect.innerHTML = '<option value="">Select a Plan</option>';

  if (selectedService && servicePlans[selectedService]) {
    servicePlans[selectedService].forEach(plan => {
      const option = document.createElement("option");
      option.value = plan;
      option.textContent = plan;
      courseSelect.appendChild(option);
    });
    careerCourses.classList.remove("hidden");
  } else {
    careerCourses.classList.add("hidden");
  }
});

// Validation helpers
function isValidEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function isValidPhone(phone) {
  return /^\d{10}$/.test(phone);
}

function clearErrors(form) {
  form.querySelectorAll('.error-message').forEach(div => div.textContent = '');
  form.querySelectorAll('input, select').forEach(el => el.classList.remove('error'));
}

function setError(input, message) {
  input.classList.add('error');
  const errorDiv = input.parentElement.querySelector('.error-message');
  if (errorDiv) errorDiv.textContent = message;
}

const form = document.getElementById('appointmentForm');
const submitBtn = document.getElementById('submitBtn');

function validate() {
  clearErrors(form);

  let valid = true;
  const name = form.name.value.trim();
  const email = form.email.value.trim();
  const phone = form.phone.value.trim();
  const city = form.city.value.trim();
  const service = form.service.value;
  const planEl = form.elements["plan"];

  if (!name) {
    setError(form.name, 'Please enter your name.');
    valid = false;
  }

  if (!email) {
    setError(form.email, 'Please enter your email.');
    valid = false;
  } else if (!isValidEmail(email)) {
    setError(form.email, 'Please enter a valid email.');
    valid = false;
  }

  if (!phone) {
    setError(form.phone, 'Please enter your phone number.');
    valid = false;
  } else if (!isValidPhone(phone)) {
    setError(form.phone, 'Please enter a valid 10-digit phone number.');
    valid = false;
  }

  if (!city) {
    setError(form.city, 'Please enter your city.');
    valid = false;
  }

  if (!service) {
    setError(form.service, 'Please select a service.');
    valid = false;
  }

  // Plan validation
  if (service && servicePlans[service]) {
    if (!planEl.value.trim()) {
      setError(planEl, 'Please select a plan.');
      valid = false;
    }
  }

  return valid;
}

// Submit handler
form.addEventListener("submit", function (e) {
  e.preventDefault();
  if (!validate()) return;

  submitBtn.disabled = true;
  submitBtn.textContent = "Processing...";

  grecaptcha.ready(function () {
    grecaptcha.execute('6LeKmkorAAAAAGyeYo1RwupoLJ1uwpdSyI0ZB5Pu', { action: 'submit' }).then(function (token) {
      const formData = new FormData(form);
      formData.append('recaptcha_token', token);

      const data = {};
      formData.forEach((value, key) => data[key] = value.trim());

      // Open Calendly
      Calendly.initPopupWidget({
        url: 'https://calendly.com/vaidehi-eduedgepro/30min',
        prefill: {
          name: data.name,
          email: data.email,
        },
      });

      // Handle Calendly scheduled event
      window.addEventListener('message', function (e) {
        if (e.origin === "https://calendly.com" && e.data.event === 'calendly.event_scheduled') {
          fetch('https://www.eduedgeglobal.com/api/save_appointment_studyabroad.php', {
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
              console.log('Appointment booked and data saved successfully!');
              form.reset();
              careerCourses.classList.add("hidden");
              submitBtn.disabled = false;
              submitBtn.textContent = "Book An Appointment";
            } else {
              submitBtn.disabled = false;
              submitBtn.textContent = "Book An Appointment";
            }
          })
          .catch(err => {
            console.error(err);
            submitBtn.disabled = false;
            submitBtn.textContent = "Book An Appointment";
          });
        }
      });
    });
  });
});
</script>
