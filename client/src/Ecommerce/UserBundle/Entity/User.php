<?php
namespace Ecommerce\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="User")
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
     * @var string $username
     * @ORM\Column(name="username", type="string")
     */

    protected $username;

    /**
     * @var string $usernameCanonical
     * @ORM\Column(name="usernameCanonical", type="string")
     */
    protected $usernameCanonical;

    /**
     * @var string $nom
     * 
     */

    protected $nom;

    /**
     * @var string $prenom
     * 
     */

    protected $prenom;

    /**
     * @var string $email
     * @ORM\Column(name="email", type="string")
     */
    protected $email;

        /**
     * @var string $emailCanonical
     *@ORM\Column(name="emailCanonical", type="string")
     * 
     */
    protected $emailCanonical;

    /**
     * @var boolean
     * @ORM\Column(name="enabled", type="boolean")
     */
    protected $enabled;

    /**
     * The salt to use for hashing
     *
     * @var string
     */
    protected $salt;

    /**
     * Encrypted password. Must be persisted.
     *
     * @var string $password
     * @ORM\Column(name="password", type="string")
     */
    protected $password;

    /**
     * Plain password. Used for model validation. Must not be persisted.
     *
     * @var string $plainPassword
     *
     */
    protected $plainPassword;

    /**
     * @var \DateTime $lastLogin
     * 
     */
    protected $lastLogin;

     /**
     * Random string sent to the user email address in order to verify it
     *
     * @var string
     */
    protected $confirmationToken;

    /**
     * @var \DateTime
     */
    protected $passwordRequestedAt;

    /**
     * @var Collection
     */
    protected $groups;

    /**
     * @var boolean
     */
    protected $locked;

    /**
     * @var boolean
     */
    protected $expired;

    /**
     * @var \DateTime
     */
    protected $expiresAt;

    /**
     * @var array
     */
    protected $roles;

    /**
     * @var boolean
     */
    protected $credentialsExpired;

    /**
     * @var \DateTime
     */
    protected $credentialsExpireAt;

    public function __construct(){
    	Parent::__construct();
    }



    /**
     * Set nom
     *
     * @param string $nom
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
