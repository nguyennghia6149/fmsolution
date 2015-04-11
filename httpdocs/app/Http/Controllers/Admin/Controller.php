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
        [ 'name' => 'Widgets' , 'link' => 'admin_widgets' ],
        [
            'name' => 'Charts',
            'link' => 'admin_charts',
            'sub'  => [
                [ 'name' => 'Morris', 'link' => 'admin_charts', 'anchor' => 'moris'],
                [ 'name' => 'Flot', 'link' => 'admin_charts', 'anchor' => 'flot'],
                [ 'name' => 'Inline charts', 'link' => 'admin_charts', 'anchor' => 'inline-charts'],
            ]
        ],
        [
            'name' => 'UI Element',
            'link' => 'admin_uielements',
            'sub'  => [
                [ 'name' => 'General', 'link' => 'admin_uielements', 'anchor' => 'general'],
                [ 'name' => 'Icon', 'link' => 'admin_uielements', 'anchor' => 'icon'],
                [ 'name' => 'Buttons', 'link' => 'admin_uielements', 'anchor' => 'buttons'],
                [ 'name' => 'Sliders', 'link' => 'admin_uielements', 'anchor' => 'sliders'],
                [ 'name' => 'Timeline', 'link' => 'admin_uielements', 'anchor' => 'timeline'],
            ]
        ],
        [
            'name' => 'Forms',
            'link' => 'admin_forms',
            'sub'  => [
                [ 'name' => 'General element', 'link' => 'admin_forms', 'anchor' => 'general-element'],
                [ 'name' => 'Advanced element', 'link' => 'admin_forms', 'anchor' => 'advanced-element'],
                [ 'name' => 'Editors', 'link' => 'admin_forms', 'anchor' => 'editors'],
            ]
        ],
        [
            'name' => 'Tables',
            'link' => 'admin_tables',
            'sub'  => [
                [ 'name' => 'Simple tables', 'link' => 'admin_tables', 'anchor' => 'simple-tables'],
                [ 'name' => 'Data tables', 'link' => 'admin_tables', 'anchor' => 'data-tables'],
            ]
        ],
        [ 'name' => 'Calendar' , 'link' => 'admin_calendar' ],
        [ 'name' => 'Mailbox' , 'link' => 'admin_mailbox' ],
        [ 'name' => 'Examples' , 'link' => 'admin_examples' ]
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
