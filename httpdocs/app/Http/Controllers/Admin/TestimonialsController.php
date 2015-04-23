<?php 
namespace App\Http\Controllers\Admin;

class TestimonialsController extends Controller 
{
	public function getIndex()
	{
		$this->setMenuAct('Testimonials');
        return $this->render_view('admin_page.testimonials');
	}
}