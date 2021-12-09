<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
	<section class="d-flex" style="margin: 50px auto 100px auto">
        <div class="">
            <p style="font-size: 80px; font-weight: bold; line-height: 77px; color: #19191B; margin: 50px auto 30px auto">
                Easy way to Monitoring IoT 
            </p>
            <p
                style="font-size: 20px; font-weight: 600; line-height: 30px; color: #696871; font-family: 'Mulish', sans-serif; width:85%; margin-bottom: 50px">
                This website provide a simple and effective way to monitoring and see the detail of all IoT device in the office. 
            </p>
            <a class="btn color" href="<?= base_url('/DeviceController/Index'); ?>">Start Now</a>
        </div>
    </section>
<?= $this->endSection('content'); ?>