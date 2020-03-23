<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\MemberThema;
use App\Repository\MemberThemaRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class MemberThemaController extends AbstractController
{
    /**
     * @Route("/memberthema", name="member_thema")
     */
  
    public function createMemberThema(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $memberThema = new MemberThema();
        $memberThema->setMemberId(1);
        $memberThema->setThemaId(1);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($memberThema);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$memberThema->getId());
    }

    /**
     * @Route("/memberthema/{id}", name="product_show")
     */
    public function show($id, MemberThemaRepository $MemberThemaRepository)
    {
        $memberThema = $MemberThemaRepository
            ->findByExampleField($id);
/*
        $memberThema = $MemberThemaRepository->findOneBy([
            'memberId' => $id,
        ]);
*/
//var_dump($memberThema);
//die;


        return new Response('Check out this great product: '.$memberThema[0]->getMemberId());
        // ...
    }


}
