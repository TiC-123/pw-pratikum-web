<?php
    require 'function.php';

    $id = $_GET["id"];

    if(delete($id) > 0) {
        echo "
            <script>
                alert('Employee data successfully deleted');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('ERROR - 002: can't delete employee data, please try again!');
                document.location.href = 'index.php';
            </script>
        ";
    }
?>