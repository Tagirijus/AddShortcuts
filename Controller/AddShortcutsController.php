<?php

namespace Kanboard\Plugin\AddShortcuts\Controller;




class AddShortcutsController extends \Kanboard\Controller\PluginController
{
    /**
     * Settins page for the AddShortcuts plugin.
     *
     * @return HTML response
     */
    public function show()
    {
        $this->response->html($this->helper->layout->config('AddShortcuts:config/addshortcuts_config', [
            'title' => t('AddShortcuts') . ' &gt; ' . t('Settings'),
            'presets' => $this->configModel->get('addshortcuts_presets', '')
        ]));
    }

    /**
     * Save the setting for AddShortcuts.
     */
    public function saveConfig()
    {
        $form = $this->request->getValues();

        $values = [
            'addshortcuts_presets' => $form['presets']
        ];

        $this->languageModel->loadCurrentLanguage();

        if ($this->configModel->save($values)) {
            $this->flash->success(t('Settings saved successfully.'));
        } else {
            $this->flash->failure(t('Unable to save your settings.'));
        }

        return $this->response->redirect($this->helper->url->to('AddShortcutsController', 'show', ['plugin' => 'AddShortcuts']), true);
    }

    /**
     * Get the date range for this actual week
     * and use it in the search.
     */
    public function viewCompletedThisWeek()
    {
        $url = '/?controller=SearchController&action=index&search=completedRange%3A"{RANGE}"';
        $today = new \DateTime('today');

        // get start of week
        if ($today->format('N') == 1) {
            $start = $today;
        } else {
            $start = new \DateTime('last monday');
        }

        // get end of week
        if ($today->format('N') == 7) {
            $end = $today;
        } else {
            $end = new \DateTime('next sunday');
        }

        $range = $start->format('Y-m-d') . '..' . $end->format('Y-m-d');
        $url = str_replace('{RANGE}', $range, $url);

        return $this->response->redirect($url, true);
    }

    /**
     * Get the date range for the last week
     * and use it in the search.
     */
    public function viewCompletedLastWeek()
    {
        $url = '/?controller=SearchController&action=index&search=completedRange%3A"{RANGE}"';
        $today = new \DateTime('today');
        $interval = \DateInterval::createFromDateString('7 days');

        // get start of week
        if ($today->format('N') == 1) {
            $start = $today;
        } else {
            $start = new \DateTime('last monday');
        }
        $start = $start->sub($interval);

        // get end of week
        if ($today->format('N') == 7) {
            $end = $today;
        } else {
            $end = new \DateTime('next sunday');
        }
        $end = $end->sub($interval);

        $range = $start->format('Y-m-d') . '..' . $end->format('Y-m-d');
        $url = str_replace('{RANGE}', $range, $url);

        return $this->response->redirect($url, true);
    }

    /**
     * Show the modal to configure a new custom
     * shortcut with the actual url in the adressbar.
     *
     * @return HTML response
     */
    public function viewAddCustomShortcutModal()
    {
        $presets = $this->helper->addShortcutsHelper->getShortcutPresetsAsArray();

        $label = '';
        $key = '';
        $url = $this->request->getStringParam('uri', '/');
        $edit = false;

        foreach ($presets as $preset) {
            if ($preset['url'] == $url) {
                $edit = true;
                $label = $preset['label'];
                $key = $preset['key'];
            }
        }
        $this->response->html($this->helper->layout->config('AddShortcuts:addshortcuts/add_shortcut_modal', [
            'label' => $label,
            'key' => $key,
            'url' => $url,
            'edit' => $edit,
        ]));
    }

    /**
     * Sae the modal, the user entered for adding
     * the actual adre URL as a new shortcut modal,
     * or overwritting an existing one.
     */
    public function saveAddShortcutModal()
    {
        $form = $this->request->getValues();

        $updated_presets = $this->helper->addShortcutsHelper->getShortcutPresetsStringFromArray(
            $this->helper->addShortcutsHelper->processFormToNewPresetArray($form)
        );

        $values = [
            'addshortcuts_presets' => $updated_presets
        ];

        $this->languageModel->loadCurrentLanguage();

        if ($this->configModel->save($values)) {
            $this->flash->success(t('Shortcut presets added/edited/deleted successfully.'));
        } else {
            $this->flash->failure(t('Unable to save/edit/delete your shortcut preset.'));
        }

        return $this->response->redirect($form['url_original'], true);
    }

    /**
     * Crate dynamic JS for the AddShortcuts plugin.
     *
     * @return JS response
     */
    public function createJS()
    {
        $path = __DIR__ . '/../Assets/js/';
        $presets = $this->helper->addShortcutsHelper->getShortcutPresetsAsArray();
        $js = str_replace('$ADDSHORTCUTPRESETS$', json_encode($presets), file_get_contents($path . 'add-shortcuts.min.js'));

        $this->response->withStatusCode(200);
        $this->response->withContentType('text/javascript; charset=utf-8');
        $this->response->withBody($js);
        $this->response->withCache(-1);
        return $this->response->send();
    }

    /**
     * View the modal which contains the shortcut
     * preset selector.
     *
     * @return HTML response
     */
    public function viewShortcutPresetSelectModal()
    {
        $presets = $this->helper->addShortcutsHelper->getShortcutPresetsAsArray();
        $options = [];
        foreach ($presets as $k => $preset) {
            $key = $preset['key'] !== '' ? ' (' . $preset['key_help'] . ')' : '';
            $tmp_title = $preset['label'] . $key;
            $options[$k] = $tmp_title;
        }
        $this->response->html($this->helper->layout->config('AddShortcuts:addshortcuts/preset_selector_modal', [
            'presets' => $options
        ]));
    }

    /**
     * Redirect to the URL of the preset with the
     * given key value of the presets array.
     *
     * @return HTML response
     */
    public function redirectToPreset()
    {
        $key = $this->request->getStringParam('preset_key', 0);
        $presets = $this->helper->addShortcutsHelper->getShortcutPresetsAsArray();
        if (isset($presets[$key])) {
            $url = $presets[$key]['url'];
        } else {
            $url = '/';
        }
        return $this->response->redirect($url);
    }
}