<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRgytars\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRgytars/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerRgytars.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerRgytars\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerRgytars\appProdProjectContainer(array(
    'container.build_hash' => 'Rgytars',
    'container.build_id' => '2aabb85a',
    'container.build_time' => 1551174772,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerRgytars');
