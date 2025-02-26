<?php

declare(strict_types=1);

namespace App\DTO;

use Illuminate\Contracts\Support\Arrayable;

final readonly class InventoryResponseDTO implements Arrayable
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
        public array $tags = [],
        public ?string $message = null
    ) {
    }

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
