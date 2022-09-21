<?php

namespace App\Enum;

enum UserRoles:string
{
    case ADMIN = 'admin';
    case VISITOR = 'visitor';
    case STUDENT = 'student';
    case STAFF = 'staff';
}
