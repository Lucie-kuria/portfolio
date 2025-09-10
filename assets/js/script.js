document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("contact_process.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("formResponse").innerHTML = 
            `<div class="alert alert-info">${data}</div>`;
        document.getElementById("contactForm").reset();
    })
    .catch(error => {
        document.getElementById("formResponse").innerHTML = 
            `<div class="alert alert-danger">Error sending message. Please try again later.</div>`;
    });
});
