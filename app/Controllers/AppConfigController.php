<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AppConfigController extends BaseController
{
    public function index()
    {
        $configModel = new \App\Models\AppConfigModel();
        $config = $configModel->getConfigValues();
        $title = lang("App.settings");
        $data = [
            "config" => $config,
            "title" => $title,
        ];
        return view("dashboard/app_config.php", $data);
    }
}
