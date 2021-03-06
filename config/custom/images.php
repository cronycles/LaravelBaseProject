<?php

$uploadedImagesPath = config('custom.cdnsite.path') . '/upload/images';

$uploadedImagesUrl = config('custom.cdnsite.url') . '/upload/images';
$imagesBaseUrl = config('custom.cdnsite.url') . '/images';

return [
    'uploadedImagePath' => $uploadedImagesPath,
    'uploadedImagesUrl' => $uploadedImagesUrl,

    'imagesBaseUrl' => $imagesBaseUrl,
    'partnersUrl' => $imagesBaseUrl . '/partners',

    'upload' => [
        'maxNumberOfFiles' => 10,
        'maxImagSize' => 1500
    ],

    'static' => [
        'defaultLazyPlaceholder' => $imagesBaseUrl . '/lazy-img-placeholder.png',
        'logoBlack' => $imagesBaseUrl . '/logo_black.svg',
        'socialsDefaultLogo' => $imagesBaseUrl . '/og_social_default_logo.jpg',
    ]
];
