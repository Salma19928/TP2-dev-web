<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Informations Personnelles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("https://img.freepik.com/free-photo/business-desk-arrangement-flat-lay_23-2148128268.jpg");
            margin: 0;
        }

        .form-container {
            background: rgb(226, 211, 231);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            text-align: left;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input:focus {
            border-color: #74ebd5;
            outline: none;
            box-shadow: 0px 0px 5px rgba(116, 235, 213, 0.8);
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background 0.3s ease-in-out;
        }

        button:hover {
            background-color: #0056b3;
        }

        #result {
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }

        .error-message {
            color: red;
            font-size: 14px;
            display: none;
        }
    </style>
</head>
<body>
<form action="cible.php" method="post">
    <div class="form-container">
        <h2>Formulaire d'Informations</h2>

        <label for="nom">Nom :</label>
        <input type="text" name= "nom" id="nom" placeholder="Entrez votre nom">
        <p class="error-message" id="error-nom">Veuillez entrer votre nom.</p>

        <label for="prenom">Prénom :</label>
        <input type="text" name= "prenom" id="prenom" placeholder="Entrez votre prénom">
        <p class="error-message" id="error-prenom">Veuillez entrer votre prénom.</p>

        <label for="age">Âge :</label>
        <input type="number" name= "age" id="age" placeholder="Entrez votre âge">
        <p class="error-message" id="error-age">Veuillez entrer un âge valide.</p>

        <label for="email">Email :</label>
        <input type="email" name= "email" id="email" placeholder="Entrez votre email">
        <p class="error-message" id="error-email">Veuillez entrer un email valide.</p>

        <button onclick="afficherInfos()">Valider</button>

        <p id="result"></p>
       
        
    </div>
    </form>
    <script>
        function afficherInfos() {
            let nom = document.getElementById("nom").value.trim();
            let prenom = document.getElementById("prenom").value.trim();
            let age = document.getElementById("age").value.trim();
            let email = document.getElementById("email").value.trim();
            let valid = true;

            // Réinitialisation des messages d'erreur
            document.querySelectorAll(".error-message").forEach(e => e.style.display = "none");

            if (nom === "") {
                document.getElementById("error-nom").style.display = "block";
                valid = false;
            }
            if (prenom === "") {
                document.getElementById("error-prenom").style.display = "block";
                valid = false;
            }
            if (age === "" || isNaN(age) || age <= 0 || age >=100) {
                document.getElementById("error-age").style.display = "block";
                valid = false;
            }
            if (email === "" || !email.includes("@")) {
                document.getElementById("error-email").style.display = "block";
                valid = false;
            }

            if (!valid) return;

            // Affichage des informations saisies
            document.getElementById("result").innerHTML = 
                `👤 Nom : ${nom} <br> 
                 🏷️ Prénom : ${prenom} <br> 
                 🎂 Âge : ${age} ans <br> 
                 📧 Email : ${email}`;
        }
       
    </script>

</body>
</html>
