<?php
    $connection = mysqli_connect("localhost", "root", "", "pratikum_9");
    $increment = 0;

    function query($query) {
        global $connection;

        $data = mysqli_query($connection, $query);
        $karyawan = [];

        while( $temp = mysqli_fetch_assoc($data) ) {
            $karyawan[] = $temp;
        }

        return $karyawan;
    }

    function add($data){
        global $connection;

        $name = $data["name"];
        $email = $data["email"];
        $address = $data["address"];
        $gender = $data["gender"];
        $position = $data["position"];
        $status = $data["status"];

        $query = "INSERT INTO karyawan VALUES ('', '$name', '$email', '$address', '$gender', '$position', '$status')";
        
        mysqli_query($connection, $query);
        
        return mysqli_affected_rows($connection);
    }

    function delete($id){
        global $connection;
        
        mysqli_query($connection, "DELETE FROM karyawan WHERE id = $id");

        return mysqli_affected_rows($connection);
    }
?>