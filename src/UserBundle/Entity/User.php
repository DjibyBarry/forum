<?php
        // src/UserBundle/Entity/User.php

        namespace UserBundle\Entity;

        use FOS\UserBundle\Model\User as BaseUser;
        use Doctrine\ORM\Mapping as ORM;

        /**
         * @ORM\Entity
         * @ORM\Table(name="users")
         */
        class User extends BaseUser
        {
            /**
             * @ORM\Id
             * @ORM\Column(type="integer")
             * @ORM\GeneratedValue(strategy="AUTO")
             */
            protected $id;

            /**
            * @var string
            *
            * @ORM\Column(name="nom", type="text",nullable=true)
            */
            protected $nom;

              /**
              * @var string
              *
              * @ORM\Column(name="prenom", type="text", nullable=true)
              */
            protected $prenom;

              /**
               * Set nom
               *
               * @param string $nom
               *
               * @return User
               */
              public function setNom($nom)
              {
                  $this->nom = $nom;

                  return $this;
              }

              /**
               * Get nom
               *
               * @return string
               */
              public function getNom()
              {
                  return $this->nom;
              }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
}
