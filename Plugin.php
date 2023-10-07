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
        // Helper
        $this->helper->register('addShortcutsHelper', '\Kanboard\Plugin\AddShortcuts\Helper\AddShortcutsHelper');

        // Template Override
        $this->template->setTemplateOverride('config/keyboard_shortcuts', 'AddShortcuts:config/keyboard_shortcuts');

        // CSS - Asset Hook
        $this->hook->on('template:layout:css', array('template' => 'plugins/AddShortcuts/Assets/css/add-shortcuts.min.css'));

        // JS - Dynamic Asset Hook
        $this->template->hook->attach('template:layout:head', 'AddShortcuts:addshortcuts_js');

        // Views - Template Hook
        $this->template->hook->attach(
            'template:config:sidebar', 'AddShortcuts:config/addshortcuts_config_sidebar');

        // Extra Page - Routes
        $this->route->addRoute('/addshortcuts/config', 'AddShortcutsController', 'show', 'AddShortcuts');
        $this->route->addRoute('/addshortcuts/completedThisWeek', 'AddShortcutsController', 'viewCompletedThisWeek', 'AddShortcuts');
        $this->route->addRoute('/addshortcuts/completedLastWeek', 'AddShortcutsController', 'viewCompletedLastWeek', 'AddShortcuts');
        $this->route->addRoute('/addshortcuts/addCustomShortcutModal', 'AddShortcutsController', 'viewAddCustomShortcutModal', 'AddShortcuts');
        $this->route->addRoute('/addshortcuts/js', 'AddShortcutsController', 'createJS', 'AddShortcuts');
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
        return '1.14.0';
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
