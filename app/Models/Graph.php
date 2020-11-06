<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'description'];
    /**
     * Get the nodes for the current graph.
     */
    public function nodes(){
        return $this->hasMany('App\Models\Node');
    }
}
