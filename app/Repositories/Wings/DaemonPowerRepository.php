<?php

namespace Pterodactyl\Repositories\Wings;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;

class DaemonPowerRepository extends DaemonRepository
{
    /**
     * Sends a power action to the server instance.
     */
    public function send(string $action): ResponseInterface
    {
        // Wings integration removed.
        return new Response();
    }
}
