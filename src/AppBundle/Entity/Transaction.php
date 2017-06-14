<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=12, scale=2)
     */
    private $amount;

    /**
     * @var int
     *
     * @ORM\Column(name="customId", type="integer")
     */
    private $customId;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="transactions")
     * @ORM\JoinColumn(name="customId", referencedColumnName="id")
     */
    private $customer;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @return Transaction
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return Transaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set customId
     *
     * @param object $customer
     *
     * @return Transaction
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customId
     *
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Transaction constructor.
     */
    public function __construct()
    {
        $this->date = new \DateTime();
    }
}