<?php 
namespace App\Http\Controllers\Admin;

class ClientsController extends Controller 
{
	public function getIndex()
	{
		$this->setMenuAct('Clients');
        return $this->render_view('admin_page.clients');
	}
}