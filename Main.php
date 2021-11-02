<?php 
    require_once 'Fulltime.php'; 
    require_once 'Parttime.php';
    
    //data input disimpan dalam array
    $pegawai = array();
    $nama_arr = [ "Farrel", "Hinako", "Gunter", "Finn", "Yith", "Anna" ]; //Diambil dari karakter fiksi
    $kelamin_arr = [ "male", "female", "male", "male", "female", "female" ];
    $tempatLahir_arr = [ "Indonesia", "Japan", "German", "USA", "Egypt", "Russia" ];
    $tanggalLahir_arr = [ "13-04-2000", "22-06-2000", "30-01-2005", "07-07-1997", "19-11-1368", "25-07-1999" ];

    //Memasukkan semua data pada array kedalam array object pegawai
    for( $i = 0; $i < count( $nama_arr ); $i++ ) {
        if( $i % 2 == 0 )
            $pegawai[$i] = new Fulltime( $nama_arr[$i], $kelamin_arr[$i], $tempatLahir_arr[$i], $tanggalLahir_arr[$i] );
        else
            $pegawai[$i] = new Parttime( $nama_arr[$i], $kelamin_arr[$i], $tempatLahir_arr[$i], $tanggalLahir_arr[$i] );

        $pegawai[$i]->setStatus();

        switch( $i ) {
            case 0:
                $pegawai[$i]->setLevelKaryawan( "Junior" );
                break;
            case 1:
                $pegawai[$i]->setLevelKaryawan( "Junior" );
                break;
            case 2:
                $pegawai[$i]->setLevelKaryawan( "Amateur" );
                break;
            case 3:
                $pegawai[$i]->setLevelKaryawan( "Amateur" );
                break;
            case 4:
                $pegawai[$i]->setLevelKaryawan( "Senior" );
                break;    
            case 5:
                $pegawai[$i]->setLevelKaryawan( "Senior" );
                break;    
        }

        $pegawai[$i]->hitungGaji();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 Praktikum Pemrograman Web</title>
    <link rel="stylesheet" href="settings.css">
    <h1> Data List Karyawan </h1>
</head>

<!-- tombol untuk filter penampilan data -->
<nav>
    <form action="Main.php" method="post">
        <button class="button1" name="button" type="submit" value="All">ALL</button>
        <button class="button2" name="button" type="submit" value="Fulltime">Full Time</button>
        <button class="button3" name="button" type="submit" value="Parttime">Part Time</button>
    </form>
</nav>

<body>
    <table class = "data-karyawan">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Level Karyawan</th>
            <th>Status</th>
            <th>Gaji Karyawan</th>
        </tr>

        <!-- Ambil data dari array object pegawai dan tampilkan pada web dengan html --> 
        <?php
            if( isset( $_POST['button'] ) ) {
                $input = $_POST["button"];

                for( $i = 0; $i < count( $nama_arr ); $i++ ) { 
                    if( $pegawai[$i]->getStatus() == $input || $input == "All" ) { ?>
                        <tr>
                            <td> <?php echo $i + 1 ?> </td>
                            <td> <?php echo $pegawai[$i]->getNama() ?> </td>
                            <td> <?php echo $pegawai[$i]->getTempatLahir() . "<br>" . $pegawai[$i]->getTanggalLahir() ?> </td>
                            <td> <?php echo $pegawai[$i]->getKelamin() ?> </td>
                            <td> <?php echo $pegawai[$i]->getLevelKaryawan() ?> </td>
                            <td> <?php echo $pegawai[$i]->getStatus() ?> </td>
                            <td> <?php echo $pegawai[$i]->getGaji() ?> </td>
                        </tr>
                <?php }
                } 
            } ?>
    </table>
</body>

</html>