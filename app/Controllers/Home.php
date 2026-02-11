<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $configModel = new \App\Models\AppConfigModel();
        $schoolName = $configModel->getConfigValues(["school_name"]);
        $title = lang("App.dashboard");

        $data = [
            "school_name" => $schoolName,
            "title" => $title,
        ];

        return view("dashboard/index", $data);
    }
}
