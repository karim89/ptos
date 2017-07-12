<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BasketPayment extends Model {

	protected $table = "basket_payment";

	public function basket()
	{
        return $this->belongsTo('App\Models\Basket');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\Payment');
    }
    
}
