<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;

class EditController extends Controller {

    public function __invoke(Menu $menu) {

        return view('admin.menu.edit', compact('menu'));
    }

}
