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
            'v_1_url' => $this->configModel->get('addshortcuts_v_1_url', '/'),
            'v_2_url' => $this->configModel->get('addshortcuts_v_2_url', '/'),
            'v_3_url' => $this->configModel->get('addshortcuts_v_3_url', '/'),
            'v_4_url' => $this->configModel->get('addshortcuts_v_4_url', '/'),
            'v_5_url' => $this->configModel->get('addshortcuts_v_5_url', '/'),
            'v_6_url' => $this->configModel->get('addshortcuts_v_6_url', '/'),
            'v_7_url' => $this->configModel->get('addshortcuts_v_7_url', '/'),
            'v_8_url' => $this->configModel->get('addshortcuts_v_8_url', '/'),
            'v_9_url' => $this->configModel->get('addshortcuts_v_9_url', '/'),
            'v_0_url' => $this->configModel->get('addshortcuts_v_0_url', '/')
        ]));
    }

    /**
     * Save the setting for AddShortcuts.
     */
    public function saveConfig()
    {
        $form = $this->request->getValues();

        $values = [
            'addshortcuts_v_1_url' => $form['v_1_url'],
            'addshortcuts_v_2_url' => $form['v_2_url'],
            'addshortcuts_v_3_url' => $form['v_3_url'],
            'addshortcuts_v_4_url' => $form['v_4_url'],
            'addshortcuts_v_5_url' => $form['v_5_url'],
            'addshortcuts_v_6_url' => $form['v_6_url'],
            'addshortcuts_v_7_url' => $form['v_7_url'],
            'addshortcuts_v_8_url' => $form['v_8_url'],
            'addshortcuts_v_9_url' => $form['v_9_url'],
            'addshortcuts_v_0_url' => $form['v_0_url']
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
     * Execute one of the ten 0-9 variable shortcuts from the config.
     */
    public function view()
    {
        $allowed = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        $param = $this->request->getStringParam('v', '1');
        if (in_array($param, $allowed)) {
            $url = $this->configModel->get('addshortcuts_v_' . $param . '_url', '/');
        } else {
            $url = $this->configModel->get('addshortcuts_v_1_url', '');
        }
        return $this->response->redirect($url, true);
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
}