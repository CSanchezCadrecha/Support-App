<?php

namespace App\Controllers;

use App\Core\View;

class Controller
{

    public function __construct()
    {
        if (isset($_GET["action"]) && $_GET["action"] == "edit") {
            $this->edit();
            return;
        }

        $this->index();
    }

    public function index()
    {
        $data = [
            "name" => "giacomo",
        ];

        new View('home', $data);
    }

    public function edit()
    {
        new View('edit');
    }
}
