<?php

namespace App\Http\Controllers\Admin\Partner;

use App\Http\Requests\Admin\Partner\UpdateRequest;
use App\Models\Partner;

class UpdateController extends BaseController {

    public function __invoke(UpdateRequest $request, Partner $partner) {

        $data = $request->validated();
        $this->service->update($data, $partner);

        //return view('admin.partner.index', compact('partner'));
        return redirect()->route('admin.partner.index');
    }

}
