<?php
    require 'function.php';

    if(isset($_POST["submit"])){
        if($_POST["name"] != "" && $_POST["email"] != "" && $_POST["address"] != "" && $_POST["gender"] != "" && $_POST["position"] != "" && $_POST["status"] != "") {
            if(add($_POST) > 0) {
                echo "
                    <script>
                        alert('New employee successfully added');
                        document.location.href = 'add_view.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('ERROR - 001: can't add new employee, please try again!');
                        document.location.href = 'add_view.php';
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                    alert('Please fill all the data');
                    document.location.href = 'add_view.php';
                </script>
            ";
        }
    }
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

    <section>
    <h1>Add Employee</h1>
    <form action="" method="post">
        <label for="name">Name</label></br>
        <input type="text" name="name"></br>

        <label for="email">Email</label></br>
        <input type="text" name="email"></br>

        <label for="address">Address</label></br>
        <input type="text" name="address"></br>

        <label for="gender">Gender</label></br>
        <select name="gender">
                <option value="" disable selected hidden>Choose Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
        </select></br>

        <label for="position">Position</label></br>
        <input type="text" name="position"></br>

        <label for="status">Status</label></br>
        <select name="status">
                <option value="" disable selected hidden>Choose Status</option>
                <option value="Fulltime">Fulltime</option>
                <option value="Parttime">Parttime</option>
        </select></br></br>

        <button class="submit" type="submit" name="submit">Submit</button>
        </ul>
    </form>
    </section>

	<footer>
			<p style="text-align: center;">&copy; Timothy Christyan _ 105219045 _ CS-2019.</p>
            <p style="text-align: center;">Assignment 9 for pratical training web programming.</p>
	</footer>
</body>
</html>