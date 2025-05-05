// Fixed header
window.addEventListener('scroll', function(){
    const header = this.document.querySelector('header');

    if(this.window.scrollY > 0){
        header.classList.add('active');
    }else{
        header.classList.remove('active');
    }
});

// hamburger

let hamburger = document.querySelector('.hamburger');
let links = document.querySelector('.main_nav')

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('active');
    links.classList.toggle('active');
})

// hamburger

// Tabs
document.addEventListener("DOMContentLoaded", function () {
    // Find all sections that have tab-buttons and tab contents
    const tabSections = document.querySelectorAll("[data-tab-section]");

    tabSections.forEach(function (section) {
        const tabButtons = section.querySelectorAll(".tab-buttons .tb-cntnt");
        const tabContents = section.querySelectorAll(".tabs-content .tbs, .tbs:not(.tabs-content .tbs)");

        function activateTab(tabId) {
            tabButtons.forEach(function (btn) {
                btn.classList.toggle("active", btn.getAttribute("data-tab") === tabId);
            });

            tabContents.forEach(function (content) {
                content.style.display = (content.id === tabId) ? "block" : "none";
            });
        }

        // Set initial active tab
        const initialActive = section.querySelector(".tab-buttons .tb-cntnt.active");
        if (initialActive) {
            activateTab(initialActive.getAttribute("data-tab"));
        } else if (tabButtons.length > 0) {
            activateTab(tabButtons[0].getAttribute("data-tab"));
        }

        // Add event listener
        tabButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                activateTab(this.getAttribute("data-tab"));
            });
        });
    });
});
// Tabs
