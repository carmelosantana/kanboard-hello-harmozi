<?php

namespace Kanboard\Plugin\HelloHarmozi;

use Kanboard\Core\Plugin\Base;

/**
 * Hello Harmozi — a Hello Dolly homage. Prints a random Alex Hormozi quote as a
 * quiet footer line on every page. No settings, no network.
 *
 * @author  Carmelo Santana
 * @license MIT
 */
class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', ['template' => 'plugins/HelloHarmozi/Assets/css/hello-harmozi.css']);
        $this->hook->on('template:layout:bottom', ['template' => 'HelloHarmozi:footer/quote']);
    }

    public function getPluginName(): string
    {
        return 'HelloHarmozi';
    }

    public function getPluginDescription(): string
    {
        return 'A random Alex Hormozi quote in your footer. A Hello Dolly homage.';
    }

    public function getPluginAuthor(): string
    {
        return 'Carmelo Santana';
    }

    // The version lives only in plugin.json; the release workflow checks the tag against it.
    public function getPluginVersion(): string
    {
        static $version;

        return $version ??= (string) (json_decode((string) file_get_contents(__DIR__ . '/plugin.json'), true)['version'] ?? '');
    }

    public function getCompatibleVersion(): string
    {
        return '>=1.2.47';
    }

    public function getPluginHomepage(): string
    {
        return 'https://github.com/carmelosantana/HelloHarmozi';
    }

    public function getPluginLicense(): string
    {
        return 'MIT';
    }
}
