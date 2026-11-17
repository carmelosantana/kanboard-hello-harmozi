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
        $this->assertSame('>=1.2.47', $plugin->getCompatibleVersion());
        $this->assertNotEmpty($plugin->getPluginDescription());
    }

    public function testPluginVersionComesFromPluginJson()
    {
        $plugin = new Plugin($this->container);
        $json = json_decode(file_get_contents(dirname(__DIR__) . '/plugin.json'), true);
        $this->assertSame($json['version'], $plugin->getPluginVersion());
        $this->assertDoesNotMatchRegularExpression(
            "/function getPluginVersion\\(\\)[^{]*\\{[^}]*'\\d+\\.\\d+/",
            file_get_contents(dirname(__DIR__) . '/Plugin.php'),
            'getPluginVersion() reads plugin.json; the version lives only there'
        );
    }

    public function testInitializeRuns()
    {
        $plugin = new Plugin($this->container);
        $plugin->initialize();
        $this->assertTrue(true); // hooks registered without error
    }
}
