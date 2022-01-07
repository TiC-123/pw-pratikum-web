<?php
    require 'function.php';

    $karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="settings.css">
    <title>Pratikum 5 JSON</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <header>
        <div class="menu">
            <ul>
                <li class="logo">
                    <img height="44" title="Web Monitoring Logo" alt="Web Monitoring Logo!"
                        src="https://3.bp.blogspot.com/-HHUdGYrwK6o/V7CHYo6E9LI/AAAAAAAAEk0/iuagxHwj-vIYUNcOMrTqVTv4wUU0GdTPQCLcB/s1600/Logo-Up.png"
                    />
                </li>
                <li class="title">
                    Office UP
                </li>
                <li class="menu-item hidden">Employee Data:</li>
                <li class="menu-item hidden">
                    <a href="index.php">See</a>
                </li>
                <li class="menu-item hidden">
                    <a href="add_view.php">Add</a>
                </li>
            </ul>
        </div>
    </header>

    <h1 class="h1">Employee Data</h1>

    <a class="add" href="add_view.php">Add Data</a>
    
    <table class = "data-karyawan">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php foreach($karyawan as $temp) : ?>
        <tr>
            <td><?= $temp["id"] ?></td>
            <td><?= $temp["name"] ?></td>
            <td><?= $temp["email"] ?></td>
            <td><?= $temp["address"] ?></td>
            <td><?= $temp["gender"] ?></td>
            <td><?= $temp["position"] ?></td>
            <td><?= $temp["status"] ?></td>
            <td><a class="delete" href="delete_func.php?id=<?= $temp["id"]; ?>" onclick="return confirm('Confirmation, this data will be deleted. Are you sure?')">Delete</a></td>
        </tr>
        <?php endforeach ?>

    </table>

	<footer>
			<p style="text-align: center;">&copy; Timothy Christyan _ 105219045 _ CS-2019.</p>
            <p style="text-align: center;">Assignment 9 for pratical training web programming.</p>
	</footer>
</body>
</html>