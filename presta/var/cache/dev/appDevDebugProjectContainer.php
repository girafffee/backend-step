<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVnqhgex\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVnqhgex/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerVnqhgex.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerVnqhgex\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerVnqhgex\appDevDebugProjectContainer([
    'container.build_hash' => 'Vnqhgex',
    'container.build_id' => '41837f41',
    'container.build_time' => 1564332407,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVnqhgex');
