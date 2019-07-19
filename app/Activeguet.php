<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activeguet extends Model
{
  public function deleteActiveUser2(){
    return Cache::get('asad2');
    }
}
