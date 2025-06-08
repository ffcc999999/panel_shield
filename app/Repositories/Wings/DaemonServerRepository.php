<?php

namespace Pterodactyl\Repositories\Wings;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;

class DaemonServerRepository extends DaemonRepository
{
    /**
     * Returns details about a server from the Daemon instance.
     *
     * @throws \Pterodactyl\Exceptions\Http\Connection\DaemonConnectionException
     */
    public function getDetails(): array
    {
        return [];
    }

    /**
     * Creates a new server on the Wings daemon.
     *
     * @throws \Pterodactyl\Exceptions\Http\Connection\DaemonConnectionException
     */
    public function create(bool $startOnCompletion = true): void
    {
        // no-op
    }

    /**
     * Triggers a server sync on Wings.
     *
     * @throws \Pterodactyl\Exceptions\Http\Connection\DaemonConnectionException
     */
    public function sync(): void
    {
        // no-op
    }

    /**
     * Delete a server from the daemon, forcibly if passed.
     *
     * @throws \Pterodactyl\Exceptions\Http\Connection\DaemonConnectionException
     */
    public function delete(): void
    {
        // no-op
    }

    /**
     * Reinstall a server on the daemon.
     *
     * @throws \Pterodactyl\Exceptions\Http\Connection\DaemonConnectionException
     */
    public function reinstall(): void
    {
        // no-op
    }

    /**
     * Requests the daemon to create a full archive of the server. Once the daemon is finished
     * they will send a POST request to "/api/remote/servers/{uuid}/archive" with a boolean.
     *
     * @throws \Pterodactyl\Exceptions\Http\Connection\DaemonConnectionException
     */
    public function requestArchive(): void
    {
        // no-op
    }

    /**
     * Revokes a single user's JTI by using their ID. This is simply a helper function to
     * make it easier to revoke tokens on the fly. This ensures that the JTI key is formatted
     * correctly and avoids any costly mistakes in the codebase.
     *
     * @throws \Pterodactyl\Exceptions\Http\Connection\DaemonConnectionException
     */
    public function revokeUserJTI(int $id): void
    {
        // no-op
    }

    /**
     * Revokes an array of JWT JTI's by marking any token generated before the current time on
     * the Wings instance as being invalid.
     *
     * @throws \Pterodactyl\Exceptions\Http\Connection\DaemonConnectionException
     */
    protected function revokeJTIs(array $jtis): void
    {
        // no-op
    }
}
