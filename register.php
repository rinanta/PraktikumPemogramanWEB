<?php
require 'function.php';

if (isset($_POST["register"])) {
    $message = register($_POST);

    if($message === "Register Berhasil")
    {
        echo "
            <script>
                alert('" . addslashes ($message) . "');
                document.location.href='login.php';
            </script>
        ";
    }
    else
    {
       echo "
            <script>
                alert('" . addslashes ($message) . "');
                document.location.href='register.php';
            </script>
        "; 
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER | INFORMATIKA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f0e6;
            color: #4d3e33;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #fff3e0;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
            color: #5c4438;
        }

        .form-container {
            max-width: 600px;
            background-color: #fffdf9;
            margin: 30px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        form label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            color: #5c4438;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"],
        form input[type="number"],
        form input[type="date"],
        form input[type="color"],
        form input[type="file"],
        form select,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #d2bfa5;
            border-radius: 6px;
            background-color: #fefaf6;
        }

        form textarea {
            resize: vertical;
            height: 80px;
        }

        .radio-group,
        .checkbox-group {
            margin-top: 10px;
        }

        .radio-group label,
        .checkbox-group label {
            font-weight: normal;
            margin-right: 15px;
        }

        form input[type="submit"] {
            margin-top: 25px;
            padding: 12px 20px;
            background-color: #a47e5b;
            border: none;
            color: white;
            font-size: 1em;
            border-radius: 6px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #8b5e3c;
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #e8d6c1;
            color: #6e4c37;
            font-size: 0.9em;
            margin-top: 40px;
        }

        .inline-group {
            display: flex;
            gap: 15px;
            margin-top: 10px;
            flex-wrap: wrap;
        }

        .inline-group label {
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: normal;
        }

    </style>
</head>
<body style="padding: 0 400px;">

    <header>
        <h1>REGISTRASI</h1>
    </header>
    <div class="card" >
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password1" name="password1">
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password2" name="password2">
            </div>
            <button type="submit" name="register" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>