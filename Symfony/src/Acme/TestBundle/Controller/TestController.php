<?php
	
namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// these import the "@Route" and "@Template" annotationsч
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class TestController extends Controller
{
	/**
     * @Route("/", name="_test")
	 * @Template()
     */
    public function indexAction()
    {
		$testobj = new \stdClass();
		$testobj->v1 = 'var1';
		$testobj->v2 = 'var2';

        return array('testvar' => 111, 'testobj' => $testobj)/*$this->render('AcmeTestBundle:Test:index.html.twig')*/;
    }
}