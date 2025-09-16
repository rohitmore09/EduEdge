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
      <option value="undergrad">UnderGrad Study Abroad</option>
      <option value="postgrad">PostGrad Study Abroad</option>
      <option value="certified">Certified Courses & Upskilling</option>
    </select>
    <div class="error-message"></div>
  </div>

  <!-- Undergrad Fields -->
  <div id="undergradFields" class="hidden">
    <div class="form-group">
      <select name="board" onchange="toggleOtherField(this, 'otherBoard')">
        <option value="">Select Board</option>
        <option value="IB">IB</option>
        <option value="IGCSE">IGCSE</option>
        <option value="ICSE">ICSE</option>
        <option value="CBSE">CBSE</option>
        <option value="HSC">HSC</option>
        <option value="Other">Other</option>
      </select>
      <input type="text" id="otherBoard" name="other_board" class="hidden" placeholder="Enter other board" />
      <div class="error-message"></div>
    </div>
    <div class="form-group">
      <select name="standard">
        <option value="">Select Standard</option>
        <option>7</option><option>8</option><option>9</option>
        <option>10</option><option>11</option><option>12</option>
      </select>
      <div class="error-message"></div>
    </div>
  </div>

  <!-- Postgrad Fields -->
  <div id="postgradFields" class="hidden">
    <div class="form-group">
      <select name="ug_stream" onchange="toggleOtherField(this, 'otherStream')">
        <option value="">Select Current UnderGrad Stream</option>
        <option>BSc</option>
        <option>B.Engg.</option>
        <option>BBA</option>
        <option>BCom</option>
        <option>BA</option>
        <option value="Other">Other</option>
      </select>
      <input type="text" id="otherStream" name="other_stream" class="hidden" placeholder="Enter other stream" />
      <div class="error-message"></div>
    </div>
    <div class="form-group">
      <select name="ug_standard">
        <option value="">Select Standard</option>
        <option>11</option><option>12</option>
        <option>FY</option><option>SY</option><option>TY</option>
        <option>4th Year</option><option>5th Year</option>
      </select>
      <div class="error-message"></div>
    </div>
  </div>

  <!-- Certified Fields -->
  <div id="certifiedFields" class="hidden">
    <div class="form-group">
      <select name="qualification" onchange="toggleOtherField(this, 'otherQualification')">
        <option value="">Select Current Qualification</option>
        <option>High School</option>
        <option>Bachelors</option>
        <option>Masters</option>
        <option value="Other">Other</option>
      </select>
      <input type="text" id="otherQualification" name="other_qualification" class="hidden" placeholder="Enter other qualification" />
      <div class="error-message"></div>
    </div>
    <div class="form-group">
      <select name="experience">
        <option value="">Select Years of Experience</option>
        <option>0-2</option><option>2-5</option><option>5-10</option><option>10+</option>
      </select>
      <div class="error-message"></div>
    </div>
    <div class="form-group">
      <select name="interest">
        <option value="">Select Area of Interest</option>
        <option>Finance</option><option>Fintech</option>
        <option>Banking</option><option>Data Science</option>
        <option>Analytics</option><option>Technology</option>
      </select>
      <div class="error-message"></div>
    </div>
  </div>
  <input type="hidden" name="recaptcha_token" id="recaptchaToken">
  <!-- Submit Button -->
  <div id="submitSection" >
    <button type="submit" id="submitBtn">Book An Appointment</button>
  </div>
</form>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const serviceSelect = document.getElementById("service");
    const currentURL = window.location.href;

    if (
        currentURL.includes("/top-prep/ap.php") ||
        currentURL.includes("/top-prep/sat-prep.php") || 
        currentURL.includes("/top-prep/psat.php") ||
        currentURL.includes("/top-prep/ap/") ||
        currentURL.includes("/top-prep/sat/")
    ) {
        serviceSelect.value = "undergrad";
    } else if (
        currentURL.includes("/top-prep/gre.php") ||
        currentURL.includes("/top-prep/gmat.php") ||
        currentURL.includes("/top-prep/gmat") ||
        currentURL.includes("/top-prep/gre")
    ) {
        serviceSelect.value = "postgrad";
    } else {
        serviceSelect.value = "";
    } 

    // Trigger change event if needed
    const event = new Event('change');
    serviceSelect.dispatchEvent(event);
  });



  const serviceSelect = document.getElementById("service");
  const undergradFields = document.getElementById("undergradFields");
  const postgradFields = document.getElementById("postgradFields");
  const certifiedFields = document.getElementById("certifiedFields");
  //const commonFields = document.getElementById("commonFields");
  const submitSection = document.getElementById("submitSection");

  serviceSelect.addEventListener("change", function () {
    undergradFields.classList.add("hidden");
    postgradFields.classList.add("hidden");
    certifiedFields.classList.add("hidden");
    //commonFields.classList.add("hidden");
    //submitSection.classList.add("hidden");

    if (this.value === "undergrad") {
      undergradFields.classList.remove("hidden");
    } else if (this.value === "postgrad") {
      postgradFields.classList.remove("hidden");
    } else if (this.value === "certified") {
      certifiedFields.classList.remove("hidden");
    }

    // if (this.value !== "") {
    //   //commonFields.classList.remove("hidden");
    //   submitSection.classList.remove("hidden");
    // }
  });

  function toggleOtherField(selectElement, otherInputId) {
    const otherInput = document.getElementById(otherInputId);
    if (selectElement.value === "Other") {
      otherInput.classList.remove("hidden");
    } else {
      otherInput.classList.add("hidden");
      otherInput.value = "";
    }
  }



    const form = document.getElementById('appointmentForm');
    const submitBtn = document.getElementById('submitBtn');

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

    function validate() {
    clearErrors(form);

    let valid = true;
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const phone = form.phone.value.trim();
    const city = form.city.value.trim();
    const service = form.service.value;

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

    // Undergrad validation
    if (service === 'undergrad') {
        const board = form.board.value.trim();
        const standard = form.standard.value.trim();

        if (!board) {
        setError(form.board, 'Please select your board.');
        valid = false;
        }
        if (!standard) {
        setError(form.standard, 'Please select your standard.');
        valid = false;
        }
    }

    // Postgrad validation
    if (service === 'postgrad') {
        const ug_stream = form.ug_stream ? form.ug_stream.value.trim() : '';
        const ug_standard = form.ug_standard ? form.ug_standard.value.trim() : '';

        if (!ug_stream) {
        setError(form.ug_stream, 'Please select your UG stream.');
        valid = false;
        }
        if (!ug_standard) {
        setError(form.ug_standard, 'Please select your Standard.');
        valid = false;
        }
    }

    // Certified validation
    if (service === 'certified') {
        const qualification = form.qualification ? form.qualification.value.trim() : '';
        const experience = form.experience ? form.experience.value.trim() : '';
        const interest = form.interest ? form.interest.value.trim() : '';

        if (!qualification) {
        setError(form.qualification, 'Please select your qualification.');
        valid = false;
        }
        if (!experience) {
        setError(form.experience, 'Please select your experience.');
        valid = false;
        }
        if (!interest) {
        setError(form.interest, 'Please select your interest.');
        valid = false;
        }
    }

    // Handle "Other" fields validation
    if (form.board && form.board.value === "Other") {
        const otherBoard = form.other_board.value.trim();
        if (!otherBoard) {
            setError(form.other_board, 'Please enter your board.');
            valid = false;
        }
    }

    if (form.ug_stream && form.ug_stream.value === "Other") {
        const otherStream = form.other_stream.value.trim();
        if (!otherStream) {
            setError(form.other_stream, 'Please enter your stream.');
            valid = false;
        }
    }

    if (form.qualification && form.qualification.value === "Other") {
        const otherQualification = form.other_qualification.value.trim();
        if (!otherQualification) {
            setError(form.other_qualification, 'Please enter your qualification.');
            valid = false;
        }
    }

    return valid;
    }


  
  // Form submission handler
  appointmentForm.addEventListener("submit", function (e) {
    e.preventDefault();

    if (!validate()) return;

    // Disable submit button and show loading
    submitBtn.disabled = true;
    submitBtn.textContent = "Processing...";

    // Execute reCAPTCHA
    grecaptcha.ready(function () {
      grecaptcha.execute('6LeKmkorAAAAAGyeYo1RwupoLJ1uwpdSyI0ZB5Pu', { action: 'submit' }).then(function (token) {
        // Add token to form data
        const formData = new FormData(appointmentForm);
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

        // Listen for Calendly event
        window.addEventListener('message', function (e) {
          if (e.origin === "https://calendly.com" && e.data.event === 'calendly.event_scheduled') {
            fetch('https://www.eduedgeglobal.com/api/save_appointment.php', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify({
                formData: data,
                recaptcha_token: token, // send token to backend
                calendlyEvent: e.data.payload,
              }),
            })
            .then(res => res.json())
            .then(response => {
              if (response.success) {
                alert('Appointment booked and data saved successfully!');
                appointmentForm.reset();
                undergradFields.classList.add("hidden");
                postgradFields.classList.add("hidden");
                certifiedFields.classList.add("hidden");
                submitSection.classList.add("hidden");
                submitBtn.disabled = true;
                submitBtn.textContent = "Submit & Book Appointment";
              } else {
                alert('Error saving appointment. Please try again.');
                submitBtn.disabled = false;
                submitBtn.textContent = "Submit & Book Appointment";
              }
            })
            .catch(err => {
              console.error(err);
              alert('Error saving appointment. Please try again.');
              submitBtn.disabled = false;
              submitBtn.textContent = "Submit & Book Appointment";
            });
          }
        });
      });
    });
  });

</script>