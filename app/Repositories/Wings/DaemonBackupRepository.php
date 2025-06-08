<?php

namespace Pterodactyl\Repositories\Wings;

use Pterodactyl\Models\Backup;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;

class DaemonBackupRepository extends DaemonRepository
{
    protected ?string $adapter;

    /**
     * Sets the backup adapter for this execution instance.
     */
    public function setBackupAdapter(string $adapter): self
    {
        $this->adapter = $adapter;

        return $this;
    }

    /**
     * Tells the remote daemon to begin generating a backup for the server.
     */
    public function backup(Backup $backup): ResponseInterface
    {
        return new Response();
    }

    /**
     * Sends a request to begin restoring a backup for a server.
     */
    public function restore(Backup $backup, string $url = null, bool $truncate = false): ResponseInterface
    {
        return new Response();
    }

    /**
     * Deletes a backup.
     */
    public function delete(Backup $backup): ResponseInterface
    {
        return new Response();
    }
}
