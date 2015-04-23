<?php 
namespace App\Http\Controllers\Admin;

class EmailpatternsController extends Controller 
{
	public function getIndex()
	{
		$this->setMenuAct('Email patterns');
        return $this->render_view('admin_page.email_patterns');
	}
}