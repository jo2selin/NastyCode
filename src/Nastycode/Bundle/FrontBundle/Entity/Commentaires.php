<?php

namespace Nastycode\Bundle\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File;


/**
 * Commentaires
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nastycode\Bundle\FrontBundle\Entity\CommentairesRepository")
 */
class Commentaires
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires", type="text", length=255)
     */
    private $commentaires;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    /**
    * Set Username
    *
    * @return string
    */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
    * Set Commentaires
    *
    * @return string
    */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

}

?>