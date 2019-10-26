<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Tartas;
use AppBundle\Form\TartasType;
 



    /**
     * @Route("/gestiontartas")
     */
class GestionTartasController extends Controller
{
    /**
     * @Route("/nuevatarta", name="nuevaTarta")
     */
    public function nuevaTartaAction(Request $request)
    {
        $tarta = new Tartas(); 
        $formBuilder = $this->createFormBuilder($tarta);

        $form = $formBuilder->getForm();
        $form = $this->createForm(TartasType::class, $tarta);
        return $this->render('getionTartas/nuevatarta.html.twig', array('form' => $form->createView()));
    }
}
