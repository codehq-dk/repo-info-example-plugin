<?php

namespace RepositoryInformation\Provider;

use RepositoryInformation\Factory\HelloWorldInformationFactory;
use RepositoryInformation\Factory\InformationFactoryProvider;
use RepositoryInformation\Service\ProviderDependencyService;

class HelloWorldInformationFactoryProvider implements InformationFactoryProvider
{

    public function addFactory(ProviderDependencyService $provider_dependency_service): void
    {
        $provider_dependency_service->registerClassInDependencyContainer(HelloWorldInformationFactory::class);
        $provider_dependency_service->addInformactionFactoryToRegistry(new HelloWorldInformationFactory());
    }
}