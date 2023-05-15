<?php

namespace CodeHqDk\RepositoryInformation\ExamplePlugin\Factory;

use CodeHqDk\RepositoryInformation\Factory\InformationFactory;
use CodeHqDk\RepositoryInformation\ExamplePlugin\InformationBlocks\HelloWorldInformationBlock;
use CodeHqDk\RepositoryInformation\Model\RepositoryRequirements;

class HelloWorldInformationFactory implements InformationFactory
{
    public const DEFAULT_ENABLED_BLOCKS = [
        HelloWorldInformationBlock::class,
    ];

    public function createBlocks(string $local_path_to_code, array $information_block_types_to_create = self::DEFAULT_ENABLED_BLOCKS): array
    {
        if (!in_array(HelloWorldInformationBlock::class, $information_block_types_to_create)) {
            return [];
        }

        return [
            new HelloWorldInformationBlock(
                'Information plugin exmaple',
                'Hello World',
                'This is the famous Hello World',
                time(),
                'Details from hello world...',
                'This is information from the Hello World Information Factory',
            )
        ];
    }

    public function getRepositoryRequirements(): RepositoryRequirements
    {
        return new RepositoryRequirements(false, false, false, false);
    }

    public function listAvailableInformationBlocks(): array
    {
        return [
            HelloWorldInformationBlock::class
        ];
    }
}
