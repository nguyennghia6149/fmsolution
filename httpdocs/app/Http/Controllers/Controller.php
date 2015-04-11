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
                [ 'name' => 'About Us', 'link' => 'company', 'anchor' => 'about-us' ],
                [ 'name' => 'Caree', 'link' => 'company', 'anchor' => 'caree' ],
                [ 'name' => 'Gallery', 'link' => 'company', 'anchor' => 'gallery' ],
                [ 'name' => 'Customer', 'link' => 'company', 'anchor' => 'customer' ],
                [ 'name' => 'Contact', 'link' => 'company', 'anchor' => 'contact' ],
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
        view()->share('breadcrumbs', $this->breadcrumbs);
        return view($name);
    }

    public function setBreadcrumb($list)
    {
        $this->breadcrumbs = $list;
    }
}
