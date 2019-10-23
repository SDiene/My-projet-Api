<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Form\TransactionType;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TransactionRepository;
use App\Repository\CompteRepository;
use Symfony\Flex\Response;

/**
 * @Route("/api", name="api")
 */
class TransactionController extends AbstractController
{
    /** 
     * @Route("/envoie", name="add_envoie", methods={"POST", "GET"})
     * @IsGranted("ROLE_USER")
    */

    public function addTransaction(Request $request, UserRepository $user,CompteRepository $compte,EntityManagerInterface $entityManager)
    {
            $envoie = new Transaction();

            $form=$this->createForm(TransactionType::class,$envoie);
            $form->handleRequest($request);
            $values=$request->request->all();
            $form->submit($values);
            
            while (true) {
                if (time() % 1 == 0) {
                    $alea = rand(100,1000000);
                    break;
                }else {
                    slep(1);
                }
            }

            $envoie->setCode($alea);
            $envoie->setType("envoie");
            $envoie->setDateEnvoie(new \Datetime());
            $util = $this->getUser();
            $envoie->setUser($util);

            $cpte = $util->getCompte();
            $envoie->setCompte($cpte);

            
            $valeur = $form->get('montant')->getData();
                       
            $tarif = $this->getDoctrine()->getRepository(Tarifs::class)->findAll();

            foreach($tarif as $values) {

                $values->getBorneinferieur();
                $values->getBornesuperieur();
                $values->getValeur();
            
            if($valeur >= $values->getBorneInferieur() && $valeur <= $values->getBorneSuperieur() ){

                $com=$values->getValeur();
                $envoie->setFrais($com);

                $envoie->setCometat(($com*30)/100);
                $envoie->setComsystem(($com*40)/100); 
                $envoie->setComenvoie(($com*10)/100);
                $envoie->setComretrait(($com*20)/100);
            }
           
            }
            
            if($cpte->getSolde() > $envoie->getMontant() ){

                $montant = $cpte->getSolde() - $envoie->getMontant() + $envoie->getComenvoie();
                
                $cpte->setSolde($montant);

                $entityManager->persist($cpte);
                $entityManager->persist($envoie);
                $entityManager->flush();
           
                return new Response('Le transfert a été effectué avec succés. Voici le code : '.$envoie->getCode());
            
            }
            else{
    
                return new Response('Le solde de votre compte ne vous permet d effectuer une transaction');
            }
                  
    }

    /*
     * @Route("/retrait", name="add_retrait" ,methods={"POST", "GET"})
     */

    public function retrait(Request $request, EntityManagerInterface $entityManager, TransactionRepository $transaction)
    {

        $trans = new Transaction();
        $form = $this->createForm(TransactionType::class, $trans);
        $user = $this->getUser();
        $data = $request->request->all();
        $form->submit($data); 
        $code=$data['code'];

        $trouve=$transaction->findOneBy(['code' =>$code]);
        
        if (!$trouve) {
            return new Response('Le code saisi est incorecte .Veuillez ressayer un autre  ');
        } 
        
        $statut=$trouve->getType();

        if($trouve->getCode()== $code && $statut=="retrait"){
            return new Response('Le code saisi est déjà retiré  ');

        }

        $trouve->setCniEx($data["cni"]);

        $trouve->setDateRetrait(new \DateTime());

        $trouve->setType("retrait");
        $trouve->setUser($user);

        $entityManager->flush();
        
        return new Response('Vous venez de retirer  ' . $trouve->getMontant());
        
    }

    /** 
     * @Route("/liste_transaction", name="list_transaction", methods={"GET", "POST"})
     */
    
    public function index(TransactionRepository $trans, SerializerInterface $serializer)
    {
        $transac = $trans->findAll();
        $data = $serializer->serialize($transac, 'json', [
            'groups' => ['show']
        ]);

        return new JsonResponse($data, 200);
    }
 
  } 