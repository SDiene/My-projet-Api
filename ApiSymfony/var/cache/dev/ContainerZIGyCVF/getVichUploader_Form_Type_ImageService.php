<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'vich_uploader.form.type.image' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Form/Type/VichFileType.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Form/Type/VichImageType.php';

return $this->services['vich_uploader.form.type.image'] = new \Vich\UploaderBundle\Form\Type\VichImageType(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()), ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService()), ($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->services['easyadmin.property_accessor'] ?? $this->getEasyadmin_PropertyAccessorService()), NULL);
