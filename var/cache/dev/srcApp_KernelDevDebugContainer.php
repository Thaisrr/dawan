<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNgily86\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNgily86/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNgily86.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNgily86\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNgily86\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Ngily86',
    'container.build_id' => '7bda4d65',
    'container.build_time' => 1549875021,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNgily86');
