<?php

namespace App\Http\Controllers\Admin\Partner;

use App\Http\Controllers\Controller;
use App\Service\PartnerService;

class BaseController extends Controller {

    public $service;

    public function __construct(PartnerService $service) {
        $this->service = $service;
    }

}
