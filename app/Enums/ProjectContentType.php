<?php

namespace App\Enums;

enum ProjectContentType: string
{
    case OBJECTIVES = 'objectives';
    case IMAGE = 'image';
    case LIST = 'list';
    case TEXT_IMAGE = 'text_image';
    case RESULTS = 'results';
}
