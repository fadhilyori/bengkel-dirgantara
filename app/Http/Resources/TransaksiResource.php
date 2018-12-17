<?php

namespace App\Http\Resources;

use App\Customer;
use App\Jobs;
use App\Kendaraan;
use Illuminate\Http\Resources\Json\Resource;

class TransaksiResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'total_price' => $this->total_prize,
            'discount' => $this->discount,
            'tax' => $this->tax,
            'bill_of_service' => $this->bill_if_service,
            'date' => $this->date,
            'customer' => Customer::find($this->customer_id),
            'jobs' => Jobs::find($this->jobs_id),
            'kendaraan' => Kendaraan::find($this->kendaraan_id),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
