<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Accounts</title>
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
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #cccccc;
        }
        h1 {
            color: #244b8a;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #999999;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #dce6f5;
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
        <h1>Customer Accounts</h1>
        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
