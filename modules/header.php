<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESP32 Web Server</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../styles.css"> -->
    <link rel="stylesheet" href="styles.css">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .main-content-wrapper {
            flex: 1 0 auto;
        }

        footer {
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0388b3;">
        <div class="container-fluid">
            <button
                class="navbar-toggler order-lg-2"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mx-auto" href="./">
                    <img src="./images/logoBK.png" alt="logo" width="40" height="40" class="d-inline-block align-text-center">
            </a>
            <form class="d-flex order-lg-1">
                <div class="dropdown">
                    <a class="btn dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="login.php">Log in</a></li>
                        <li><a class="dropdown-item" onclick="logout();">Log out</a></li>
                    </ul>
                </div>
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-auto">
                        <a class="nav-link active fs-5 text-white" aria-current="page" href="./">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content-wrapper">
