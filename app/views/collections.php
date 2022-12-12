<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Collections</title>
    <link rel="icon" href="./assets/output-onlinepngtools 1.png" type="images/x-icon" />
    <link rel="stylesheet" href="http://localhost:8000/public/css/collections-desktop.css" />
    <link rel="stylesheet" href="http://localhost:8000/public/css/collections-tablette.css" />
    <link rel="stylesheet" href="http://localhost:8000/public/css/desktop.css" />
    <link rel="stylesheet" href="http://localhost:8000/public/css/tablette.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <nav>
        <img src="./assets/output-onlinepngtools 1.png" alt="sinkmnt logo in the navbar" class="logo" />
        <div class="nav-menu">
            <div class="xmark">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <a>Home</a>
            <a>Collections</a>
            <a>Contact us</a>
            <a>Blog</a>
        </div>
        <i class="fa-solid fa-bars"></i>
        <div class="nav-icons">
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </nav>
    <main>
        <h1>Our Products</h1>
        <section class="filters">
            <div class="input category-filter">
                <i class="fa-solid fa-caret-down category"></i>
                <span class="category-list">
                    <p>Lamps</p>
                    <p>Chairs</p>
                    <p>Sofa</p>
                </span>
            </div>
            <div class="input prices-filter">
                <i class="fa-solid fa-caret-down price"></i>
                <span class="prices-list">
                    <p>0-100 usd</p>
                    <p>100-500 usd</p>
                    <p>500-1000 usd</p>
                </span>
            </div>
            <div class="search input">
                <i class="fa fa-search"></i>
            </div>
        </section>
        <section class="items">
            <!--first row-->
            <div class="row-collections">
                <?php
                if (is_array($data["items"]) || is_object($data["items"]))
                    foreach ($data["items"] as $item) {
                ?>
                    <div class="item">
                        <img src="./assets/<?php echo $item->img; ?>" alt="two dark lamps with an artistic deign" />
                        <div class="hovering-info">
                            <p><?php echo $item->nom; ?></p>
                            <p><?php echo $item->prix; ?> usd</p>
                            <div>
                                <i class="fa-solid fa-cart-shopping cart"></i>
                            </div>
                            <div class="more">
                                More
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </section>
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
    <script src="http://localhost:8000/public/js/collections.js" type="text/javascript"></script>
    <script src="http://localhost:8000/public/js/menu.js" type="text/javascript"></script>
</body>

</html>