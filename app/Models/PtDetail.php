<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PtDetail extends Model {

    use SoftDeletes;

    protected $table = "pt_detail";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function matrix()
    {
        return $this->belongsTo('App\Models\Matrix');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function pt()
    {
        return $this->belongsTo('App\Models\Pt');
    }

    public function analyte()
    {
        return $this->hasMany('App\Models\AnalytePtDetail');
    }

}

?>