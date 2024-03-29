<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Tartas;
use Doctrine\ORM\Tools\Pagination\Paginator;

class DefaultController extends Controller
{
    /**
     * @Route("/{pagina}", name="homepage")
     */
    public function homeAction(Request $request, $pagina=1)
    {   
        //$numTartas=3;
        $tartaRepository = $this->getDoctrine()->getRepository(Tartas::class);
        $tartas= $tartaRepository->paginaTartas($pagina);
        return $this->render('frontal/index.html.twig', array ('tartas' => $tartas, 'paginaActual'=>$pagina));
    }
    /**
     * @Route("/nosotros", name="nosotros")
     */
    public function nosotrosAction(Request $request)
    {
        return $this->render('frontal/nosotros.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/tiendas/{sitio}", name="tiendas")
     */
    public function tiendasAction(Request $request, $sitio = "todos")
    {
        return $this->render('frontal/tiendas.html.twig', array("sitio" => $sitio));
    }
    /**
     * @Route("/tarta/{id}", name="tarta")
     */
    public function tartaAction(Request $request, $id=null)
    {
        if ($id!=null){
            $tartasRepository = $this->getDoctrine()->getRepository(Tartas::class);
            $tarta= $tartasRepository->find($id);
            return $this->render('frontal/tarta.html.twig', array("tarta" => $tarta));
        }else{
            return $this->redirectToRoute('homepage');
        };
    }
}
