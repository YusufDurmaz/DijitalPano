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

        $locale = service("request")->getLocale();
        $jsLocale = $locale === "tr" ? "tr-TR" : "en-US";

        $data = [
            "js_locale" => $jsLocale,
        ];

        return view("panel/index.php", $data);
    }
}
