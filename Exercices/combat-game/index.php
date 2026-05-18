<?php
session_start();

// Initialiser les PV du monstre
if(!isset($_SESSION["monsterHP"])){

    $_SESSION["monsterHP"] = 100;

}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Mini Combat AJAX</title>

    <style>

        body{
            font-family: Arial;
            text-align: center;
            background: #222;
            color: white;
            margin-top: 40px;
        }

        #monsterBox{

            width: 350px;
            margin: auto;

            background: #333;

            padding: 20px;

            border-radius: 15px;
        }

        button{

            padding: 12px 25px;

            font-size: 18px;

            border: none;

            border-radius: 10px;

            cursor: pointer;

            background: crimson;

            color: white;
        }

        #historique{

            width: 500px;

            margin: 30px auto;

            text-align: left;
        }

        .log{

            background: #444;

            margin-bottom: 10px;

            padding: 10px;

            border-radius: 10px;
        }

        .critical{
            color: gold;
            font-weight: bold;
        }

        .victory{

            color: lime;

            font-size: 24px;

            margin-top: 20px;
        }

    </style>

</head>

<body>

    <h1>⚔️ Combat contre le Monstre ⚔️</h1>

    <div id="monsterBox">

        <h2 id="monsterName">
            Dragon Noir
        </h2>

        <p>
            ❤️ PV :
            <span id="monsterHP">
                <?php echo $_SESSION["monsterHP"]; ?>
            </span>
        </p>

        <button id="attackBtn">
            Attaquer
        </button>

        <div id="message"></div>

    </div>

    <h2>Historique du combat</h2>

    <div id="historique"></div>

    <script src="script.js"></script>

</body>
</html>