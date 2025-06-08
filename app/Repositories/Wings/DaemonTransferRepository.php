<?php

namespace Pterodactyl\Repositories\Wings;

use Pterodactyl\Models\Node;
use Lcobucci\JWT\Token\Plain;

class DaemonTransferRepository extends DaemonRepository
{
    public function notify(Node $targetNode, Plain $token): void
    {
        // no-op
    }
}
