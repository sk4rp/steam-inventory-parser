<?php

declare(strict_types=1);

namespace App\DTO;

use Illuminate\Contracts\Support\Arrayable;

final readonly class InventoryItemDTO implements Arrayable
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

    public function toArray(): array
    {
        return [
            'classId' => $this->classId,
            'instanceId' => $this->instanceId,
            'assetId' => $this->assetId
        ];
    }
}
