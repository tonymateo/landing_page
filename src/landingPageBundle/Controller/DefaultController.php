<?php

namespace landingPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
      return $this->render('landingPageBundle:Default:index.html.twig');
    }

    public function productoAction($id)
    {
      if($id == 1){
        return $this->render('landingPageBundle:Default:producto1.html.twig',array('id' => $id));
      }else{
        return $this->render('landingPageBundle:Default:producto2.html.twig',array('id' => $id));
      }
    }
}
