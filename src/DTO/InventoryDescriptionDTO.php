<?php

declare(strict_types=1);

namespace App\DTO;

final readonly class InventoryDescriptionDTO
{
    public function __construct(
        public string $classId,
        public ?string $inspectLink = null
    ) {
    }

    /**
     * @param array<mixed> $data
     */
    public static function fromArray(array $data): self
    {
        $inspectLink = null;

        if (!empty($data['actions'][0]['link'])) {
            $inspectLink = $data['actions'][0]['link'];
        }

        return new self(
            classId: $data['classid'],
            inspectLink: $inspectLink
        );
    }
}
