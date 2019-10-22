<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_api_doc.describers.api_platform' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Describer/DescriberInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Describer/ExternalDocDescriber.php';
include_once $this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Describer/ApiPlatformDescriber.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Documentation/Documentation.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/Request.php';

return $this->privates['nelmio_api_doc.describers.api_platform'] = new \Nelmio\ApiDocBundle\Describer\ApiPlatformDescriber(($this->services['api_platform.action.documentation'] ?? $this->load('getApiPlatform_Action_DocumentationService.php'))->__invoke(new \Symfony\Component\HttpFoundation\Request()), ($this->privates['api_platform.swagger.normalizer.api_gateway'] ?? $this->getApiPlatform_Swagger_Normalizer_ApiGatewayService()));
