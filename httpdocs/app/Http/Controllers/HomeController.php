<?php namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function __construct()
    {
        
        parent::__construct();
        //$this->middleware('auth');
    }

    public function staticHome()
    {
        $this->setMenuAct('Homepage');
        return $this->render_view('page.homepage');
    }

    public function staticCompany()
    {
        $this->setMenuAct('Company');
        return $this->render_view('page.company');
    }

    public function staticServices()
    {
        $this->setMenuAct('Services');
        return $this->render_view('page.services');
    }

    public function staticIndustries()
    {
        $this->setMenuAct('Industries');
        return $this->render_view('page.industries');
    }

    public function staticEquiment()
    {
        $this->setMenuAct('Equiment');
        return $this->render_view('page.equiment');
    }

    public function staticLocation()
    {
        $this->setMenuAct('Location');
        return $this->render_view('page.location');
    }
}
