<?php

namespace App\Http\Controllers\Admin\Partner;

use App\Http\Requests\Admin\Partner\StoreRequest;

class StoreController extends BaseController {

    public function __invoke(StoreRequest $request) {

        $data = $request->validated();
        $this->service->store($data);


        return redirect()->route('admin.partner.index');
    }

}
