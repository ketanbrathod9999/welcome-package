<?php

namespace KBR\Welcome\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller {

    public function index() {
        return view("welcome::welcome_view");
    }
}