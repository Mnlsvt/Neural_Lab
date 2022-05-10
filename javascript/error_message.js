function errorMessage() {
    var error = document.getElementById("error")
    if (isNaN(document.getElementById("number").value))
    {
         
        // Changing content and color of content
        error.textContent = "Please fill in all the required fields."
        error.style.color = "red"
    } else {
        error.textContent = ""
    }
}