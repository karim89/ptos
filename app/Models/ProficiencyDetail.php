<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProficiencyDetail extends Model {

    use SoftDeletes;

    protected $table = "proficiency_detail";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function matrix()
    {
        return $this->belongsTo('App\Models\matrix');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function proficiency()
    {
        return $this->belongsTo('App\Models\Proficiency');
    }

}

?>