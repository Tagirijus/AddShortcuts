<?php

namespace Kanboard\Plugin\TagiShortcuts;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
// use Kanboard\Plugin\TagiShortcuts\AgeHelper;  // Helper Class and Filename should be exact
// use Kanboard\Helper;  // Add core Helper for using forms etc. inside external templates

class Plugin extends Base
{
    public function initialize()
    {
        // Template Override
        $this->template->setTemplateOverride('config/keyboard_shortcuts', 'TagiShortcuts:config/keyboard_shortcuts');

        // JS - Asset Hook
        $this->hook->on('template:layout:js', array('template' => 'plugins/TagiShortcuts/Assets/js/tagi-shortcuts.min.js'));
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        // Plugin Name MUST be identical to namespace for Plugin Directory to detect updated versions
        // Do not translate the plugin name here
        return 'TagiShortcuts';
    }

    public function getPluginDescription()
    {
        return t('A plugin, which adds certain shortcuts to Kanboard.');
    }

    public function getPluginAuthor()
    {
        return 'Tagirijus';
    }

    public function getPluginVersion()
    {
        return '1.1.0';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.27';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Tagirijus/kanboard-TagiShortcuts';
    }
}
