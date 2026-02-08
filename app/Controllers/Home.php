<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $configModel = new \App\Models\AppConfig();
        $data = $configModel->getConfigValues(["school_name"]);
        return view("dashboard/index", $data);
    }
}
