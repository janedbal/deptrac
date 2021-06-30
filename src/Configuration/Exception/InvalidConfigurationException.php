<?php

declare(strict_types=1);

namespace Qossmic\Deptrac\Configuration\Exception;

use InvalidArgumentException;

final class InvalidConfigurationException extends InvalidArgumentException
{
    public static function fromDuplicateLayerNames(string ...$layerNames): self
    {
        natsort($layerNames);

        return new self(sprintf(
            'Configuration can not contain multiple layers with the same name, got "%s" as duplicate.',
            implode('", "', $layerNames)
        ));
    }

    public static function fromUnknownLayerNames(string ...$layerNames): self
    {
        natsort($layerNames);

        return new self(sprintf(
            'Configuration can not reference rule sets with unknown layer names, got "%s" as unknown.',
            implode('", "', $layerNames)
        ));
    }
}
