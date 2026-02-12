<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PreviewController extends BaseController
{
    public function index(): string
    {
        $configModel = new \App\Models\AppConfigModel();
        $title = lang("App.preview");

        $data = [
            "title" => $title,
        ];

        return view("dashboard/preview", $data);
    }
}
