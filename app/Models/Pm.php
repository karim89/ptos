<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pm extends Model {

	use SoftDeletes;

	protected $table = "pm";
	protected $guarded = ['id'];
	protected $dates = ['deleted_at'];

	public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function scheme()
    {
        return $this->belongsTo('App\Models\Scheme');
    }

    public function size()
    {
        return $this->belongsTo('App\Models\Size');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function pmDetail()
    {
        return $this->hasMany('App\Models\PmDetail');
    }

}

?>