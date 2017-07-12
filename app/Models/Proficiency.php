<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proficiency extends Model {

	use SoftDeletes;

	protected $table = "proficiency";
	protected $guarded = ['id'];
	protected $dates = ['deleted_at'];

	public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function proficiencyDetail()
    {
        return $this->hasMany('App\Models\ProficiencyDetail');
    }

}

?>