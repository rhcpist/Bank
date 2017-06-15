<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransactionRepository")
 * @JMS\ExclusionPolicy("all")
 */
class Transaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMS\SerializedName("transactionId")
     * @JMS\Expose
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     * @JMS\Expose
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=12, scale=2)
     * @JMS\Expose
     */
    private $amount;

    /**
     * @var int
     *
     * @ORM\Column(name="customId", type="integer")
     * @JMS\Expose
     * @JMS\SerializedName("customerId")
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
     * Set customer
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
     * Get customer
     *
     * @return object
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set customId
     *
     * @param int $customId
     *
     * @return Transaction
     */
    public function setCustomerId($customId)
    {
        $this->customId = $customId;

        return $this;
    }

    /**
     * Get customId
     *
     * @return int
     */
    public function getCustomId()
    {
        return $this->customId;
    }

    /**
     * Transaction constructor.
     */
    public function __construct()
    {
        $this->date = new \DateTime();
    }
}