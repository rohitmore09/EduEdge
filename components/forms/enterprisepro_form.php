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
      <option value="university">University</option>
      <option value="corporate">Corporate</option>
      <option value="certification">Certification</option>
      <option value="CFA">CFA</option>
    </select>
    <div class="error-message"></div>
  </div>

  <!-- Career Roles -->
<div id="careerFields" class="hidden">
  <div class="form-group">
    <select id="careerRole" name="course">
      <option value="">Select a Course</option>
      <option value="investment_banker">Investment Banker</option>
      <option value="financial_analyst">Financial Analyst</option>
      <option value="risk_manager">Risk Manager</option>
      <option value="professional_trader">Professional Trader</option>
      <option value="data_scientist">Data Scientist</option>
      <option value="consultant">Consultant</option>
    </select>
    <div class="error-message"></div>
  </div>

  <!-- Dynamic Course List -->
  <div id="careerCourses" class="hidden">
  <select id="courseSelect" name="plan" >
    <option value="">Select a Plan</option>
  </select>
  <div class="error-message"></div>
</div>
</div>

<!-- CFA Section -->
<div id="cfaFields" class="hidden">
  <div class="form-group">
    <select name="cfa_level">
      <option value="">Select CFA Level</option>
      <option value="level1">Level 1</option>
      <option value="level2">Level 2</option>
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
  // document.addEventListener("DOMContentLoaded", function () {
  //   const serviceSelect = document.getElementById("service");
  //   const currentURL = window.location.href;

  //   if (
  //       currentURL.includes("/top-prep/ap.php") ||
  //       currentURL.includes("/top-prep/sat-prep.php") || 
  //       currentURL.includes("/top-prep/psat.php") ||
  //       currentURL.includes("/top-prep/ap/") ||
  //       currentURL.includes("/top-prep/sat/")
  //   ) {
  //       serviceSelect.value = "undergrad";
  //   } else if (
  //       currentURL.includes("/top-prep/gre.php") ||
  //       currentURL.includes("/top-prep/gmat.php") ||
  //       currentURL.includes("/top-prep/gmat") ||
  //       currentURL.includes("/top-prep/gre")
  //   ) {
  //       serviceSelect.value = "postgrad";
  //   } else {
  //       serviceSelect.value = "";
  //   } 

  //   // Trigger change event if needed
  //   const event = new Event('change');
  //   serviceSelect.dispatchEvent(event);
  // });



  const serviceSelect = document.getElementById("service");
  const careerFields = document.getElementById("careerFields");
  const careerRole = document.getElementById("careerRole");
  const careerCourses = document.getElementById("careerCourses");
  const courseList = document.getElementById("courseList");
  const cfaFields = document.getElementById("cfaFields");
  const submitSection = document.getElementById("submitSection");


  const roleCourses = {
  investment_banker: [
    "Applied Excel Modelling for Investment Banking",
    "Derivatives for Investment Banking",
    "Risk Management for Investment Banking",
    "Equity Research and Fundamental Analysis",
    "M&A, Transaction Advisory & LBO Deal Structuring",
    "Options Strategies and Greeks"
  ],
  financial_analyst: [
    "Essential Excel Modelling for Financial Analysis",
    "Financial Projections & Valuation",
    "Statistical Finance",
    "Financial Dashboarding with Power BI",
    "Python for Financial Analysis",
    "Global Financial Markets & Asset Classes"
  ],
  risk_manager: [
    "Statistical Finance",
    "Python for Risk Analyst",
    "Market Risk Modelling using Excel",
    "Market Risk Modelling using Python",
    "Credit Risk Modelling using Excel & Python",
    "Counterparty Credit Risk using Excel & Python",
    "Liquidity Risk and FR 2052a Reporting",
    "FRTB-SA and IMA in Excel & Python"
  ],
  professional_trader: [
    "Essential Technical Analysis",
    "Advanced Technical Analysis",
    "Quantitative Trading Strategies using Python",
    "Algorithmic Trading & Strategies using Python",
    "NLP for Text Processing"
  ],
  data_scientist: [
    "Essential Python for Data Science",
    "Statistics for Data Science",
    "Machine Learning for Data Science",
    "Data Visualization & Business Intelligence using Power BI",
    "Big Data & Cloud Computing",
    "AI & Deep Learning",
    "NLP for Text Processing"
  ],
  consultant: [
    "Essential Excel Modelling for Financial Analysis",
    "Financial Projections & Valuation",
    "M&A, Transaction Advisory & LBO Deal Structuring",
    "Business Dashboarding with Power BI",
    "Essential Python for Consulting",
    "Global Financial Markets & Asset Classes",
    "Statistical Modelling and Analysis",
    "Impactful Presentations for Clients",
    "Effective Report Writing"
  ]
};

// Handle service change
serviceSelect.addEventListener("change", function () {
  careerFields.classList.add("hidden");
  cfaFields.classList.add("hidden");

  if (this.value === "certification") {
    careerFields.classList.remove("hidden");
  } else if (this.value === "CFA") {
    cfaFields.classList.remove("hidden");
  }
});

// Handle career role change
careerRole.addEventListener("change", function () {
  const role = this.value;
  const courseSelect = document.getElementById("courseSelect");

  // Clear old options
  courseSelect.innerHTML = '<option value="">Select a Plan</option>';

  if (role && roleCourses[role]) {
    roleCourses[role].forEach(course => {
      const option = document.createElement("option");
      option.value = course;
      option.textContent = course;
      courseSelect.appendChild(option);
    });
    careerCourses.classList.remove("hidden");
  } else {
    careerCourses.classList.add("hidden");
  }
});


// // Handle career role change
// careerRole.addEventListener("change", function () {
//   const role = this.value;
//   courseList.innerHTML = "";
//   if (role && roleCourses[role]) {
//     roleCourses[role].forEach(course => {
//       const li = document.createElement("li");
//       li.textContent = course;
//       courseList.appendChild(li);
//     });
//     careerCourses.classList.remove("hidden");
//   } else {
//     careerCourses.classList.add("hidden");
//   }
// });

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
    const careerRoleEl = form.elements["course"];
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


    // Certification validation (Career Role + Course)
   // Certification validation (Career Role + Course)
if (service === 'certification') {
  const careerRoleEl = form.elements["course"]; // career role dropdown
  const planEl = form.elements["plan"];         // plan dropdown

  if (!careerRoleEl.value.trim()) {
    setError(careerRoleEl, 'Please select your career role.');
    valid = false;
  }
  if (!planEl.value.trim()) {
    setError(planEl, 'Please select a course/plan.');
    valid = false;
  }
}

    // CFA validation
    if (service === 'CFA') {
      const cfa_level = form.cfa_level ? form.cfa_level.value.trim() : '';

      if (!cfa_level) {
        setError(form.cfa_level, 'Please select your CFA level.');
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
            fetch('https://www.eduedgeglobal.com/api/save_appointment_enterprisepro.php', {
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
                careerFields.classList.add("hidden");
                careerRole.classList.add("hidden");
                careerCourses.classList.add("hidden");
                courseList.classList.add("hidden");
                cfaFields.classList.add("hidden");
                submitSection.classList.add("hidden");
                submitBtn.disabled = true;
                submitBtn.textContent = "Submit & Book Appointment";
              } else {
                submitBtn.disabled = false;
                submitBtn.textContent = "Submit & Book Appointment";
              }
            })
            .catch(err => {
              console.error(err);
              submitBtn.disabled = false;
              submitBtn.textContent = "Submit & Book Appointment";
            });
          }
        });
      });
    });
  });

</script>