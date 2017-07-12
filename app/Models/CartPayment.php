<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartPayment extends Model {

	protected $table = "cart_payment";

	public function cart()
	{
        return $this->belongsTo('App\Models\Cart');
    }

    public function payment()
    {
        return $this->belongsTo('App\Models\Payment');
    }
    
}
