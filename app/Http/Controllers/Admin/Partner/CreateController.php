<?php

namespace App\Http\Controllers\Admin\Partner;


class CreateController extends BaseController {

    public function __invoke() {

        return view('admin.partner.create');
    }

}
