<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {

	protected $table = 'portfolios';
	public $timestamps = false;
	public function client()
	{
		$this->belongsTo('Clients', 'client_id', 'id');
	}

}