<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  public function category()
  {
    $this->belongsTo('App\ProjectCategory');
  }
}
