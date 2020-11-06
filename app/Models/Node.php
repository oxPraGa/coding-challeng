<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;
    public $timestamps = false;
    /**
     * Get the graph for the current node.
     */
    public function graph(){
        return $this->hasOne('App\Models\Graph');
    }

    public function parents(){
        return $this->hasMany('App\Models\Relation', 'child_id');
    }

    public function childs(){
        return $this->hasMany('App\Models\Relation', 'parent_id');
    }
}
