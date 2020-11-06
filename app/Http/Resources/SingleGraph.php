<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use stdClass;

class SingleGraph extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'nodes' => $this->nodes->map(function($item){
                $tmp = new stdClass;
                $tmp->id = $item->id;
                $tmp->relation = [
                    "parents" => $item->parents->map(function($item1){
                        return $item1->parent_id;
                    }) ,
                    "childs" => $item->childs->map(function($item1){
                        return $item1->child_id;
                    }),
                ];
                return $tmp;
            }),
        ];
    }
}
