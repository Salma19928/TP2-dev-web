<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire pré-rempli</title>
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
        .info {
    font-size: 18px;
    margin: 10px 0;
    padding: 10px;
    background: #f4f4f4;
    border-radius: 5px;
        }

        h2 {
            color: #333;
        }
        .btn {
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

        .btn:hover {
            background-color: #0056b3;
        }

        
    </style>
</head>
</head>
<body>
<div class="form-container">
    <h2>Vos informations</h2>
    <div class="info">
    <strong>Nom :</strong> <?php echo isset($_POST['nom']) ? $_POST['nom'] : ''; ?>
    </div>

    <div class="info">
        <strong>Prénom :</strong> <?php echo isset($_POST['prenom']) ? $_POST['prenom'] : ''; ?>
    </div>

    <div class="info">
        <strong>Âge :</strong> <?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>
    </div>

    <div class="info">
        <strong>Email :</strong> <?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>
    </div>

    <a href="index.php" class="btn">Retour</a>
</div>

    </div>
</body>
</html>
