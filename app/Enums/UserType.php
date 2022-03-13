<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static USER()
 * @method static static ADMIN()
 */
final class UserType extends Enum
{
    const USER  =   0;
    const ADMIN =   1;
}
