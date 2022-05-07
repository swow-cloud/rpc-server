<?php
/**
 * This file is part of SwowCloud
 * @license  https://github.com/swow-cloud/websocket-server/blob/main/LICENSE
 */

declare(strict_types=1);

namespace SwowCloud\RpcServer\Protocol\Validation;

final class ValidateId implements ValidateRequest
{
    /**
     * {@inheritdoc}
     */
    public function validate(array $payload): bool
    {
        /* @psalm-suppress RedundantConditionGivenDocblockType */
        return !isset($payload['id']) || \is_string($payload['id']) || \is_int($payload['id']);
    }
}
