<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    protected  $fillable = ['user_id', 'ibadah_item_id', 'value'];

    protected $casts = [
        'value' => 'boolean'
    ];

    public function ibadahItem()
    {
        return $this->hasOne('App\IbadahItem', 'id', 'ibadah_item_id');
    }
}
