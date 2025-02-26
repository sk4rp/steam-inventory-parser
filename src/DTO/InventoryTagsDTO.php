<?php

declare(strict_types=1);

namespace App\DTO;

use Illuminate\Contracts\Support\Arrayable;

final readonly class InventoryTagsDTO implements Arrayable
{
    public function __construct(
        public ?string $category,
        public ?string $internal_name,
        public ?string $localized_category_name,
        public ?string $localized_tag_name,
        public ?string $color,
    ) {
    }
    public static function fromArray(array $data): self
    {
        return new self(
            category: $data['category'] ?? '',
            internal_name: $data['internal_name'] ?? '',
            localized_category_name: $data['localized_category_name'] ?? '',
            localized_tag_name: $data['localized_tag_name'] ?? '',
            color: $data['color'] ?? ''
        );
    }

    public function toArray(): array
    {
        return [
            'category' => $this->category,
            'internal_name' => $this->internal_name,
            'localized_category_name' => $this->localized_category_name,
            'localized_tag_name' => $this->localized_tag_name,
            'color' => $this->color,
        ];
    }
}
