<?php

namespace App\Controller\Pages\Openings;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class NameController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('openings/name.html.twig');
    }
}
