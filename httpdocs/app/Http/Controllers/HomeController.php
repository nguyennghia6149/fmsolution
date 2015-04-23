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
        $this->setMenuAct('homepage');
        return $this->render_view('page.homepage');
    }

    public function staticCompany()
    {
        $Bcurm = [
            'name' => 'Company',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Company']
            ]
        ];
        $this->setBreadcrumb($Bcurm);

        $this->setMenuAct('company');
        $this->setSidebar('company', 'about-us');

        return $this->render_view('page.company.aboutus');
    }

    public function staticAboutus()
    {
        $Bcurm = [
            'name' => 'About Us',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Company', 'url' => 'company'],
                [ 'name' => 'About Us']
            ]
        ];
        $this->setBreadcrumb($Bcurm);

        $this->setMenuAct('company');
        $this->setSidebar('company', 'about-us');
        
        return $this->render_view('page.company.aboutus');
    }

    public function staticContact()
    {
        $Bcurm = [
            'name' => 'Contact',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Company', 'url' => 'company'],
                [ 'name' => 'Contact']
            ]
        ];
        $this->setBreadcrumb($Bcurm);

        $this->setMenuAct('company');
        $this->setSidebar('company', 'contact');

        return $this->render_view('page.company.contact');
    }

    public function staticTestimonials()
    {
        $Bcurm = [
            'name' => 'Testimonials',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Company', 'url' => 'company'],
                [ 'name' => 'Testimonials']
            ]
        ];
        $this->setBreadcrumb($Bcurm);

        $this->setMenuAct('company');
        $this->setSidebar('company', 'testimonials');

        return $this->render_view('page.company.testimonials');
    }

    public function staticLocation()
    {
        
        $Bcurm = [
            'name' => 'Location',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Company', 'url' => 'company'],
                [ 'name' => 'Location']
            ]
        ];
        $this->setBreadcrumb($Bcurm);

        $this->setMenuAct('company');
        $this->setSidebar('company', 'location');

        return $this->render_view('page.company.location');
    }

    public function staticServices()
    {
        $this->setMenuAct('services');
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
        $this->setMenuAct('industries');
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

    public function staticEquipment()
    {
        $this->setMenuAct('equipment');
        $Bcurm = [
            'name' => 'Equipment',
            'list' => [
                [ 'name' => 'Home', 'url' => 'homepage'],
                [ 'name' => 'Equipment']
            ]
        ];
        $this->setBreadcrumb($Bcurm);
        return $this->render_view('page.equipment');
    }

    public function staticPortfolio()
    {
        $this->setMenuAct('portfolio');
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
