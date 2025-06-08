<?php

namespace Pterodactyl\Repositories\Wings;

use Pterodactyl\Models\Node;
use Webmozart\Assert\Assert;
use Pterodactyl\Models\Server;
use Illuminate\Contracts\Foundation\Application;
use Pterodactyl\Repositories\Wings\DummyHttpClient;

abstract class DaemonRepository
{
    protected ?Server $server;

    protected ?Node $node;

    /**
     * DaemonRepository constructor.
     */
    public function __construct(protected Application $app)
    {
    }

    /**
     * Set the server model this request is stemming from.
     */
    public function setServer(Server $server): self
    {
        $this->server = $server;

        $this->setNode($this->server->node);

        return $this;
    }

    /**
     * Set the node model this request is stemming from.
     */
    public function setNode(Node $node): self
    {
        $this->node = $node;

        return $this;
    }

    /**
     * Return an instance of the Guzzle HTTP Client to be used for requests.
     */
    public function getHttpClient(array $headers = []): DummyHttpClient
    {
        // Wings integration removed, return a dummy client.
        return new DummyHttpClient();
    }
}
