<?php

namespace Pterodactyl\Repositories\Wings;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;

class DaemonCommandRepository extends DaemonRepository
{
    /**
     * Sends a command or multiple commands to a running server instance.
     */
    public function send(array|string $command): ResponseInterface
    {
        return new Response();
    }
}
