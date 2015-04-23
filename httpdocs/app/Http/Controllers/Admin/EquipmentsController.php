<?php 
namespace App\Http\Controllers\Admin;

class EquipmentsController extends Controller 
{
	public function getIndex()
	{
		$this->setMenuAct('Equipment');
        return $this->render_view('admin_page.equipments');
	}

	
}