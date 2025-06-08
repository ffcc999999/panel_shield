<?php

namespace Pterodactyl\Repositories\Wings;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;

class DaemonFileRepository extends DaemonRepository
{
    public function getContent(string $path, int $notLargerThan = null): string
    {
        return '';
    }

    public function putContent(string $path, string $content): ResponseInterface
    {
        return new Response();
    }

    public function getDirectory(string $path): array
    {
        return [];
    }

    public function createDirectory(string $name, string $path): ResponseInterface
    {
        return new Response();
    }

    public function renameFiles(?string $root, array $files): ResponseInterface
    {
        return new Response();
    }

    public function copyFile(string $location): ResponseInterface
    {
        return new Response();
    }

    public function deleteFiles(?string $root, array $files): ResponseInterface
    {
        return new Response();
    }

    public function compressFiles(?string $root, array $files): array
    {
        return [];
    }

    public function decompressFile(?string $root, string $file): ResponseInterface
    {
        return new Response();
    }

    public function chmodFiles(?string $root, array $files): ResponseInterface
    {
        return new Response();
    }

    public function pull(string $url, ?string $directory, array $params = []): ResponseInterface
    {
        return new Response();
    }
}
