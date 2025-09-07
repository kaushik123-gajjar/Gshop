let logout = document.getElementById("logout");

logout.addEventListener("click", function(event) {
    if (!confirm("Are You Sure Logout?")) {
        event.preventDefault(); // stops default action (e.g., form submit or link navigation)
    }
});