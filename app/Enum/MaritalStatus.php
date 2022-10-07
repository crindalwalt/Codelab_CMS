<?php

namespace App\Enum;

enum MaritalStatus:string
{
    case SINGLE = 'Single';
    case MARRIED = 'Married';
    case DIVORCED = 'Divorced';
}
