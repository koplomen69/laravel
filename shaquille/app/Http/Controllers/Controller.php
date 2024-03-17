<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index() {
        return "This is from Controller";
        }
    public function profile($profileId) {
        return "This is Profile from Controller, profile id: ".$profileId;
    }
}
