<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cache;
class ActiveUser extends Model
{
  public function deleteActiveUser(){
    return Cache::get('asad'. $this->id);
    }
  }
