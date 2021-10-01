<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;

class IndexController extends Controller {

    public function __invoke() {

        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

}
