<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Table Name
    protected $table = 'jobs';
    // Primary Key
    protected $primaryKey = 'id';
    // Timestamps
    public $timesamps = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
