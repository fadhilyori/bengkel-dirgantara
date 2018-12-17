<?php

namespace App\Http\Resources;

use App\Job;
use Illuminate\Http\Resources\Json\Resource;

class JobsResource extends Resource
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
            'bill_of_service' => $this->bill_of_service,
            'do_job' => Job::find($this->do_job_id),
            'total_price' => $this->total_prize,
            'keluhan' => $this->keluhan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
