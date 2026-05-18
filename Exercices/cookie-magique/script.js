const bouton = document.getElementById("btnCookie");

const resultat = document.getElementById("resultat");

const historique = document.getElementById("historique");

const compteur = document.getElementById("compteur");

let totalCookies = 0;

bouton.addEventListener("click", () => {

    fetch("generate_cookie.php")

    .then(response => response.json())

    .then(data => {

        // Augmenter le compteur
        totalCookies++;

        compteur.innerHTML = `
            Cookies fabriqués : ${totalCookies}
        `;

        // Classe CSS selon la rareté
        let classeRarete = "";

        if(data.rarete === "Common"){
            classeRarete = "common";
        }

        else if(data.rarete === "Rare"){
            classeRarete = "rare";
        }

        else if(data.rarete === "Epic"){
            classeRarete = "epic";
        }

        else if(data.rarete === "Legendary"){
            classeRarete = "legendary";
        }

        // Affichage principal
        resultat.innerHTML = `
            <h2>${data.cookie}</h2>

            <p class="${classeRarete}">
                Rareté : ${data.rarete}
            </p>

            <p>
                Points : ${data.points}
            </p>
        `;

        // Ajouter dans l'historique
        historique.innerHTML += `

            <div class="itemHistorique">

                🍪 ${data.cookie}
                -
                <span class="${classeRarete}">
                    ${data.rarete}
                </span>
                -
                ${data.points} points

            </div>

        `;

    });

});