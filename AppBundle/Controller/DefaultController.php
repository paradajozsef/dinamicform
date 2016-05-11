<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\AutomaticBadgeType;
use AppBundle\Form\Type\BadgeOptionType;
use AppBundle\Form\Type\BadgeSelectType;
use AppBundle\Form\Type\ManualBadgeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {


        $b = $this->getDoctrine()->getRepository('AppBundle:AutomaticBadge')->find(1);

        //$form = $this->createForm(new AutomaticBadgeType(),$b);
        $form = $this->createForm(new BadgeSelectType());

        $form->handleRequest($request);

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ));
    }
}
