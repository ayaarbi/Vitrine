function test(){
    var pseudo= document.getElementById("pseudo");
    var mdp=document.getElementById("mdp");
    var nom= document.getElementById("nom");
    var prenom=document.getElementById("prenom");
    var email=document.getElementById("email");
    var genre=document.getElementById("genre");
    var ville=document.getElementById("ville");
    var postal=document.getElementById("postal");

    const pseudoRegex=/^[A-Z][A-Za-z0-9-_]*$/;
    if (!pseudoRegex.test(pseudo)) {
        alert("Le pseudo doit commencer par une lettre majuscule suivie de lettres, chiffres, ou bien les caractères - _ .");
        return false;
    }
    const nomRegex = /^[A-Z][a-z]+$/;
    if (!nomRegex.test(nom)) {
        alert("Le nom doit commencer par une majuscule, suivi de lettres minuscules.");
        return false;
    }
    if (!nomRegex.test(prenom)) {
        alert("Le prenom doit commencer par une majuscule, suivi de lettres minuscules.");
        return false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("L'adresse e-mail doit comporter un caractère @ et un point.");
        return false;
    }

    const postalRegex=/^\d{4}$/;
    if(!postalRegex.test(postal)){
        alert("Le code postal doit contenir exactement 4 chiffres.");
        return false;
    }
}