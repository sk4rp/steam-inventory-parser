<?php

declare(strict_types=1);

namespace App\DTO;

final readonly class InventoryResponseDTO
{
    /**
     * @param bool $success
     * @param array<mixed> $items
     * @param array<mixed> $descriptions
     * @param string|null $message
     */
    public function __construct(
        public bool $success,
        public array $items = [],
        public array $descriptions  = [],
        public ?string $message = null
    ) {
    }
}
