<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    //感想を新しい順に取得
    public function feedback() {
         return $this->hadMany('App\Feedback')->latest();
    }
}
