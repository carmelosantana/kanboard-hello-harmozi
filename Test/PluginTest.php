<?php

require_once 'tests/units/Base.php';

use KanboardTests\units\Base;
use Kanboard\Plugin\HelloHarmozi\Plugin;

class PluginTest extends Base
{
    public function testMetadata()
    {
        $plugin = new Plugin($this->container);
        $this->assertSame('HelloHarmozi', $plugin->getPluginName());
        $this->assertSame('1.0.0', $plugin->getPluginVersion());
        $this->assertSame('>=1.2.47', $plugin->getCompatibleVersion());
        $this->assertNotEmpty($plugin->getPluginDescription());
    }

    public function testInitializeRuns()
    {
        $plugin = new Plugin($this->container);
        $plugin->initialize();
        $this->assertTrue(true); // hooks registered without error
    }
}
