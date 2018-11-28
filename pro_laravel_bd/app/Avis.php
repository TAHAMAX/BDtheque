<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Table_BD;

class Avis extends Model
{
   // contect table avis
    protected $table = 'avis';
    protected $primaryKey = 'avis_Id';

	public function bd()
	{
	    return $this->belongsTo('App\Table_BD', 'avis_table_BD_fk');
	}
}
