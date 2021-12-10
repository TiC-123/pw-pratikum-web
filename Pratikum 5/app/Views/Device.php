<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
    <h1 style="text-align:center; font-size: 70px;"> IoT Item List </h1>    

    <table class = "table-class">
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>
        <?php foreach($device as $item): ?>
            <tr>
                <td><?= $item['id']; ?></td>
                <td>
                    <img src= "/images/<?= $item['device_image']; ?>" alt="" width='150px'>
                </td>
                <td><?= $item['device_name']; ?></td>
                <td><?= $item['device_brand']; ?></td>
                <td><?= $item['device_quantity']; ?></td>
                <td>
                    <?php if($item['device_status'] == 1) {
                            echo 'on';
                        } else {
                            echo 'off'; 
                        }?>
                </td>
                <td> 
                    <button onclick="location.href='<?= base_url('/DeviceDetailController/Index/'.$item['id']);  ?>'; " > 
                        Detail 
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    
<?= $this->endSection('content'); ?>