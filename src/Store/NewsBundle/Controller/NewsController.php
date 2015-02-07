<?php

namespace Store\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
        $newsRepo = $this->getDoctrine()->getManager()->getRepository('NewsBundle:News');
        $news = $newsRepo->findAll();
        
        return $this->render('NewsBundle:News:index.html.twig', array('news' => $news));
    }
    
    public function articleAction($slug)
    {
        $newsRepo = $this->getDoctrine()->getManager()->getRepository('NewsBundle:News');
        $article = $newsRepo->findOneBy(['slug' => $slug]);
                    
        return $this->render('NewsBundle:News:article.html.twig', array('article' => $article));
    }
    
    public function onecategoryAction()
    {
//        $newsRepo = $this->getDoctrine()->getManager()->getRepository('NewsBundle:News');
//        $article = $newsRepo->findOneBy(['slug' => $slug]);
//                    
//        return $this->render('NewsBundle:News:onecategory.html.twig', array('article' => $article));
    }
    
}
