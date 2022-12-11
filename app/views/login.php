<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Authentifier</title>

    <link rel="stylesheet" href="http://localhost:8000/public/css/login.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link rel="icon" type="images/x-icon" href="http://localhost:8000/public/assets/output-onlinepngtools 1.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>

    <main>
        <section class="jumbotron login">
            <form action="/Login/authenticated" method="POST">
                <!-- <img src="./assets/output-onlinepngtools 1.png" alt="youcode logo" class="logo-login" /> -->
                <p class="login-sink">Sink<span class="mkt">Mkt</span></p>
                <div class="label">
                    <label for="username">username:</label>
                    <input name="username" id="email" type="text" required />
                </div>
                <div class="label">
                    <label for="mdp">Mot de passe:</label>
                    <input id="mdp" name="mdp" type="password" required />
                </div>
                <?php
                if (isset($_GET['error'])) {
                    echo '<p class="text-danger">Mot de passe/Email est invalide !!!</p>';
                }
                if ($_SESSION["login_error"])
                    echo "<p class='text-danger'>{$_SESSION['login_error']}</p>";
                else
                    echo "error";
                ?>

                <button class="btn btn-sm btn-success">Authentifier</button>
            </form>
        </section>
    </main>

</body>

</html>