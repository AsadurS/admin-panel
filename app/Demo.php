<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
  protected $primaryKey='id';
  protected $fillable = [
      'subject', 'phone','gender', 'file','role_id','image',
  ];
}
