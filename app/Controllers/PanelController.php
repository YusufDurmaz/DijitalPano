<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PanelController extends BaseController
{
    public function index()
    {
        $configModel = new \App\Models\AppConfigModel();
        $config = $configModel->getConfigValues();
        return view("panel/index.php");
    }
}
