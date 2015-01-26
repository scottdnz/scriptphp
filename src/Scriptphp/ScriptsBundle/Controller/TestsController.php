<?php

namespace Scriptphp\ScriptsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestsController extends Controller
{
  public function formAction()
  {
    return $this->render('ScriptphpScriptsBundle:Tests:form.html.twig' 
      		);
  }

    
	
}
