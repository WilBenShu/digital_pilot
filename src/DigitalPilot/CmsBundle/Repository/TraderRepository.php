<?php

namespace DigitalPilot\CmsBundle\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;

/**
 * TraderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TraderRepository extends DocumentRepository
{
    public function findOneByEmail($email)
    {
        return $this->createQueryBuilder('Customer')
            ->field('email')->equals($email)
            ->getQuery()
            ->getSingleResult();
    }

    public function updateOneByMail($email, $firstName, $lastName, $phone, $portable, $address, $company, $companySize, $companyAddress)
    {
        return $this->createQueryBuilder('Customer')
            ->findAndUpdate()
            ->returnNew()
            ->field('email')->equals($email)

            // Update found Trader
            ->field('firstName')->set($firstName)
            ->field('lastName')->set($lastName)
            ->field('phone')->set($phone)
            ->field('portable')->set($portable)
            ->field('address')->set($address)
            ->field('company')->set($company)
            ->field('companySize')->set($companySize)
            ->field('companyAddress')->set($companyAddress)
            ->getQuery()
            ->execute();
    }

}