<?php

declare(strict_types=1);

namespace App\DTO;

use Illuminate\Contracts\Support\Arrayable;

/**
 * @implements Arrayable<string, int|string|null>
 */
final readonly class InventoryItemDTO implements Arrayable
{
    public function __construct(
        public string $classId,
        public string $instanceId,
        public string $assetId,
        public string $amount,
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
            assetId: $data['assetid'],
            amount: $data['amount']
        );
    }

    /**
     * @return array<string, string|null>
     */
    public function toArray(): array
    {
        return [
            'classId' => $this->classId,
            'instanceId' => $this->instanceId,
            'assetId' => $this->assetId,
            'amount' => $this->amount,
        ];
    }
}
