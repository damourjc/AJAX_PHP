const attackBtn = document.getElementById("attackBtn");

const monsterHP = document.getElementById("monsterHP");

const historique = document.getElementById("historique");

const message = document.getElementById("message");

attackBtn.addEventListener("click", () => {

    fetch("attack.php")

    .then(response => response.json())

    .then(data => {

        // Mettre à jour les PV
        monsterHP.textContent = data.monsterHP;

        // Afficher message spécial
        message.innerHTML = data.message;

        // Ajouter historique
        historique.innerHTML += `

            <div class="log">

                ⚔️ Vous infligez
                <strong>${data.damage}</strong>
                dégâts.

                ${data.message}

            </div>

        `;

        // Si victoire
        if(data.victory){

            attackBtn.disabled = true;

            message.innerHTML = `
                <div class="victory">
                    🏆 Le monstre est vaincu !
                </div>
            `;
        }

    });

});