<?php

namespace Pterodactyl\Repositories\Wings;

use Illuminate\Http\Response;

class DummyHttpClient
{
    public function __call(string $name, array $arguments): Response
    {
        return new Response('', 200);
    }
}
