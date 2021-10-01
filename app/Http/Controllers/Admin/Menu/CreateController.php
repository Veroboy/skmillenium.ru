<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;

class CreateController extends Controller {

    public function __invoke() {

        return view('admin.menu.create');
    }

}
