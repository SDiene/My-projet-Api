<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Entity\Tarifs;
use App\Form\FraisType;
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
    */

    public function addTransaction(Request $request,EntityManagerInterface $entityManager)
    {
            $envoie = new Transaction();

            $form=$this->createForm(TransactionType::class,$envoie);
            $form->handleRequest($request);
            $values=$request->request->all();
            $form->submit($values);
            
            while (true) {
                if (time() % 1 == 0) {
                    $alea = rand(100,100000000);
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

                $envoie->setCometat($com*0.3);
                $envoie->setComsystem($com*0.4); 
                $envoie->setComenvoie($com*0.1);
                $envoie->setComretrait($com*0.2);
            }
           
            }
            
            if($cpte->getSolde() > $envoie->getMontant() ){

                $montant = $cpte->getSolde() - $envoie->getMontant() + $envoie->getComenvoie();
                
                $cpte->setSolde($montant);

                $entityManager->persist($cpte);
                $entityManager->persist($envoie);
                $entityManager->flush();
           
                return new JsonResponse('Le transfert a été effectué avec succés. Voici le code : '.$envoie->getCode());
            
            }
            else{
    
                return new JsonResponse('Le solde de votre compte ne vous permet d effectuer une transaction');
            }
                  
    }

    /**
     * @Route("/retrait", name="add_retrait" ,methods={"POST", "GET"})
    */

    public function retrait(Request $request, EntityManagerInterface $entityManager, TransactionRepository $transaction)
    {

        $trans = new Transaction();
        $form = $this->createForm(TransactionType::class, $trans);
        
        $data = $request->request->all();
        $form->submit($data); 
        $user = $this->getUser();
        $code=$data['code'];

        $trouve=$transaction->findOneBy(['code' =>$code]);
        
        if (!$trouve) {
            return new JsonResponse('Le code saisi est incorecte .Veuillez ressayer un autre  ');
        } 
        
        $statut=$trouve->getType();

        if($trouve->getCode()== $code && $statut=="retrait"){
            return new JsonResponse('Le code saisi est déjà retiré  ');

        }

        $trouve->setCniEx($data["cni"]);

        $trouve->setDateRetrait(new \DateTime());

        $trouve->setType("retrait");
        $trouve->setUser($user);

        $entityManager->flush();
        
        return new JsonResponse('Vous venez de retirer  ' . $trouve->getMontant());
        
    }

    /**
     * @Route("/keyup", name="add_keyup" ,methods={"POST", "GET"})
    */
    public function commission(Request $request)
    {
        $trans = new Transaction();
        $form = $this->createForm(FraisType::class, $trans);
        $data = $request->request->all();
        $form->submit($data);

        $valeur = $form->get('montant')->getData();
        $tarif = $this->getDoctrine()->getRepository(Tarifs::class)->findAll();
        $com=0;
        foreach($tarif as $values) {

            $values->getBorneinferieur();
            $values->getBornesuperieur();
            $values->getValeur();
        
        if($valeur >= $values->getBorneInferieur() && $valeur <= $values->getBorneSuperieur() ){
            $com=$values->getValeur();
        }
       
        }
        return new JsonResponse($com);
    }

    // lister tous les transactions qui existent dans la base de donnée 

    /** 
     * @Route("/liste_transaction", name="liste_transaction", methods={"GET", "POST"})
     
    
    public function Operation(TransactionRepository $trans, SerializerInterface $serializer)
    {
        $transac = $trans->findAll();
        $data = $serializer->serialize($transac, 'json', [
            'groups' => ['show']
        ]);

        return new JsonResponse($data, 200);
    }*/

    /**
     * @Route("/transactions", name="transactions", methods={"GET", "POST"})
    

    public function Transaction(TransactionRepository $transRepository, SerializerInterface $serializer)
    {
        
        $user= $this->getUser()->getId();
       
        $partenaire  = $transRepository->findBy(['user' =>$user]);
        $data = $serializer->serialize($partenaire, 'json',['groups' => ['show']]);
        return new JsonResponse($data, 200);
    }*/

    // Lister les transactions par date 

    public $dateFrom;
    private $dateTo;
    public function __construct()
    {
        $this->dateFrom = 'dateFrom';
        $this->dateTo = 'dateTo';
    }

    /** 
     * @Route("/lister_transaction", name="lister_transaction", methods={"GET", "POST"})
     */

    public function trans(Request $request, TransactionRepository $trans, SerializerInterface $serializer)
    {
        $user = $this->getUser();
        $values = json_decode($request->getContent());

        if (!$values) {
            $values= $request ->request->all();
        }
        $debut = new \DateTime($values->dateFrom);
        $fin = new \DateTime($values->dateTo);

        try {
            $repo1 = $this->getDoctrine()->getRepository(Transaction::class);
            $detail = $repo1->getByDate($debut, $fin, $user);
            if ($detail == []) {
                return $this->json([
                    'message' => 'aucune transaction pour cette intervale! verifier la date'
                ]);
            }
        } catch (ParseException $exception) {
            $exception = [
                'status' => 500,
                'message' => 'Vous devez renseignes tous les champs'
            ];
            return new JsonResponse($exception, 500);
        }
        $data = $serializer->serialize($detail, 'json', ['groups' => ['show']]);
    
        return new JsonResponse($data, 200);
    }

}  