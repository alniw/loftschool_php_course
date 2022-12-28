<?php

require '../../vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('mem.jpg');
$img->text('Loftschool php course alniw', $img->getWidth() - 10, $img->getHeight() - 10, function (Intervention\Image\AbstractFont $font) {
    $font->size(36);
    $font->file('Freedom-10eM.ttf');
    $font->color([7, 99, 38, 1]);
    $font->align('right');
    $font->valign('bottom');
});
$img->resize(200, null, function (Intervention\Image\Constraint $constraint) {
    $constraint->aspectRatio();
});



$img->save('mem_edited.jpg');

echo $img->response('jpg');
