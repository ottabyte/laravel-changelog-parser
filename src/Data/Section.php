<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\ChangelogParser\Data;

final class Section
{
    public const ADDED = 'Added';

    public const CHANGED = 'Changed';

    public const FIXED = 'Fixed';

    public const DEPRECATED = 'Deprecated';

    public const REMOVED = 'Removed';

    public const SECURITY = 'Security';

    public function __construct(
        private readonly string $type,
        private readonly array $items,
        private readonly ?string $description = null,
    ) {}

    public function getType(): string
    {
        return $this->type;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
