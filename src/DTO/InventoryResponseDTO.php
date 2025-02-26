<?php

declare(strict_types=1);

namespace App\DTO;

use Illuminate\Contracts\Support\Arrayable;

/**
 * @implements Arrayable<string, bool|string|null|array<mixed>>
 */
final readonly class InventoryResponseDTO implements Arrayable
{
    /**
     * @param bool $success
     * @param array<mixed> $items
     * @param array<mixed> $descriptions
     * @param array<mixed> $tags
     * @param string|null $message
     */
    public function __construct(
        public bool $success,
        public array $items = [],
        public array $descriptions  = [],
        public array $tags = [],
        public ?string $message = null
    ) {
    }

    /**
     * @return array<string, bool|string|null|array<mixed>>
     */
    public function toArray(): array
    {
        return [
            'success' => $this->success,
            'items' => $this->items,
            'descriptions' => $this->descriptions,
            'tags' => $this->tags,
            'message' => $this->message,
        ];
    }
}
