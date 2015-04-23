<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Box extends Model {

	protected $table = 'boxes';
	public $timestamps = false;

	protected $guarded = ['id'];

	const STT_PUBLISH = 1;
	const STT_UNPUBLISH = 0;

	const TYPE_SERVICE = 0;
	const TYPE_INDUSTRIES = 1;
	const TYPE_ABOUTUS = 2;
	const TYPE_LOCATION = 3;

	const UPLOAD_IMAGE_PATH = 'uploads/boxes/';

	public static function rule()
	{
		return [
			'title' => 'required',
			'image' => 'mimes:jpeg,jpg,bmp,png,gif',
		];
	}

	public function checkExistImage()
	{
		if (!empty($this->image) && file_exists(self::UPLOAD_IMAGE_PATH.$this->image)) {
			return true;
		} else {
			return false;
		}
	}

	public function renImage()
	{
		return '/' . self::UPLOAD_IMAGE_PATH.$this->image;
	}
}

