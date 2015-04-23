<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email_pattern extends Model {

	protected $table = 'email_patterns';
	public $timestamps = false;
	
	const TYPE_NEWSLETTER = 1;
	const TYPE_CONTACT = 1;

}