<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB0x35VT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB0x35VT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerB0x35VT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerB0x35VT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerB0x35VT\App_KernelDevDebugContainer([
    'container.build_hash' => 'B0x35VT',
    'container.build_id' => '32edab5b',
    'container.build_time' => 1691363942,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB0x35VT');
