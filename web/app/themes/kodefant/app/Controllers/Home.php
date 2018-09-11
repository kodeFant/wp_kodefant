<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Home extends Controller
{
    public function posts_ingress()
    {
        return get_field('posts_ingress');
    }
}
