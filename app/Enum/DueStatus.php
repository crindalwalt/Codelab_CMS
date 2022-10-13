<?php

namespace App\Enum;

enum DueStatus:string
{
    case PAID = 'Paid';
    case PENDING = 'Pending';
}
