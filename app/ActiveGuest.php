<?php

namespace App;
use Cache;
use Illuminate\Database\Eloquent\Model;

class ActiveGuest extends Model
{
  public function deleteActiveUser2(){
    return Cache::get('asad2');
    }
  public function deleteActiveUser(){
    return Cache::get('asad');
    }
}
