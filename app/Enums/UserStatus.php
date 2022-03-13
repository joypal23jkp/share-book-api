<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static ACTIVE()
 * @method static DEACTIVE()
 * @method static BLOCKED()
 */
final class UserStatus extends Enum
{
    const ACTIVE    =   0;
    const DEACTIVE  =   1;
    const BLOCKED   =   2;
}
