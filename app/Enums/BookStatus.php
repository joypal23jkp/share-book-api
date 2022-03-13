<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static NEW()
 * @method static OLD()
 */
final class BookStatus extends Enum
{
    const NEW =   'new';
    const OLD =   'old';
}
