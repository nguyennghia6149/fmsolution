<?php 
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends BaseController
{

    use DispatchesCommands, ValidatesRequests;

    public $menu = [
        [ 'name' => 'Homepage', 'link' => 'homepage' ],
        [ 'name' => 'Services', 'link' => 'services' ],
        [ 'name' => 'Industries', 'link' => 'industries' ],
        [ 'name' => 'Equipment', 'link' => 'equipment' ],
        [
            'name' => 'Company',
            'link' => 'company',
            'sub' => [
                [ 'name' => 'About Us', 'link' => 'about-us', 'anchor' => 'about-us' ],
                [ 'name' => 'Contact', 'link' => 'contact', 'anchor' => 'contact' ],
                [ 'name' => 'Testimonials', 'link' => 'testimonials', 'anchor' => 'testimonials' ],
                [ 'name' => 'Location', 'link' => 'location', 'anchor' => 'location' ]
            ]
        ],
        [ 'name' => 'Portfolio', 'link' => 'portfolio' ]
    ];

    public $sidebar = [];

    public $breadcrumbs = [
        'name' => 'Homepage',
        'list' => [
            [ 'name' => 'main-active', 'url' => 'homepage' ],
            [ 'name' => 'sub-active' ],
        ]
    ];

    public function __construct()
    {
    }

    public function setSidebar($name, $act)
    {
        foreach ($this->menu as $item) {
            if ($item['link'] == $name) {
                $this->sidebar = $item['sub'];
            }
        }

        if (isset($this->sidebar)) {
            $this->setAct('sidebar', $act);
        }
    }

    public function setMenuAct($name)
    {
        $this->setAct('menu', $name);
        
    }

    public function setAct($name, $link_act)
    {
        if (isset($this->$name)) {
            foreach ($this->$name as $key => $item) {
                if (isset($item['link']) && $item['link'] == $link_act) {
                    $this->{$name}[$key]['act'] = true;
                }
            }
        }
    }

    public function render_view($name)
    {
        view()->share('menu', $this->menu);
        view()->share('breadcrumbs', $this->breadcrumbs);
        view()->share('sidebar', $this->sidebar);

        return view($name);
    }

    public function setBreadcrumb($list)
    {
        $this->breadcrumbs = $list;
    }
}
