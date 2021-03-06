<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model {

	use SoftDeletes;

	protected $table = "size";
	protected $guarded = ['id'];
	protected $dates = ['deleted_at'];

	public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function proficiency()
    {
        return $this->hasMany('App\Models\Proficiency');
    }

    public function material()
    {
        return $this->hasMany('App\Models\Material');
    }

}

?>