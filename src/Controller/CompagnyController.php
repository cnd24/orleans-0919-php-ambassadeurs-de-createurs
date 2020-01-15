<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("compagny")
 */
class CompagnyController extends AbstractController
{
    /**
     * @Route("/concept", name="compagny_concept")
     */
    public function showConcept()
    {
        return $this->render('compagny/concept_index.html.twig');
    }

    /**
     * @Route("/cgv", name="compagny_cgv")
     */
    public function showCGV()
    {
        return $this->render('compagny/cgv_index.html.twig');
    }

    /**
     * @Route("/cgu", name="compagny_cgu")
     */
    public function showCGU()
    {
        return $this->render('compagny/cgu_index.html.twig');
    }

    /**
     * @Route("/mentionslegales", name="compagny_mentions_legales")
     */
    public function showMentionsLegales()
    {
        return $this->render('compagny/mentions_legales_index.html.twig');
    }

    /**
     * @Route("/politiquedeconfidentialite", name="compagny_confidentialite")
     */
    public function showConfidentialite()
    {
        return $this->render('compagny/confidentialite_index.html.twig');
    }
}
