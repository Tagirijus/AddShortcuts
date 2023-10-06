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
            'v_0_url' => $this->configModel->get('addshortcuts_v_0_url', '/'),
            'v_11_url' => $this->configModel->get('addshortcuts_v_11_url', '/'),
            'v_12_url' => $this->configModel->get('addshortcuts_v_12_url', '/'),
            'v_13_url' => $this->configModel->get('addshortcuts_v_13_url', '/'),
            'v_14_url' => $this->configModel->get('addshortcuts_v_14_url', '/'),
            'v_15_url' => $this->configModel->get('addshortcuts_v_15_url', '/'),
            'v_16_url' => $this->configModel->get('addshortcuts_v_16_url', '/'),
            'v_17_url' => $this->configModel->get('addshortcuts_v_17_url', '/'),
            'v_18_url' => $this->configModel->get('addshortcuts_v_18_url', '/'),
            'v_19_url' => $this->configModel->get('addshortcuts_v_19_url', '/'),
            'v_20_url' => $this->configModel->get('addshortcuts_v_20_url', '/'),
            'v_1_caption' => $this->configModel->get('addshortcuts_v_1_caption', '---'),
            'v_2_caption' => $this->configModel->get('addshortcuts_v_2_caption', '---'),
            'v_3_caption' => $this->configModel->get('addshortcuts_v_3_caption', '---'),
            'v_4_caption' => $this->configModel->get('addshortcuts_v_4_caption', '---'),
            'v_5_caption' => $this->configModel->get('addshortcuts_v_5_caption', '---'),
            'v_6_caption' => $this->configModel->get('addshortcuts_v_6_caption', '---'),
            'v_7_caption' => $this->configModel->get('addshortcuts_v_7_caption', '---'),
            'v_8_caption' => $this->configModel->get('addshortcuts_v_8_caption', '---'),
            'v_9_caption' => $this->configModel->get('addshortcuts_v_9_caption', '---'),
            'v_0_caption' => $this->configModel->get('addshortcuts_v_0_caption', '---'),
            'v_11_caption' => $this->configModel->get('addshortcuts_v_11_caption', '---'),
            'v_12_caption' => $this->configModel->get('addshortcuts_v_12_caption', '---'),
            'v_13_caption' => $this->configModel->get('addshortcuts_v_13_caption', '---'),
            'v_14_caption' => $this->configModel->get('addshortcuts_v_14_caption', '---'),
            'v_15_caption' => $this->configModel->get('addshortcuts_v_15_caption', '---'),
            'v_16_caption' => $this->configModel->get('addshortcuts_v_16_caption', '---'),
            'v_17_caption' => $this->configModel->get('addshortcuts_v_17_caption', '---'),
            'v_18_caption' => $this->configModel->get('addshortcuts_v_18_caption', '---'),
            'v_19_caption' => $this->configModel->get('addshortcuts_v_19_caption', '---'),
            'v_20_caption' => $this->configModel->get('addshortcuts_v_20_caption', '---')
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
            'addshortcuts_v_0_url' => $form['v_0_url'],
            'addshortcuts_v_11_url' => $form['v_11_url'],
            'addshortcuts_v_12_url' => $form['v_12_url'],
            'addshortcuts_v_13_url' => $form['v_13_url'],
            'addshortcuts_v_14_url' => $form['v_14_url'],
            'addshortcuts_v_15_url' => $form['v_15_url'],
            'addshortcuts_v_16_url' => $form['v_16_url'],
            'addshortcuts_v_17_url' => $form['v_17_url'],
            'addshortcuts_v_18_url' => $form['v_18_url'],
            'addshortcuts_v_19_url' => $form['v_19_url'],
            'addshortcuts_v_20_url' => $form['v_20_url'],
            'addshortcuts_v_1_caption' => $form['v_1_caption'],
            'addshortcuts_v_2_caption' => $form['v_2_caption'],
            'addshortcuts_v_3_caption' => $form['v_3_caption'],
            'addshortcuts_v_4_caption' => $form['v_4_caption'],
            'addshortcuts_v_5_caption' => $form['v_5_caption'],
            'addshortcuts_v_6_caption' => $form['v_6_caption'],
            'addshortcuts_v_7_caption' => $form['v_7_caption'],
            'addshortcuts_v_8_caption' => $form['v_8_caption'],
            'addshortcuts_v_9_caption' => $form['v_9_caption'],
            'addshortcuts_v_0_caption' => $form['v_0_caption'],
            'addshortcuts_v_11_caption' => $form['v_11_caption'],
            'addshortcuts_v_12_caption' => $form['v_12_caption'],
            'addshortcuts_v_13_caption' => $form['v_13_caption'],
            'addshortcuts_v_14_caption' => $form['v_14_caption'],
            'addshortcuts_v_15_caption' => $form['v_15_caption'],
            'addshortcuts_v_16_caption' => $form['v_16_caption'],
            'addshortcuts_v_17_caption' => $form['v_17_caption'],
            'addshortcuts_v_18_caption' => $form['v_18_caption'],
            'addshortcuts_v_19_caption' => $form['v_19_caption'],
            'addshortcuts_v_20_caption' => $form['v_20_caption']
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
        $allowed = [
            '1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
            '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'
        ];
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
        $v = $this->request->getStringParam('v', '1');
        $uri = $this->request->getStringParam('uri', '/');
        $this->response->html($this->helper->layout->config('AddShortcuts:addshortcuts/add_shortcut_modal', [
            'v' => $v,
            'uri' => $uri,
            'v_caption' => $this->configModel->get('addshortcuts_v_' . $v . '_caption', '---')
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

        $v_num = $form['v_num'];
        $v_url = $form['v_url'];
        $v_caption = $form['v_caption'];

        $values = [
            'addshortcuts_v_' . $v_num . '_url' => $v_url,
            'addshortcuts_v_' . $v_num . '_caption' => $v_caption
        ];

        $this->languageModel->loadCurrentLanguage();

        if ($this->configModel->save($values)) {
            $this->flash->success(t('Settings saved successfully.'));
        } else {
            $this->flash->failure(t('Unable to save your settings.'));
        }

        return $this->response->redirect($v_url, true);
    }
}