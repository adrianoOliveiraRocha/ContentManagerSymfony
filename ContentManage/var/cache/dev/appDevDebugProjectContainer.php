<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUqbriri\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUqbriri/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerUqbriri.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerUqbriri\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerUqbriri\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Uqbriri',
    'container.build_id' => '9f343a84',
    'container.build_time' => 1535376768,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerUqbriri');
