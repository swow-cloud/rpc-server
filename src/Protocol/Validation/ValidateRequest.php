<?php
/**
 * This file is part of SwowCloud
 * @license  https://github.com/swow-cloud/websocket-server/blob/main/LICENSE
 */

declare(strict_types=1);

namespace SwowCloud\RpcServer\Protocol\Validation;

/**
 * @psalm-import-type JSONRPC from RpcServer
 */
interface ValidateRequest
{
    /**
     * @psalm-param JSONRPC $payload
     *
     * @psalm-assert-if-true array{jsonrpc: string, method: string, params?: array|string|int|bool, id?: string|int} $payload
     */
    public function validate(array $payload): bool;
}
