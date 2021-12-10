<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
    <div class="device">
        <h1 class="name">
            <?php echo $device['id'].') '.$device['device_name']; ?>
        </h1>
        <img class="image" src= "/images/<?= $device['device_image']; ?>" alt="" width="100%" />
        <p class="detail"> 
            id&emsp;&emsp;&nbsp;&ensp; : <?php echo $device['device_id']; ?> <br>
            Brand&emsp;&nbsp;: <?php echo $device['device_brand']; ?> <br>
            Type&emsp;&ensp; : <?php echo $device['type']; ?> <br>
            Origin&ensp;&ensp; : <?php echo $device['device_origin']; ?> <br>
            Quantity : <?php echo $device['device_quantity']; ?> <br>
            defect&emsp;&nbsp;: 
                <?php if($device['device_defect'] == 1) {
                        echo 'there is a defect';
                    } else {
                        echo 'no defect'; 
                    }?> <br>
            Status&emsp;&nbsp;: 
                <?php if($device['device_status'] == 1) {
                        $temp = 0;
                        echo 'on';
                    } else {
                        $temp = 1;
                        echo 'off'; 
                    }?>
                &emsp; 
                <button onclick="location.href='<?= base_url('/DeviceDetailController/Change/'.$device['id'].'/'.$temp);  ?>'; " > 
                    Change
                </button> <br>
        </p>
    </div>
<?= $this->endSection('content'); ?>