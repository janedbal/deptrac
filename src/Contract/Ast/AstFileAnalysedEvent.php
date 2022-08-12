<?php

declare(strict_types=1);

namespace Qossmic\Deptrac\Contract\Ast;

use Symfony\Contracts\EventDispatcher\Event;

class AstFileAnalysedEvent extends Event
{
    public function __construct(private readonly string $file)
    {
    }

    public function getFile(): string
    {
        return $this->file;
    }
}
