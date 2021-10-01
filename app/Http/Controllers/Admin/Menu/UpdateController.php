<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Menu\UpdateRequest;
use App\Models\Menu;

class UpdateController extends Controller {

    public function __invoke(UpdateRequest $request, Menu $menu) {

        $data = $request->validated();
        $menu->update($data);
        return view('admin.category.show', compact('menu'));
    }

}
