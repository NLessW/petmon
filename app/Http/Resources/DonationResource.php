<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DonationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'type' => config('site.donation.type.' . $this->type),
            'pay_method' => config('site.donation.pay_method.' . $this->pay_method),
            'donation' => number_format($this->donation),
            'status' => config('site.donation.status.' . $this->checked),
            'checked' => $this->checked,
            'reg_date' => $this->created_at->format('Y-m-d H:i'),
        ];
    }
}
