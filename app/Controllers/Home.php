<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $configModel = new \App\Models\AppConfigModel();
        $title = lang("App.dashboard");

        $data = [
            "title" => $title,
        ];

        return view("dashboard/index", $data);
    }
}
