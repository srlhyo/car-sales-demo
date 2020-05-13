<?php

namespace App\Controllers;

use App\Core\App;
class DetailsController
{
    public function agent()
    {
        return view('details-agent');
    }

    public function store()
    {
        $cars = App::get('database')->insert('cars', [
            'name' => $_POST['name'],
            'image_url' => $_POST['image_url'],
            'year' => $_POST['year'],
            'color' => $_POST['color'],
        ]);

        return redirect('/');
    }
}