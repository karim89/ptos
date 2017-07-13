<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnalytePtDetail extends Model {

	protected $table = "analyte_pt_detail";

	public function ptDetail()
	{
        return $this->belongsTo('App\Models\ptDetail');
    }

    public function analyte()
    {
        return $this->belongsTo('App\Models\Analyte');
    }
    
}
