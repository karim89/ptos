<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model {

	protected $table = "basket";

	public function pmDetail()
	{
        return $this->belongsTo('App\Models\pmDetail');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
