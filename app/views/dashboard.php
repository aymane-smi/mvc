<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="./assets/output-onlinepngtools 1.png" type="images/x-icon" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="http://localhost:8000/public/css/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="model">
        <form method="post" action="http://localhost:8000/Dashboard/add" enctype="multipart/form-data">
            <div class="label">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" />
            </div>
            <div class="label">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" />
            </div>
            <div class="label">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" />
            </div>
            <div>
                <button class="btn btn-md btn-success">add</button>
                <div class="btn btn-md btn-danger close">close</div>
            </div>

        </form>
    </div>
    <nav>
        <p>
            Sink<span class="mkt">Mkt</span>
        </p>
        <form action="POST" method="http://localhost:8000/Login/logout" style="display: flex; flex-direction: row; gap: 10px;">
            <p class="btn btn-sm btn-success add">add item
            <p>
                <button class="btn btn-sm btn-primary">logout</button>
        </form>
    </nav>
    <div class="items">
        <?php
        if (is_array($data["items"]) || is_object($data["items"]))
            foreach ($data["items"] as $item) {
        ?>
            <div class="item">
                <img src="http://localhost:8000/public/assets/<?php echo $item->img; ?>" alt="image" />
                <div class="info-action">
                    <p><?php echo $item->nom; ?></p>
                    <p><?php echo $item->prix; ?> USD</p>
                    <form action="/Dashboard/delete/<?php echo $item->id; ?>" method="POST">
                        <a href="/Dashboard/edit/<?php echo $item->id; ?>" class="btn btn-sm btn-warning">edit</a>
                        <button class="btn btn-sm btn-danger">delete</button>
                    </form>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
</body>
<script src="http://localhost:8000/public/js/add.js" type="text/javascript"></script>

</html>