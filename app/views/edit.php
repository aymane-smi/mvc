<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="./assets/output-onlinepngtools 1.png" type="images/x-icon" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="http://localhost:8000/public/css/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav>
        <a href="/Dashboard" class="home">
            Sink<span class="mkt">Mkt</span>
        </a>
        <form action="POST" method="http://localhost:8000/Login/logout" style="display: flex; flex-direction: row; gap: 10px;">
            <button class="btn btn-sm btn-primary">logout</button>
        </form>
    </nav>
    <div class="jumbotron edit-container">
        <form method="post" action="http://localhost:8000/Dashboard/add" enctype="multipart/form-data">
            <img src="http://localhost:8000/public/assets/<?php echo $data->img; ?>" alt="item image" class="edit-image" />
            <div class="label">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="<?php echo $data->nom; ?>" />
            </div>
            <div class="label">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" value="<?php echo $data->prix; ?>" />
            </div>
            <div class="label">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" />
            </div>
            <button class="btn btn-md btn-success">add</button>

        </form>
    </div>
</body>

</html>