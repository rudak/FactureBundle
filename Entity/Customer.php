<?php

namespace Rudak\FactureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="rudakFacture_customer")
 * @ORM\Entity(repositoryClass="Rudak\FactureBundle\Entity\CustomerRepository")
 */
class Customer
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
	 * @ORM\Column(name="name", type="string", length=80)
	 */
	private $name;

	/**
	 * @var \stdClass
	 *
	 * @ORM\OneToOne(targetEntity="Address",cascade={"remove","persist"})
	 */
	private $address;

	/**
	 * @var \stdClass
	 *
	 * @ORM\OneToOne(targetEntity="Contact",cascade={"remove","persist"})
	 */
	private $contact;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="active", type="boolean")
	 */
	private $active;


	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Customer
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set address
	 *
	 * @param \stdClass $address
	 * @return Customer
	 */
	public function setAddress($address)
	{
		$this->address = $address;

		return $this;
	}

	/**
	 * Get address
	 *
	 * @return \stdClass
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * Set contact
	 *
	 * @param \stdClass $contact
	 * @return Customer
	 */
	public function setContact($contact)
	{
		$this->contact = $contact;

		return $this;
	}

	/**
	 * Get contact
	 *
	 * @return \stdClass
	 */
	public function getContact()
	{
		return $this->contact;
	}

	/**
	 * Set active
	 *
	 * @param boolean $active
	 * @return Customer
	 */
	public function setActive($active)
	{
		$this->active = $active;

		return $this;
	}

	/**
	 * Get active
	 *
	 * @return boolean
	 */
	public function getActive()
	{
		return $this->active;
	}
}
