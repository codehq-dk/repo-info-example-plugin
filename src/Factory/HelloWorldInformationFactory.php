<?php

namespace RepositoryInformation\Factory;

use RepositoryInformation\Model\InformationBlock;
use RepositoryInformation\Model\RepositoryRequirements;

class HelloWorldInformationFactory implements InformationFactory
{

    public function createBlocks(string $local_path_to_code): array
    {
        return [
            new InformationBlock(
                'hello-world-example',
                'This is the famous Hello World',
                self::class,
                time(),
                'Hello world',
                'This is information from the Hello World Information Factory',
            )
        ];
    }

    public function getRepositoryRequirements(): RepositoryRequirements
    {
        return new RepositoryRequirements(false, false, false, false);
    }
}