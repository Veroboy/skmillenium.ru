<?php

namespace App\Http\Controllers\Admin\Partner;

use App\Models\Partner;

class ShowController extends BaseController {

    public function __invoke(Partner $partner) {

        return view('admin.partner.show', compact('partner'));
    }

}
