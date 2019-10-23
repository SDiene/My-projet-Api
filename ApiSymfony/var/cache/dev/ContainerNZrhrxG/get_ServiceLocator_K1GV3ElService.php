<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.K1GV3El' shared service.

return $this->privates['.service_locator.K1GV3El'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'partenaire' => ['privates', 'App\\Repository\\PartenaireRepository', 'getPartenaireRepositoryService.php', true],
    'serializer' => ['services', 'serializer', 'getSerializerService', false],
    'validator' => ['services', 'validator', 'getValidatorService', false],
], [
    'entityManager' => '?',
    'partenaire' => 'App\\Repository\\PartenaireRepository',
    'serializer' => '?',
    'validator' => '?',
]);