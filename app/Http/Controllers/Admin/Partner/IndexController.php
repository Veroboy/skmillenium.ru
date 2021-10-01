<?php

namespace App\Http\Controllers\Admin\Partner;

use App\Models\Partner;
use Carbon\Carbon;

class IndexController extends BaseController {

    public function __invoke(Partner $partner) {

        $partners = Partner::all();
        $dateCreate = Carbon::parse($partner->created_at);

        return view('admin.partner.index', compact('partners', 'dateCreate'));
    }

}
