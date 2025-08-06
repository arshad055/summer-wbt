function checkReason() {
    var reason = prompt("What is the reason you want to contact?");

    
    reason = reason.toLowerCase();

    if (reason === "job") {
        alert("Great! Job-related queries are always welcome.");
    } else if (reason === "project") {
        alert("Project discussion is a good reason to contact.");
    } else if (reason === "coffee") {
        alert("A coffee chat sounds interesting!");
    } else if (reason === "research") {
        alert("Research collaboration is a fantastic initiative!");
    } else if (reason === "networking") {
        alert("Networking helps everyone grow. Let's connect!");
    } else if (reason === "other") {
        alert("Sure! Please mention your specific reason.");
    } else {
        alert("Sorry, this reason is not recognized.");
    }
}

 
checkReason();
