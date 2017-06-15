<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TransactionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 *
 */
class TransactionRepository extends EntityRepository
{
    public function getTransaction($customId, $transId)
    {
        $query = $this->getEntityManager()->createQuery(
          "
            SELECT tr.id AS transactionId, tr.amount, tr.date
            FROM AppBundle:Transaction tr
            WHERE tr.customId = :customId 
            AND tr.id = :transId
          "
        );
        $query->setParameters(array('customId' => $customId, 'transId' => $transId));
        return $query->getResult()[0];
    }

    public function getTransactionByFilter($customId, $amount, $date, $offset, $limit)
    {
        $query = $this->getEntityManager()->createQuery(
            "
                SELECT tr
                FROM AppBundle:Transaction tr
                WHERE tr.customId = :customId
                AND tr.amount = :amount
                AND tr.date = :date
            "
        )->setFirstResult($offset)->setMaxResults($limit);

        $query->setParameters(
            array('customId' => $customId, 'amount' => $amount, 'date' => $date)
        );
        return $query->getResult();
    }
}
