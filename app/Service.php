<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function servers(){
        return $this->belongsToMany('App\Server', 'server_service', 'service_id', 'server_id')->withPivot(['duration']);
    }
    
    public function steps(){
        return $this->belongsToMany('App\Step', 'service_step', 'service_id', 'step_id');
    }
    
}
