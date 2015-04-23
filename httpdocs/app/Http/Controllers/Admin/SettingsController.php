<?php 
namespace App\Http\Controllers\Admin;

class SettingsController extends Controller 
{
	public function getIndex()
	{
		$this->setMenuAct('Settings');
        return $this->render_view('admin_page.settings');
	}
}