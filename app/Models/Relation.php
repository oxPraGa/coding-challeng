<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;
    public $timestamps = false;
    /**
     * Get the parent for the current relation.
     */
    public function parent(){
        return $this->hasOne('App\Models\Node', 'parent_id');
    }

    /**
     * Get the child in this relation.
     */
    public function child(){
        return $this->hasOne('App\Models\Node', 'child_id');
    }
    

}
