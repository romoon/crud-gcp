<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
      'title' => 'required',
      'body' => 'required',
  );

  public function user()
    {
      return $this->belongsTo('App\Models\User');
    }
}
