<script src="https://www.google.com/recaptcha/api.js?render=6LeKmkorAAAAAGyeYo1RwupoLJ1uwpdSyI0ZB5Pu"></script>
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<form id="appointmentForm4">
    <h2>Enquire Now</h2>
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
        <select id="service" name="service" class="form-control">
            <option value="">-- Select Service --</option>
            <option value="corporate">Corporate</option>
            <option value="universities">Universities</option>
            <option value="certification">Certification</option>
            <option value="cfa">CFA</option>
        </select>
        <small class="error-msg" style="display:none;color:red;"></small>
    </div>
    <!-- Certification + Course (hidden initially) -->
    <div id="certificationWrapper" style="display:none;">
        <div class="form-group slc_arw">
            <select id="certification" name="certification" class="form-control">
                <option value="">-- Select Certification --</option>
                <option value="investment-banker">Investment Banker</option>
                <option value="financial-analyst">Financial Analyst</option>
                <option value="risk-manager">Risk Manager</option>
                <option value="professional-trader">Professional Trader</option>
                <option value="data-scientist">Data Scientist</option>
                <option value="consultant">Consultant</option>
            </select>
            <small class="error-msg" style="display:none;color:red;"></small>
        </div>
        <div class="form-group slc_arw">
            <select id="course" name="course" class="form-control">
                <option value="">-- Select Course --</option>
            </select>
            <small class="error-msg" style="display:none;color:red;"></small>
        </div>
    </div>
    <!-- CFA Levels (hidden initially) -->
    <div id="cfaWrapper" style="display:none;">
        <div class="form-group slc_arw">
            <select id="cfaLevel" name="cfaLevel" class="form-control">
                <option value="">-- Select CFA Level --</option>
                <option value="cfa-level-1">CFA Level 1</option>
                <option value="cfa-level-2">CFA Level 2</option>
            </select>
            <small class="error-msg" style="display:none;color:red;"></small>
        </div>
    </div>
    <div class="sbmt">
        <button type="submit" id="submitBtn">Book An Appointment
        <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="https://www.w3.org/2000/svg">
            <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
        </svg>
        </button>
    </div>
</form>
<script>
    
    const courses = {
        "investment-banker": {
            "applied-excel-modelling-for-investment-banking": "Applied Excel Modelling for Investment Banking",
            "derivates-for-investment-banking": "Derivatives for Investment Banking",
            "risk-management-for-investment-banking": "Risk Management for Investment Banking",
            "equity-research-and-fundamental-analysis": "Equity Research and Fundamental Analysis",
            "m-a-transaction-advisory-and-lbo-deal-structuring": "M&A, Transaction Advisory & LBO Deal Structuring",
            "options-strategies-and-greeks": "Options Strategies and Greeks"
        },
        "financial-analyst": {
            "essential-excel-modelling-for-investment-banking": "Essential Excel Modelling for Financial Analysis",
            "financial-projections-and-valuation": "Financial Projections & Valuation",
            "statistical-finance": "Statistical Finance",
            "financial-dashboarding-with-power-bi": "Financial Dashboarding with Power BI",
            "python-for-financial-analysis": "Python for Financial Analysis",
            "global-financial-markets-and-asset-classes": "Global Financial Markets & Asset Classes"
        },
        "risk-manager": {
            "statistical-finance": "Statistical Finance",
            "python-for-risk-analyst": "Python for Risk Analyst",
            "market-risk-modelling-using-excel": "Market Risk Modelling using Excel",
            "market-risk-modelling-using-python": "Market Risk Modelling using Python",
            "credit-risk-modelling-using-excel-and-python": "Credit Risk Modelling using Excel & Python",
            "counterparty-credit-risk-using-excel-and-python": "Counterparty Credit Risk using Excel & Python",
            "liquidity-risk-and-fr-2052a-reporting": "Liquidity Risk and FR 2052a Reporting",
            "frtb-sa-and-ima-in-excel-and-python": "FRTB-SA and IMA in Excel & Python"
        },
        "professional-trader": {
            "essential-technical-analysis": "Essential Technical Analysis",
            "advanced-technical-analysis": "Advanced Technical Analysis",
            "quantitative-trading-strategies-using-python": "Quantitative Trading Strategies using Python",
            "algorithmic-trading-and-strategies-using-python": "Algorithmic Trading & Strategies using Python",
            "nlp-for-text-processing": "NLP for Text Processing"
        },
        "data-scientist": {
            "essential-python-for-data-science": "Essential Python for Data Science",
            "statistics-for-data-science": "Statistics for Data Science",
            "machine-learning-for-data-science": "Machine Learning for Data Science",
            "data-visualization-and-business-intelligence-using-power-bi": "Data Visualization & Business Intelligence using Power BI",
            "big-data-and-cloud-computing": "Big Data & Cloud Computing",
            "ai-and-deep-learning": "AI & Deep Learning",
            "nlp-for-text-processing": "NLP for Text Processing"
        },
        "consultant": {
            "essential-excel-modelling-for-financial-analysis": "Essential Excel Modelling for Financial Analysis",
            "financial-projections-and-valuation": "Financial Projections & Valuation",
            "m-and-a-transaction-advisory-and-lbo-deal-structuring": "M&A, Transaction Advisory & LBO Deal Structuring",
            "business-dashboarding-with-power-bi": "Business Dashboarding with Power BI",
            "essential-python-for-consulting": "Essential Python for Consulting",
            "global-financial-markets-and-asset-classes": "Global Financial Markets & Asset Classes",
            "statistical-modelling-and-analysis": "Statistical Modelling and Analysis",
            "impactful-presentations-for-clients": "Impactful Presentations for Clients",
            "effective-report-writing": "Effective Report Writing"
        }
    };

    // Show/Hide Certification + CFA fields based on Service selection
    document.getElementById('service').addEventListener('change', function() {
        const certWrapper = document.getElementById('certificationWrapper');
        const cfaWrapper = document.getElementById('cfaWrapper');

        if (this.value === "certification") {
            certWrapper.style.display = "block";
            cfaWrapper.style.display = "none";
        } else if (this.value === "cfa") {
            cfaWrapper.style.display = "block";
            certWrapper.style.display = "none";
        } else {
            certWrapper.style.display = "none";
            cfaWrapper.style.display = "none";
        }

        // Reset dropdowns when hidden
        if (this.value !== "certification") {
            document.getElementById('certification').value = "";
            document.getElementById('course').innerHTML = '<option value="">-- Select Course --</option>';
        }
        if (this.value !== "cfa") {
            document.getElementById('cfaLevel').value = "";
        }
    });

    // Populate Courses when Certification is selected
    document.getElementById('certification').addEventListener('change', function() {
        const courseSelect = document.getElementById('course');
        courseSelect.innerHTML = '<option value="">-- Select Course --</option>'; // reset

        const selectedCert = this.value;
        if (selectedCert && courses[selectedCert]) {
            for (const [slug, name] of Object.entries(courses[selectedCert])) {
                const option = document.createElement('option');
                option.value = name;   // ✅ only name as value
                option.textContent = name;
                courseSelect.appendChild(option);
            }
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const appointmentForm4 = document.getElementById("appointmentForm4");
    const submitBtn = document.getElementById("submitBtn");

    function showError(input, message) {
        const errorEl = input.parentElement.querySelector(".error-msg");
        if (errorEl) {
            errorEl.textContent = message;
            errorEl.style.display = "block";
        }
        input.classList.add("error-input");
    }

    function clearError(input) {
        const errorEl = input.parentElement.querySelector(".error-msg");
        if (errorEl) {
            errorEl.textContent = "";
            errorEl.style.display = "none";
        }
        input.classList.remove("error-input");
    }

    function validate() {
        let isValid = true;

        const name = appointmentForm4.querySelector("input[name='name']");
        const email = appointmentForm4.querySelector("input[name='email']");
        const phone = appointmentForm4.querySelector("input[name='phone']");
        const service = document.getElementById("service");

        // Name
        const nameRegex = /^[A-Za-z\s]{2,50}$/;
        if (!nameRegex.test(name.value.trim())) {
            showError(name, "Enter a valid name (only letters and spaces).");
            isValid = false;
        } else clearError(name);

        // Email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value.trim())) {
            showError(email, "Enter a valid email address.");
            isValid = false;
        } else clearError(email);

        // Phone
        const phoneRegex = /^\+?\d{10,15}$/;
        if (!phoneRegex.test(phone.value.trim())) {
            showError(phone, "Enter a valid phone number (10–15 digits).");
            isValid = false;
        } else clearError(phone);

        // Service
        if (!service.value) {
            showError(service, "Please select a Service.");
            isValid = false;
        } else clearError(service);

        // ✅ Conditional validation
        if (service.value === "certification") {
            const certification = document.getElementById("certification");
            const course = document.getElementById("course");

            if (!certification.value) {
                showError(certification, "Please select a Certification.");
                isValid = false;
            } else clearError(certification);

            if (!course.value) {
                showError(course, "Please select a Course.");
                isValid = false;
            } else clearError(course);
        }

        if (service.value === "cfa") {
            const cfaLevel = document.getElementById("cfaLevel");
            if (!cfaLevel.value) {
                showError(cfaLevel, "Please select a CFA Level.");
                isValid = false;
            } else clearError(cfaLevel);
        }

        return isValid;
    }

    appointmentForm4.addEventListener("submit", function (e) {
        e.preventDefault();
        if (!validate()) return;

        submitBtn.disabled = true;
        submitBtn.textContent = "Processing...";

        grecaptcha.ready(function () {
            grecaptcha.execute('6LeKmkorAAAAAGyeYo1RwupoLJ1uwpdSyI0ZB5Pu', { action: 'submit' })
                .then(function (token) {
                    const formData = new FormData(appointmentForm4);
                    formData.append('recaptcha_token', token);

                    const data = {};
                    formData.forEach((value, key) => data[key] = value.trim());

                    Calendly.initPopupWidget({
                        url: 'https://calendly.com/vaidehi-eduedgepro/30min',
                        prefill: { name: data.name, email: data.email }
                    });

                    window.addEventListener('message', function (e) {
                        if (e.origin === "https://calendly.com" && e.data.event === 'calendly.event_scheduled') {
                            fetch('https://www.eduedgeglobal.com/api/save_appointment_contact.php', {
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
                                        // show success inline instead of alert
                                        alert('Appointment booked and data saved successfully!');
                                        const formMsg = document.getElementById("formMessage");
                                        if (formMsg) {
                                            formMsg.textContent = "✅ Appointment booked successfully!";
                                            formMsg.style.color = "green";
                                        }
                                        appointmentForm4.reset();
                                    } else {
                                        alert('Error saving appointment. Please try again.');
                                        const formMsg = document.getElementById("formMessage");
                                        if (formMsg) {
                                            formMsg.textContent = "❌ Error saving appointment, please try again.";
                                            formMsg.style.color = "red";
                                        }
                                    }
                                    submitBtn.disabled = false;
                                    submitBtn.textContent = "Book An Appointment";
                                })
                                .catch(err => {
                                    console.error(err);
                                    alert('Error saving appointment. Please try again.');
                                    const formMsg = document.getElementById("formMessage");
                                    if (formMsg) {
                                        formMsg.textContent = "❌ Error saving appointment, please try again.";
                                        formMsg.style.color = "red";
                                    }
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