// Récupération du bouton
const bouton = document.getElementById("btnCookie");

// Récupération de la zone résultat
const resultat = document.getElementById("resultat");

// Quand on clique
bouton.addEventListener("click", () => {

    // Requête AJAX
    fetch("generate_cookie.php")

        // Conversion JSON
        .then(response => response.json())

        // Données reçues
        .then(data => {

            resultat.innerHTML = `
                <h2>${data.cookie}</h2>
                <p>Rareté : ${data.rarete}</p>
                <p>Points : ${data.points}</p>
            `;

        });

});