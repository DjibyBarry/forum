<?php

namespace UserBundle\Controller;

use UserBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template; # utiliser pour configuration en annotation
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Commentaires;
use Symfony\Component\HttpFoundation\JsonResponse;


class PostController extends Controller
{
    /**
   * @Route("/categories/{nomCategorie}", requirements={"nomCategorie"="[a-zA-Z\&\/]+"}, name="posts")
   * @Template()
   */
    
    public function viewAction($nomCategorie)
    {
        $doctrine = $this->getDoctrine();

        $manager = $doctrine->getManager();

        $repository = $manager->getRepository('UserBundle:Post');

        $listPosts = $repository->findByCategorie($nomCategorie);
        


        return $this->render('UserBundle:Posts:posts.html.twig', array(

          'listPosts' => $listPosts

        ));        
    }
    
    /**
   * @Route("/post/{id}", requirements={"nomCategorie"="[a-zA-Z\&\/]+"}, name="post")
   * @Template()
   */    
    
    public function affichePostAction(Request $request, $id)
    {
        
        // On crée un objet Advert

        $commentaire = new Commentaires();


        // On crée le FormBuilder grâce au service form factory

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $commentaire);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire

        $formBuilder
          ->add('commentaire',          TextareaType::class, array('attr' => ['class' => 'form-control input_commentaire'], 'label' => 'Nouveau commentaire'))
          ->add('Envoyer',             SubmitType::class, array('attr' => ['class' => 'btn btn-success send_button']));



        // À partir du formBuilder, on génère le formulaire

        $form = $formBuilder->getForm();   
        
        
        
        $doctrine = $this->getDoctrine();

        $manager = $doctrine->getManager();

        $repository = $manager->getRepository('UserBundle:Post');

        
        
        $post = $repository->findById($id);
        
        
    if($request->isMethod('POST')) 
    {

      // On fait le lien Requête <-> Formulaire

      // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur

      $form->handleRequest($request);


      // On vérifie que les valeurs entrées sont correctes

      // (Nous verrons la validation des objets en détail dans le prochain chapitre)

      if ($form->isValid()) {

        // On enregistre notre objet $advert dans la base de données, par exemple
          
        $commentaire->setAuteur($this->getUser());
        $commentaire->setDate(new \Datetime());
        $commentaire->setPostid($id);

        $em = $this->getDoctrine()->getManager();

        $em->persist($commentaire);

        $em->flush();


        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');


        // On redirige vers la page de visualisation de l'annonce nouvellement créée

        return $this->redirectToRoute('post', array('id' => $id));
      }
    }
        
        $doctrine = $this->getDoctrine();

        $manager = $doctrine->getManager();

        $repository = $manager->getRepository('UserBundle:Commentaires');

        $listCommentaires = $repository->findByPostid($id);



        return $this->render('UserBundle:Posts:affichePost.html.twig', array(

          'form' => $form->createView(),
          'post' => $post,
          'listCommentaires' => $listCommentaires

        ));             
    }
    
    /**
   * @Route("/new", name="newpost")
   * @Template()
   */
        
    public function addPostAction(Request $request)
    {
            // On crée un objet Advert

        $post = new Post();


    // On crée le FormBuilder grâce au service form factory

    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $post);


    // On ajoute les champs de l'entité que l'on veut à notre formulaire

    $formBuilder
      ->add('Titre',            TextType::class, array('attr' => ['class' => 'form-control']))
      ->add('categorie',        EntityType::class, array(
        'class'        => 'UserBundle:Categories',
        'choice_label' => 'nom',
        'multiple'     => false,
        'attr'         => ['class' => 'form-control'],
      ))
      ->add('message',          TextareaType::class, array('attr' => ['class' => 'form-control']))
      ->add('Envoyer',             SubmitType::class, array('attr' => ['class' => 'btn btn-success send_button']))
    ;

    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard


    // À partir du formBuilder, on génère le formulaire

    $form = $formBuilder->getForm();

        
    if($request->isMethod('POST')) 
    {

      // On fait le lien Requête <-> Formulaire

      // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur

      $form->handleRequest($request);


      // On vérifie que les valeurs entrées sont correctes

      // (Nous verrons la validation des objets en détail dans le prochain chapitre)

      if ($form->isValid()) {

        // On enregistre notre objet $advert dans la base de données, par exemple
          
        $post->setAuteur($this->getUser());
        $post->setDate(new \Datetime());
        $post->setdernierMessage(new \Datetime());

        $em = $this->getDoctrine()->getManager();

        $em->persist($post);

        $em->flush();


        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');


        // On redirige vers la page de visualisation de l'annonce nouvellement créée

        return $this->redirectToRoute('post', array('id' => $post->getId()));
      }
    }

    // On passe la méthode createView() du formulaire à la vue

    // afin qu'elle puisse afficher le formulaire toute seule
        
        if(!$this->getUser())
        {
            return $this->redirectToRoute('_index');
        }

    return $this->render('UserBundle:Posts:add.html.twig', array(

      'form' => $form->createView(),

    ));
    }
    
    /**
   * @Route("/json/{nomCategorie}", name="newjson")
   * @Template()
   */
        
    public function jsonResponseAction($nomCategorie)
    {
        
        $doctrine = $this->getDoctrine();

        $manager = $doctrine->getManager();

        $repository = $manager->getRepository('UserBundle:Post');

        $listPosts = $repository->findByCategorie($nomCategorie);
        
        $myresponse = array('Catégorie' => $nomCategorie);
                
        $cpt = 1;
        foreach($listPosts as $post)
        {   
            $myresponse['Sujet '.$cpt] = $post->getTitre();
            $cpt++;
        }
            
        return new JsonResponse($myresponse);        
    }
    
    /**
   * @Route("/xml/{nomCategorie}", defaults={"_format"="xml"}, name="newxml")
   * @Template()
   */
        
    public function xmlResponseAction($nomCategorie)
    {
        
        $doctrine = $this->getDoctrine();

        $manager = $doctrine->getManager();

        $repository = $manager->getRepository('UserBundle:Post');

        $listPosts = $repository->findByCategorie($nomCategorie);
        
        $myresponse = array('Catégorie' => $nomCategorie);
        
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        
        $xml .= '<'.$nomCategorie.'>';

        
        $cpt = 1;
        foreach($listPosts as $post)
        {   
            $xml .= '<sujet>'.$post->getTitre().'</sujet>';
            $cpt++;
        }

        $xml .= '</'.$nomCategorie.'>';
        $response = new Response($xml);
        $response->headers->set('Content-Type', 'xml');
        
        return $response;
    }    
    
}
