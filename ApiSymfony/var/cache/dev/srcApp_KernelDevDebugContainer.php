<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPrMRlrq\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPrMRlrq/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPrMRlrq.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPrMRlrq\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPrMRlrq\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PrMRlrq',
    'container.build_id' => 'ee280519',
    'container.build_time' => 1572163767,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPrMRlrq');
