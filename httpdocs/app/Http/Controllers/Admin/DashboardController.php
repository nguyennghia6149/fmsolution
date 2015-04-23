<?php 
namespace App\Http\Controllers\Admin;

class DashboardController extends Controller 
{
	public function getIndex()
	{
		$this->setMenuAct('Dashboard');
        return $this->render_view('admin_page.dashboard');
	}
}