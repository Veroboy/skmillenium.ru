<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;

class DeleteController extends Controller {

    public function __invoke(Menu $menu) {

        $menu->delete();
        return redirect()->route('admin.menu.index');
    }

}
