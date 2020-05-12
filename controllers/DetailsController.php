<?php

class DetailsController
{
    public function agent()
    {
        require 'views/details-agent.view.php';
    }

    public function store()
    {
        $cars = App::get('database')->insert('cars', [
            'name' => $_POST['name'],
            'image_url' => $_POST['image_url'],
            'year' => $_POST['year'],
            'color' => $_POST['color'],
        ]);

        return redirect('Location: /');
    }
}