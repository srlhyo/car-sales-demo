<?php

class PagesController
{
    public function home(){
        $cars = App::get('database')->selectAll('cars', 'Car');

        return view('index', ['cars' => $cars]);
    }

    public function about(){

        return view('about');
    }

    public function aboutme(){

        return view('about-me');
    }

    public function contact(){

        return view('contact');
    }

    public function detailsagent(){

        return view('details-agent');
    }
}