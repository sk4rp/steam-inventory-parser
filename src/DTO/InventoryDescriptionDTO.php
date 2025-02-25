<?php

declare(strict_types=1);

namespace App\DTO;

use Illuminate\Contracts\Support\Arrayable;

final readonly class InventoryDescriptionDTO implements Arrayable
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

    public function toArray(): array
    {
        return [
            'classId' => $this->classId,
            'inspectLink' => $this->inspectLink,
        ];
    }
}
