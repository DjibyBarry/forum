<?php
namespace UserBundle\Controller;

use UserBundle\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;# utiliser pour annotation @security
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class CatAdminController extends Controller
{

      /**
       *fonction active  si l'user possède le ROLE_ADMIN
       * @Security("has_role('ROLE_ADMIN')")
       * @Route("admin/categories", name="adminCat_index")
       *@Method("GET")
       */
           public function indexCatAction()
           {

             $doctrine = $this->getDoctrine();

             $manager = $doctrine->getManager();

             $repository = $manager->getRepository('UserBundle:Categories');

             $categories = $manager->getRepository('UserBundle:Categories')->findAll();

               return $this->render('UserBundle:categoriesAdmin:index.html.twig', array(
                   'categories' => $categories,
               ));
           }
    
     /**
   *@Security("has_role('ROLE_ADMIN')")
   * @Route("admin/categories/new", name="adminCat_New")
   */
        
    public function addCategoriesAction(Request $request)
    {
            // On crée un objet Advert

        $categorie = new Categories();


    // On crée le FormBuilder grâce au service form factory

    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $categorie);


    // On ajoute les champs de l'entité que l'on veut à notre formulaire

    $formBuilder
      ->add('nom',            TextType::class, array('attr' => ['class' => 'form-control']))
      ->add('url',        FileType::class, array('label' => 'Image de la catégorie ', 'attr' => ['class' => 'form-control']))
      ->add('Envoyer',             SubmitType::class, array('attr' => ['class' => 'btn btn-success send_button']));

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
          

        $file = $categorie->getUrl();


           // Generate a unique name for the file before saving it
        $fileName = 'cat_'.$categorie->getNom().'.'.$file->guessExtension();

        // Move the file to the directory where brochures are stored
        $file->move(
            $this->getParameter('image_cat_directory'),
            $fileName
        );

        $categorie->setUrl($fileName);

        $em = $this->getDoctrine()->getManager();

        $em->persist($categorie);

        $em->flush();


        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');


        // On redirige vers la page de visualisation de l'annonce nouvellement créée

        return $this->redirectToRoute('adminCat_index');
      }
    }

    // On passe la méthode createView() du formulaire à la vue

    // afin qu'elle puisse afficher le formulaire toute seule


    return $this->render('UserBundle:categoriesAdmin:newCat.html.twig', array(

      'form' => $form->createView(),

    ));
    }
    



           /**
            *Permet voir la liste le détail d'une catégorie
            *@Security("has_role('ROLE_ADMIN')")
            * @Route("admin/categories/{id}", name="adminCat_show")
            * @Method("GET")
            */
           public function showAction(Categories $cat)
           {
               $deleteForm = $this->createDeleteForm($cat);

               return $this->render('UserBundle:categoriesAdmin:show.html.twig', array(
                   'cat' => $cat,
                   'delete_form' => $deleteForm->createView(),
               ));
           }

           /**
            *
            *@Security("has_role('ROLE_ADMIN')")
            * @Route("admin/categories/{id}/edit", name="adminCat_edit")
            * @Method({"GET", "POST"})
            */
           public function editAction(Request $request, Categories $cat)
           {
               $deleteForm = $this->createDeleteForm($cat);
               $editForm = $this->createForm('UserBundle\Form\catType', $cat);
               $editForm->handleRequest($request);

               if ($editForm->isSubmitted() && $editForm->isValid()) {
                   $this->getDoctrine()->getManager()->flush();

                   return $this->redirectToRoute('adminCat_index', array('id' => $cat->getId()));
               }

               return $this->render('UserBundle:categoriesAdmin:edit.html.twig', array(
                   'cat' => $cat,
                   'edit_form' => $editForm->createView(),
                   'delete_form' => $deleteForm->createView(),
               ));
           }


               /**
                * Deletes a user entity.
                *
                * @Route("admin/categories/{id}", name="adminCat_delete")
                * @Method("DELETE")
                */
               public function deleteAction(Request $request,Categories $cat)
               {
                   $form = $this->createDeleteForm($cat);
                   $form->handleRequest($request);

                   if ($form->isSubmitted() && $form->isValid()) {
                       $em = $this->getDoctrine()->getManager();
                       $em->remove($cat);
                       $em->flush();
                   }

                   return $this->redirectToRoute('adminCat_index');
               }

               /**
                * Creates a form to delete a user entity.
                *
                * @param Categories $cat
                *
                * @return \Symfony\Component\Form\Form The form
                */
               private function createDeleteForm(Categories $cat)
               {
                   return $this->createFormBuilder()
                       ->setAction($this->generateUrl('adminCat_delete', array('id' => $cat->getId())))
                       ->setMethod('DELETE')
                       ->getForm()
                   ;
               }



}
