<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/test", name="testpage")
     */
    public function testAction(Request $request)
    {    
        // replace this example code with whatever you need
        return $this->render('test.html.twig', [
            'title' => "Test Page",
        ]);
    }
}
