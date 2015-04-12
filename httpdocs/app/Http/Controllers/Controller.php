<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends BaseController
{

    use DispatchesCommands, ValidatesRequests;

    public $menu = [
        [ 'name' => 'Homepage', 'link' => 'homepage' ],
        [ 'name' => 'Services', 'link' => 'services' ],
        [ 'name' => 'Industries', 'link' => 'industries' ],
        [ 'name' => 'Equiment', 'link' => 'equiment' ],
        [
            'name' => 'Company',
            'link' => 'company',
            'sub' => [
                [ 'name' => 'About Us', 'link' => 'about-us', 'anchor' => 'about-us' ],
                [ 'name' => 'Contact', 'link' => 'contact', 'anchor' => 'contact' ],
                [ 'name' => 'Testimonials', 'link' => 'testimonials', 'anchor' => 'testimonials' ],
                [ 'name' => 'Location', 'link' => 'sitemap', 'anchor' => 'sitemap' ]
            ]
        ],
        [ 'name' => 'Portfolio', 'link' => 'portfolio' ]
    ];

    public $breadcrumbs = [
        'name' => 'Homepage',
        'list' => [
            [ 'name' => 'main-active', 'url' => 'homepage' ],
            [ 'name' => 'sub-active' ],
        ]
    ];

    public $sidebar = [
        ['name' =>'About Us', 'link' =>'/company/about-us'],
        ['name' =>'Contact', 'link' =>'/company/contact'],
        ['name' =>'Testimonials', 'link' =>'/company/testimonials'],
        ['name' =>'Location', 'link' =>'/company/sitemap']
    ];

    public function __construct()
    {

    }

    public function setSidebarAct($name)
    {
        foreach ($this->$sidebar as $key => $item) {
            if (isset($item['name']) && $item(['name'] == $name)) {
                $this->sidebar[$key]['act'] = true;
            }
        }
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
        view()->share('breadcrumbs', $this->breadcrumbs);
        view()->share('sidebar', $this->sidebar);
        return view($name);
    }

    public function setBreadcrumb($list)
    {
        $this->breadcrumbs = $list;
    }
}
