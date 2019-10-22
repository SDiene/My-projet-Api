<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.5U4mfWm' shared service.

return $this->privates['.service_locator.5U4mfWm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'compte' => ['privates', 'App\\Repository\\CompteRepository', 'getCompteRepositoryService.php', true],
    'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'partenaire' => ['privates', 'App\\Repository\\PartenaireRepository', 'getPartenaireRepositoryService.php', true],
    'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService.php', true],
    'serializer' => ['services', 'serializer', 'getSerializerService', false],
    'user' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
    'validator' => ['services', 'validator', 'getValidatorService', false],
], [
    'compte' => 'App\\Repository\\CompteRepository',
    'em' => '?',
    'partenaire' => 'App\\Repository\\PartenaireRepository',
    'passwordEncoder' => '?',
    'serializer' => '?',
    'user' => 'App\\Repository\\UserRepository',
    'validator' => '?',
]);
