<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Home</title>
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
        <h1>Welcome to the POS System</h1>
        <p>This is a basic Point-of-Sale system made with CodeIgniter 4.</p>
        <p>Use the links above to view the About page, customer accounts, and user accounts.</p>
    </main>
</body>
</html>
