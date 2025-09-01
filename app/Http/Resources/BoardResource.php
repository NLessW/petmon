<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BoardResource extends JsonResource
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
            'type' => $this->type,
            'cid' => $this->category_id,
            'type_label' => config('site.community')[$this->type],
            'name' => $this->type === 'private' ? $this->name : config('app.name'),
            'title' => $this->title,
            'title_limit' => Str::limit($this->title, 50),
            'image_url' => $this->image_url,
            'reg_date' => $this->created_at->format('Y-m-d'),
            'content' => $this->when($request->routeIs('community.show'), nl2br($this->content)),
        ];
    }
}
