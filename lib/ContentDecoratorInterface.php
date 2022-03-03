<?php

declare(strict_types=1);

namespace Slam\OpenspoutHelper;

interface ContentDecoratorInterface extends CellStyleInterface
{
    public function decorate(?string $content): ?string;
}
