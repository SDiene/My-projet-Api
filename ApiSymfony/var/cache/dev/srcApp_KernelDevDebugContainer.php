<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNZrhrxG\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNZrhrxG/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNZrhrxG.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNZrhrxG\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNZrhrxG\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NZrhrxG',
    'container.build_id' => '2c863c97',
    'container.build_time' => 1571801811,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNZrhrxG');
