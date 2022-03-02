<?php
/**
 * This file is part of SwowCloud
 * @license  https://github.com/swow-cloud/music-server/blob/main/LICENSE
 */

declare(strict_types=1);

namespace SwowCloud\RpcServer\Protocol\Validation;

final class RequestValidator implements ValidateRequest
{
    /**
     * @var ValidateRequest[]
     */
    private array $validators;

    public function __construct(ValidateRequest ...$validators)
    {
        $this->validators = $validators;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(array $payload): bool
    {
        foreach ($this->validators as $validator) {
            if ($validator->validate($payload) === false) {
                return false;
            }
        }

        return true;
    }
}
