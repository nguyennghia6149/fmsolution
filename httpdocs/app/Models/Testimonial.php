<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {

	protected $table = 'testimonials';
	public $timestamps = false;
	
	const STT_PUBLISH = 1;
	const STT_UNPUBLISH = 0;
}