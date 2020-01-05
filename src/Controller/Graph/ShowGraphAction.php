<?php

namespace App\Controller\Graph;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShowGraphAction extends AbstractController
{
    public function __invoke()
    {
        return $this->render('dashboard/graph/index.html.twig');
    }
}
