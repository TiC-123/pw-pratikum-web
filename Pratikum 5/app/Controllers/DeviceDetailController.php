<?php

namespace App\Controllers;

use App\Models\DeviceDetail;

class DeviceDetailController extends BaseController
{
    protected $deviceModel;

    public function __construct() {
        $this->deviceModel = new DeviceDetail();
    }

    public function index($id) {
        $device = $this->deviceModel->find($id);
        $data = [
            'title' => 'DeviceDetail | Pratikum 5',
            'device' => $device,
        ];

        return view('DeviceDetail', $data);
    }

    public function change($id, $condition) {
        $this->deviceModel->query(
            "UPDATE device 
            SET device_status = $condition
            WHERE id = $id"
        );

        $device = $this->deviceModel->find($id);
        $data = [
            'title' => 'DeviceDetail | Pratikum 5 ~ Update',
            'device' => $device,
        ];

        return view('DeviceDetail', $data);
    }
}

?>