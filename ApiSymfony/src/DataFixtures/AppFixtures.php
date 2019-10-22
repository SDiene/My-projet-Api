<?php

namespace App\DataFixtures;
use App\Entity\User;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
    $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
        $user = new User();
            
            $user->setUsername('yahya@');
            $password=$this->encoder->encodePassword($user, '01234');
            $user->setPassword($password);
            $user->setRoles(['ROLE_SUPER_ADMIN']);
            $user->setNom('ly');
            $user->setPrenom('ya');
            $user->setProfile('admin');
            $user->setStatus('actif');
            $user->setImageName('senego.jpeg');
            $user->setUpdatedAt(new \DateTime());

        $manager->persist($user);
        $manager->flush();
    }
}
