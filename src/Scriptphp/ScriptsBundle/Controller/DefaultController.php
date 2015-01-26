<?php

namespace Scriptphp\ScriptsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ScriptphpScriptsBundle:Default:index.html.twig', 
        		array('name' => $name));
    }

    
	public function indexMenuAction()
	{
		return $this->render('ScriptphpScriptsBundle:Default:index_menu.html.twig');
	}
}
