<?php

namespace App\Enums;

enum PostStatus: string {
    case PUBLISHED = 'PUBLISHED';
    case DRAFT = 'DRAFT';
}
