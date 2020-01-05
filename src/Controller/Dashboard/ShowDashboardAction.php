<?php

namespace App\Controller\Dashboard;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowDashboardAction extends AbstractController
{
    public function __invoke()
    {
        return $this->render('dashboard/index.html.twig');
    }
}
