<?php 
namespace App\Http\Controllers\Admin;

class PortfoliosController extends Controller 
{
	public function getIndex()
	{
		$this->setMenuAct('Portfolios');
        return $this->render_view('admin_page.portfolios');
	}
}