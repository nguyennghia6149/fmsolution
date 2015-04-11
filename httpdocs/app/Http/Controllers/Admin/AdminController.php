<?php namespace App\Http\Controllers\Admin;

class AdminController extends Controller
{
	public function __construct()
    {
        parent::__construct();
    }

    public function staticDashboard()
    {
    	$this->setMenuAct('Dashboard');
        return $this->render_view('admin_page.dashboard');
    }

    public function staticWidgets()
    {
    	$this->setMenuAct('Widgets');
        return $this->render_view('admin_page.widgets');
    }

    public function staticCharts()
    {
    	$this->setMenuAct('Charts');
        return $this->render_view('admin_page.charts');
    }

    public function staticUielements()
    {
    	$this->setMenuAct('UI Elements');
        return $this->render_view('admin_page.uielements');
    }

    public function staticForms()
    {
    	$this->setMenuAct('Forms');
        return $this->render_view('admin_page.forms');
    }

    public function staticTables()
    {
    	$this->setMenuAct('Tables');
        return $this->render_view('admin_page.tables');
    }

    public function staticCalendar()
    {
    	$this->setMenuAct('Calendar');
        return $this->render_view('admin_page.calendar');
    }

    public function staticMailbox()
    {
    	$this->setMenuAct('Mailbox');
        return $this->render_view('admin_page.mailbox');
    }

    public function staticExamples()
    {
    	$this->setMenuAct('Homepage');
        return $this->render_view('admin_page.homepage');
    }
}