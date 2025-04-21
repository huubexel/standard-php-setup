<?php

declare(strict_types=1);

namespace src\model;

enum HttpStatusCodes: int
{

    case OK = 200;
    case FORBIDDEN = 403;
    case NOT_FOUND = 404;
    case INTERNAL_SERVER_ERROR = 500;
    case BAD_GATEWAY = 502;
    case GATEWAY_TIMEOUT = 504;

}
