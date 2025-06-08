<?php

namespace Pterodactyl\Repositories\Wings;

use Pterodactyl\Models\Node;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;

class DaemonConfigurationRepository extends DaemonRepository
{
    /**
     * Returns system information from the wings instance.
     *
     * @throws \Pterodactyl\Exceptions\Http\Connection\DaemonConnectionException
     */
    public function getSystemInformation(?int $version = null): array
    {
        return [];
    }

    /**
     * Updates the configuration information for a daemon. Updates the information for
     * this instance using a passed-in model. This allows us to change plenty of information
     * in the model, and still use the old, pre-update model to actually make the HTTP request.
     *
     * @throws \Pterodactyl\Exceptions\Http\Connection\DaemonConnectionException
     */
    public function update(Node $node): ResponseInterface
    {
        return new Response();
    }
}
