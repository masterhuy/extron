<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3xywxez\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3xywxez/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container3xywxez.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container3xywxez\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container3xywxez\appDevDebugProjectContainer(array(
    'container.build_hash' => '3xywxez',
    'container.build_id' => 'e2013afb',
    'container.build_time' => 1547613596,
), __DIR__.\DIRECTORY_SEPARATOR.'Container3xywxez');