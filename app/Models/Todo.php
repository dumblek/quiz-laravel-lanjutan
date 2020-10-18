<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Todo extends Model
{
  protected $guarded = [];

  public function user(){
    return belongsTo('App\Models\User');
  }
}
