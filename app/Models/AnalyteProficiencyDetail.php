<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnalyteProficiencyDetail extends Model {

	protected $table = "analyte_proficiency_detail";

	public function proficiencyDetail()
	{
        return $this->belongsTo('App\Models\ProficiencyDetail');
    }

    public function analyte()
    {
        return $this->belongsTo('App\Models\Analyte');
    }
    
}
