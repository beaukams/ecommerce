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
	* @var integer $id
	* @ORM\Id
	* @ORM\Column(name="id", type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

    /**
     * @var string
     */
    protected $username;


    /**
     * @var string
     */
    protected $email;

    /**
     * @var boolean
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
     * @var string
     */
    protected $password;

    /**
     * Plain password. Used for model validation. Must not be persisted.
     *
     * @var string
     */
    protected $plainPassword;

    /**
     * @var \DateTime
     */
    protected $lastLogin;


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


	public function __construct()
    {
        //BaseUser::__construct();

    }
}