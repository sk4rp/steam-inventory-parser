<?php

declare(strict_types=1);

namespace App\DTO;

use Illuminate\Contracts\Support\Arrayable;

/**
 * @implements Arrayable<string, int|string|null>
 */
final readonly class InventoryDescriptionDTO implements Arrayable
{
    public function __construct(
        public int $appId,
        public string $classId,
        public string $instanceId,
        public int $currency,
        public string $name,
        public string $market_hash_name,
        public string $background_color,
        public string $icon_url,
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
            appId: $data['appid'],
            classId: $data['classid'],
            instanceId: $data['instanceid'],
            currency: $data['currency'],
            name: $data['name'],
            market_hash_name: $data['market_hash_name'],
            background_color: $data['background_color'],
            icon_url: $data['icon_url'],
            inspectLink: $inspectLink
        );
    }

    public function toArray(): array
    {
        return [
            'appId' => $this->appId,
            'classId' => $this->classId,
            'instanceId' => $this->instanceId,
            'currency' => $this->currency,
            'name' => $this->name,
            'market_hash_name' => $this->market_hash_name,
            'background_color' => $this->background_color,
            'icon_url' => $this->icon_url,
            'inspectLink' => $this->inspectLink,
        ];
    }
}
