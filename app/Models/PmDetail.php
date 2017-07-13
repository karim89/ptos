<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PmDetail extends Model {

    use SoftDeletes;

    protected $table = "pm_detail";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function pm()
    {
        return $this->belongsTo('App\Models\Pm');
    }

}

?>