<?php

declare(strict_types=1);

namespace App\DTO;

final readonly class InventoryItemDTO
{
    public function __construct(
        public string $classId,
        public string $instanceId,
        public string $assetId
    ) {
    }

    /**
     * @param array<mixed> $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            classId: $data['classid'],
            instanceId: $data['instanceid'],
            assetId: $data['assetid']
        );
    }
}
