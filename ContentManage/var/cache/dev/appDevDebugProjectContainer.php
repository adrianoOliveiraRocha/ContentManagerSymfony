<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5loxz4g\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5loxz4g/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container5loxz4g.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container5loxz4g\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container5loxz4g\appDevDebugProjectContainer(array(
    'container.build_hash' => '5loxz4g',
    'container.build_id' => 'a652835c',
    'container.build_time' => 1532697863,
), __DIR__.\DIRECTORY_SEPARATOR.'Container5loxz4g');
