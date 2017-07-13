<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {

	protected $table = "cart";

	public function ptDetail()
	{
        return $this->belongsTo('App\Models\PtDetail');
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
