<?php
/**
 * This file is part of SwowCloud
 * @license  https://github.com/swow-cloud/websocket-server/blob/main/LICENSE
 */

declare(strict_types=1);

namespace SwowCloud\RpcServer;

interface RpcHandler
{
    /**
     * @param \SwowCloud\RpcServer\RpcRequest $request
     * @param null|\SwowCloud\RpcServer\RpcResponse $response
     *
     * @return null|\SwowCloud\RpcServer\RpcResponse
     */
    public function handle(RpcRequest $request, ?RpcResponse $response = null): ?RpcResponse;
}
