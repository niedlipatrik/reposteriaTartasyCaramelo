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
        $form = $this->createForm(TartasType::class, $tarta);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $tarta = $form->getData();
            $fotoFile = $tarta->getFoto();
            $fileName = $this->generateUniqueFileName().'.'.$fotoFile->guessExtension();
            $fotoFile->move(
                $this->getParameter('tartaImg_directory'),
                $fileName
            );
            $tarta -> setFoto($fileName);
            $tarta -> setFechaCreacion(new \DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($tarta);
            $em->flush();
            return $this->redirectToRoute('tarta',array('id' => $tarta->getId()));
        }
    
        return $this->render('getionTartas/nuevatarta.html.twig', array('form' => $form->createView()));
    }
    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }

    
}
