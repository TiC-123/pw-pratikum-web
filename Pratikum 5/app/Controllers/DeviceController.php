<?php

namespace App\Controllers;

use App\Models\Devices;

class DeviceController extends BaseController
{
    protected $deviceModel;

    public function __construct() {
        $this->deviceModel = new Devices();
    }

    public function index() {
        $device = $this->deviceModel->findAll();
        $data = [
            'title' => 'Device | Pratikum 5',
            'device' => $device
        ];

        return view('Device', $data);
    }
}

?>