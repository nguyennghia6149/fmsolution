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
        //$this->setSidebarAct('About us');
        $Bcurm = [
            'name' => 'Company',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Company']
            ]
        ];
        $this->setBreadcrumb($Bcurm);
        return $this->render_view('page.company');
    }

    public function staticAboutus()
    {
        $this->setMenuAct('Company');
        //$this->setSidebarAct('About Us');
        $Bcurm = [
            'name' => 'About Us',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Company', 'url' => 'company'],
                [ 'name' => 'About Us']
            ]
        ];
        $this->setBreadcrumb($Bcurm);
        return $this->render_view('page.aboutus');
    }

    public function staticContact()
    {
        $this->setMenuAct('Company');
        //$this->setSidebarAct('Contact');
        $Bcurm = [
            'name' => 'Contact',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Company', 'url' => 'company'],
                [ 'name' => 'Contact']
            ]
        ];
        $this->setBreadcrumb($Bcurm);
        return $this->render_view('page.company');
    }

    public function staticTestimonials()
    {
        $this->setMenuAct('Company');
        //$this->setSidebarAct('Testimonials');
        $Bcurm = [
            'name' => 'Testimonials',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Company', 'url' => 'company'],
                [ 'name' => 'Testimonials']
            ]
        ];
        $this->setBreadcrumb($Bcurm);
        return $this->render_view('page.testimonials');
    }

    public function staticSitemap()
    {
        $this->setMenuAct('Company');
        $this->setSidebarAct('Location');
        $Bcurm = [
            'name' => 'Location',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Company', 'url' => 'company'],
                [ 'name' => 'Location']
            ]
        ];
        $this->setBreadcrumb($Bcurm);
        return $this->render_view('page.sitemap');
    }

    public function staticServices()
    {
        $this->setMenuAct('Services');
        $Bcurm = [
            'name' => 'Services',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Services']
            ]
        ];
        $this->setBreadcrumb($Bcurm);
        return $this->render_view('page.services');
    }

    public function staticIndustries()
    {
        $this->setMenuAct('Industries');
        $Bcurm = [
            'name' => 'Industries',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Industries']
            ]
        ];
        $this->setBreadcrumb($Bcurm);
        return $this->render_view('page.industries');
    }

    public function staticEquiment()
    {
        $this->setMenuAct('Equiment');
        $Bcurm = [
            'name' => 'Equiment',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Equiment']
            ]
        ];
        $this->setBreadcrumb($Bcurm);
        return $this->render_view('page.equiment');
    }

    public function staticPortfolio()
    {
        $this->setMenuAct('Portfolio');
        $Bcurm = [
            'name' => 'Portfolio',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Portfolio']
            ]
        ];
        $this->setBreadcrumb($Bcurm);
        return $this->render_view('page.portfolio');
    }
}
