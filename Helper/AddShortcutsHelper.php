<?php

namespace Kanboard\Plugin\AddShortcuts\Helper;

use Kanboard\Core\Base;
use Kanboard\Model\TaskModel;
use Kanboard\Model\ProjectModel;
use Kanboard\Model\SubtaskModel;
use Kanboard\Core\Paginator;
use Kanboard\Filter\TaskProjectsFilter;


class AddShortcutsHelper extends Base
{
    /**
     * Generae the help list for the help modal
     * for the shortcuts.
     *
     * For the specific v + [0-9] shortcuts and
     * their set up captions.
     *
     * @return string
     */
    public function getHelpListV09()
    {
        $caps = [
            $this->configModel->get('addshortcuts_v_1_caption', '---'),
            $this->configModel->get('addshortcuts_v_2_caption', '---'),
            $this->configModel->get('addshortcuts_v_3_caption', '---'),
            $this->configModel->get('addshortcuts_v_4_caption', '---'),
            $this->configModel->get('addshortcuts_v_5_caption', '---'),
            $this->configModel->get('addshortcuts_v_6_caption', '---'),
            $this->configModel->get('addshortcuts_v_7_caption', '---'),
            $this->configModel->get('addshortcuts_v_8_caption', '---'),
            $this->configModel->get('addshortcuts_v_9_caption', '---'),
            $this->configModel->get('addshortcuts_v_0_caption', '---')
        ];

        $list = '';
        $no_caption = true;

        foreach ($caps as $num => $cap) {
            if ($cap !== '---') {
                $no_caption = false;
                $list .= '<li><strong>v ' . (string) ($num+1) . '</strong>: ' . $cap . '</li>';
            }
        }

        return $no_caption ? '' : $list;
    }
}
