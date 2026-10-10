<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #eeeeee;
        }
        nav {
            background-color: #244b8a;
            padding: 15px;
        }
        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }
        main {
            background-color: white;
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #cccccc;
        }
        h1 {
            color: #244b8a;
        }
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customer Accounts</a>
        <a href="<?= site_url('users') ?>">User Accounts</a>
    </nav>

    <main>
        <h1>About This POS System</h1>
        <p>This project is a simple Point-of-Sale website built to practice CodeIgniter routes, controllers, and views.</p>
        <p>The customer and staff examples are stored in PHP arrays for now. The application does not use a database.</p>
    </main>
</body>
</html>
