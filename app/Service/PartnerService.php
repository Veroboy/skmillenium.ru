<?php

namespace App\Service;

use App\Models\Partner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PartnerService {

   public function store($data) {

      try {
         Db::beginTransaction();
         $data['partner_image'] = Storage::disk('public')->put('/images', $data['partner_image']);

          Partner::firstOrCreate($data);
         Db::commit();
      } catch(\Exception $exception) {
         Db::rollBack();
         abort(404);
      }
   }
   public function update($data, $partner) {

      try {
         Db::beginTransaction();

         if(isset($data['partner_image'])) {
            $data['partner_image'] = Storage::disk('public')->put('/images', $data['partner_image']);
             Partner::firstOrCreate($data);
         }
          $partner->update($data);
         Db::commit();
      } catch(\Exception $exception) {
         Db::rollBack();
         abort(500);
      }

      return $partner;
   }
}
