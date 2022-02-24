<?php

declare(strict_types=1);

namespace Jascha030\WpSettings\Page;

use Jascha030\WpSettings\Name\SluggableInterface;
use Jascha030\WpSettings\Name\TitledInterface;

interface PageInterface extends TitledInterface, SluggableInterface
{
    public function getCapability(): string;

    public function getMenuTitle(): ?string;

    public function getPosition(): int;
}
