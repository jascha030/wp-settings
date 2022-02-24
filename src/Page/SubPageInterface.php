<?php

declare(strict_types=1);

namespace Jascha030\WpSettings\Page;

interface SubPageInterface extends PageInterface
{
    public function getParentSlug(): string;
}
