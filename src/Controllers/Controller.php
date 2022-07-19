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
       /*  if (isset($_GET["action"]) && $_GET["action"] === "about") {
            $this->about();
            return;
        }
        if (isset($_GET["action"]) && $_GET["action"] === "create") {
            $this->create();
            return;
        } */
        /* if (isset($_GET["action"]) && $_GET["action"] === "store") {
            $this->store();
            return;
        } */
       /*  if (isset($_GET["action"]) && $_GET["action"] === "delete") {
            $id = $_GET['id']
            $this->destroy($id);
            return;
        } */

        if (isset($_GET["action"]) && $_GET["action"] == "new") {
            $this->new();
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

    public function new()
    {
        new View('new');
    }
}

