<?php
/**
 * This file is part of SwowCloud
 * @license  https://github.com/swow-cloud/music-server/blob/main/LICENSE
 */

declare(strict_types=1);

namespace SwowCloud\RpcServer\Protocol\Validation;

use SwowCloud\RpcServer\Protocol\Version;

final class ValidateVersion implements ValidateRequest
{
    /**
     * {@inheritdoc}
     */
    public function validate(array $payload): bool
    {
        return isset($payload['jsonrpc']) && $payload['jsonrpc'] === Version::TWO;
    }
}
