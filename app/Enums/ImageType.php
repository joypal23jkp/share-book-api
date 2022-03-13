<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static ACTIVE()
 * @method static DEACTIVE()
 * @method static BLOCKED()
 */
final class ImageType extends Enum
{
    const PRIMARY    =   'P';
    const SECONDARY  =   'S';
}
