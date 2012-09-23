<?php

namespace spec\MageTest\MagentoExtension\Service\Cache;

use PHPSpec2\Specification;

$mage = new \Mage_Core_Model_App;

class ConfigurationCache implements Specification
{
    function described_with($mageApp)
    {
        $mageApp->isAMockOf("\Mage_Core_Model_App");
        $this->configurationCache->isAnInstanceOf(
            'MageTest\MagentoExtension\Service\Cache\ConfigurationCache',
            array($mageApp));
    }
    
    function it_should_clear_the_configuration_cache($mageApp, $cacheInstance)
    {
        $cacheInstance->isAMockOf("Mage_Core_Model_Cache")
            ->flush()
            ->shouldBeCalled();
        $mageApp->getCacheInstance(array('configuration'))
            ->willReturn($cacheInstance);
        $this->configurationCache->clear();
    }
}