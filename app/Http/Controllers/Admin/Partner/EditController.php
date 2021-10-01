<?php

namespace App\Http\Controllers\Admin\Partner;

use App\Models\Partner;

class EditController extends BaseController {

    public function __invoke(Partner $partner) {

        return view('admin.partner.edit', compact('partner'));
    }

}
