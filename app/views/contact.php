<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Collections</title>
    <link rel="icon" href="./assets/output-onlinepngtools 1.png" type="images/x-icon" />
    <link rel="stylesheet" href="http://localhost:8000/public/css/contact-desktop.css" />
    <link rel="stylesheet" href="http://localhost:8000/public/css/desktop.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <nav>
        <img src="./assets/output-onlinepngtools 1.png" alt="sinkmnt logo in the navbar" class="logo" />
        <div class="nav-menu">
            <a>Home</a>
            <a>Collections</a>
            <a>Contact us</a>
            <a>Blog</a>
        </div>
        <div class="nav-icons">
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </nav>
    <main>
        <h1>For more info please contact us</h1>
        <form>
            <div class="name">
                <div class="firstname">
                    <label for="firstname">First name:</label>
                    <input type="text" fname="fname" id="firstname" />
                </div>
                <div class="lastname">
                    <label for="lastname">First name:</label>
                    <input type="text" fname="fname" id="lastname" />
                </div>
            </div>
            <div class="email">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" />
            </div>
            <div class="message">
                <label for="message">Message:</label>
                <textarea name="message" id="message"></textarea>
            </div>

            <button class="more">Submit</button>
        </form>
    </main>
    <footer>
        <div class="container-logo">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <p>
                <span id="sink">Sink</span>
                <span id="copyright">©</span>
                <span id="mnt">Mnt</span>
            </p>
            <i class="fa-brands fa-linkedin-in"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
    </footer>
</body>

</html>