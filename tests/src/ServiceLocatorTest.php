<?php

namespace marvin255\bxcodegen\tests;

use marvin255\bxcodegen\ServiceLocator;

/**
 * Тесты для service locator.
 */
class ServiceLocatorTest extends BaseCase
{
    /**
     * @test
     */
    public function testResolve()
    {
        $service = $this->getMockBuilder('\\marvin255\\bxcodegen\\ServiceLocatorInterface')
            ->getMock();
        $serviceClass = get_class($service);

        $locator = new ServiceLocator;
        $locator->register($service);

        $this->assertSame($service, $locator->resolve($serviceClass));
    }
}
