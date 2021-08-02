<?php

namespace Presentation\Helpers;

use Error;

function badRequest(Error $error): string
{
    return json_encode([
            'statusCode' => 400,
            'body' => $error->getMessage(),
        ]
    );
}

function success(String $data): string
{
    return json_encode([
            'statusCode' => 200,
            'body' => "Successful created: ${data}",
        ]
    );
}

function authorized(): string
{
    return json_encode([
            'statusCode' => 200,
            'body' => "Autorizado",
        ]
    );
}

function unauthorized(): string
{
    return json_encode([
            'statusCode' => 401,
            'body' => "Não Autorizado",
        ]
    );
}
