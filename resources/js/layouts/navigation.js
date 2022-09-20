let btn = document.querySelector("#sidebar_btn");
let sidebar = document.querySelector(".sidebar");

btn.onclick = function () {
    sidebar.classList.toggle('active')
}

// Get the container element
var btnContainer = document.querySelector(".nav_list");
var btns = btnContainer.querySelectorAll("a");
// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active_link");

        // If there's no active class
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active_link", "");
        }

        // Add the active class to the current/clicked button
        this.className += " active_link";
    });
}
