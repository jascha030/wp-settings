<?php

declare(strict_types=1);

namespace Jascha030\WpSettings\Name;

interface SluggableInterface
{
    public function getSlug(): string;
}
