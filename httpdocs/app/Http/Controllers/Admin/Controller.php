<?php 
namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends BaseController
{
    use DispatchesCommands, ValidatesRequests;

    public $menu = [
        [ 'name' => 'Dashboard', 'link' => 'admin_dashboard' ],
        [ 'name' => 'Boxes' , 'link' => 'admin_boxes' ],
        [ 'name' => 'Equipments' , 'link' => 'admin_equipments' ],
        [ 'name' => 'Email patterns' , 'link' => 'admin_email_patterns' ],
        [ 'name' => 'Testimonials' , 'link' => 'admin_testimonials' ],
        [ 'name' => 'Clients' , 'link' => 'admin_clients' ],
        [ 'name' => 'Portfolios' , 'link' => 'admin_portfolios' ],
        [ 'name' => 'Settings' , 'link' => 'admin_settings' ],
    ];

    public function __construct()
    {

    }

    public function setMenuAct($name)
    {
        foreach ($this->menu as $key => $item) {
            if (isset($item['name']) && $item['name'] == $name) {
                $this->menu[$key]['act'] = true;
            }
        }
    }

    public function render_view($name)
    {
        view()->share('menu', $this->menu);
        return view($name);
    }
}
