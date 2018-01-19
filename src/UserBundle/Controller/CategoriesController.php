<?php

namespace UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; # utiliser pour configuration en annotation
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template; # utiliser pour configuration en annotation
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;# utiliser pour annotation @security
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;



class CategoriesController extends Controller
{

  /**
 * @Route("/", name="_index")
 * @Template()
 */
    public function indexAction()
    {
      $doctrine = $this->getDoctrine();

      $manager = $doctrine->getManager();

      $repository = $manager->getRepository('UserBundle:Categories');
        
      $repository2 = $manager->getRepository('UserBundle:Post');
     

      $listCategories = $repository->findAll();
        
      $listPosts = $repository2->findBy(array(), array('date' => 'desc'), 5, 0);

      $content = $this->get('templating')->render("UserBundle:Default:index.html.twig", array(

        'listCategories' => $listCategories,
        'listPosts' => $listPosts

      ));

      return new Response($content);

    }

    /**
   * @Route("/categories/", name="categories")
   * @Template()
   */
    public function afficheCategoriesAction()
    {

        $doctrine = $this->getDoctrine();

        $manager = $doctrine->getManager();

        $repository = $manager->getRepository('UserBundle:Categories');

        $listCategories = $repository->findAll();


        return $this->render('UserBundle:Annonces:categories.html.twig', array(

          'listCategories' => $listCategories

        ));
    }
    
    
            /**
       * @Route("/showCat/", name="showCat")
       * @Template()
       * affiche les catégories avec leur id
       */
        public function afficheCatAction(Request $request, Categories $cat)
        {

            $doctrine = $this->getDoctrine();

            $manager = $doctrine->getManager();

            $repository = $manager->getRepository('UserBundle:Categories');

            $listCat = $repository->findAll();


            return $this->render('UserBundle:Annonces:categories.html.twig', array('id' => $cat->getId(),
              'listCategories' => $listCat

            ));

        }






}
