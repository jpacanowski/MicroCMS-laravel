<?php

namespace App\Enums;

enum UserStatus: string {
    case READER = 'READER';
    case AUTHOR = 'AUTHOR';
    case ADMIN = 'ADMIN';
}
