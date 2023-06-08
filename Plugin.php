<?php

namespace Kanboard\Plugin\AddShortcuts;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
// use Kanboard\Plugin\AddShortcuts\AgeHelper;  // Helper Class and Filename should be exact
// use Kanboard\Helper;  // Add core Helper for using forms etc. inside external templates

class Plugin extends Base
{
    public function initialize()
    {
        // Template Override
        $this->template->setTemplateOverride('config/keyboard_shortcuts', 'AddShortcuts:config/keyboard_shortcuts');

        // JS - Asset Hook
        $this->hook->on('template:layout:js', array('template' => 'plugins/AddShortcuts/Assets/js/add-shortcuts.min.js'));

        // Views - Template Hook
        $this->template->hook->attach(
            'template:config:sidebar', 'AddShortcuts:config/addshortcuts_config_sidebar');

        // Extra Page - Routes
        $this->route->addRoute('/addshortcuts/config', 'AddShortcutsController', 'show', 'AddShortcuts');
        $this->route->addRoute('/addshortcuts/v', 'AddShortcutsController', 'view', 'AddShortcuts');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'AddShortcuts';
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
        return '1.8.0';
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
        return 'https://github.com/Tagirijus/AddShortcuts';
    }
}
