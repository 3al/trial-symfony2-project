<?php
	
namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class AdminController extends Controller
{
	/**
     * @Route("/admin/", name="_admin")
	 * @Template()
     */
    public function indexAction(){
	
		return array('var' => 'val');
    
	}
}