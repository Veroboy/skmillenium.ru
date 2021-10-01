<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Menu\StoreRequest;
use App\Models\Menu;

class StoreController extends Controller {

    public function __invoke(StoreRequest $request) {

        $data = $request->validated();
        Menu::firstOrCreate($data);

        return redirect()->route('admin.menu.index');
    }

}
