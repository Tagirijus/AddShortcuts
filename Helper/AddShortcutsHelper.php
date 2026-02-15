<?php

namespace Kanboard\Plugin\AddShortcuts\Helper;

use Kanboard\Core\Base;


class AddShortcutsHelper extends Base
{
    /**
     * Render Javascript component
     *
     * @param  string $name
     * @param  array  $params
     * @return string
     */
    public function componentShortcutSelector($name, array $params = array())
    {
        return '<div class="task-selector js-'.$name.'" data-params=\''.json_encode($params, JSON_HEX_APOS).'\'"></div>';
    }

    /**
     * Generae the help list depending on the set up
     * shortcut presets, which have set up a key
     * shortcut.
     *
     * @return string
     */
    public function getHelpList()
    {
        $presets = $this->getShortcutPresetsAsArray();

        $out = '';

        foreach ($presets as $preset) {
            if ($preset['key'] != '') {
                $out .= '<li>' . $preset['label'] . ' = <strong>' . $preset['key_help'] . '</strong></li>';
            }
        }

        return $out;
    }

    /**
     * Get the shortcuts presets as a processed array.
     * It is an array containing arrays. Each item
     * will have such a format:
     * [
     *     'label' => string,
     *     'key' => string,        // the string which will be used in the JS
     *     'key_help' => string,   // the string which will be used in the help modal
     *     'url' => string
     * ]
     *
     * @return array
     */
    public function getShortcutPresetsAsArray()
    {
        $out = [];
        $presets_raw = $this->configModel->get('addshortcuts_presets', '');
        $presets_per_line = preg_split("/\r\n|\n|\r/", $presets_raw);
        foreach ($presets_per_line as $preset_line) {
            $preset_tmp = explode(':', $preset_line);
            if (count($preset_tmp) > 2) {
                $out[] = [
                    'label' => $preset_tmp[0],
                    'key' => $preset_tmp[1],
                    'key_help' => str_replace('+', ' ', $preset_tmp[1]),
                    'url' => $preset_tmp[2],
                ];
            }
        }
        return $out;
    }

    /**
     * Generate a string to set into the config, which will
     * be the shortcuts presets generated from the given
     * array.
     *
     * @param string
     */
    public function getShortcutPresetsStringFromArray($arr)
    {
        $out = [];
        foreach ($arr as $preset) {
            $out[] = $preset['label'] . ':' . $preset['key'] . ':' . $preset['url'];
        }
        return implode("\n", $out);
    }

    /**
     * Get the form and generate a new preset array from it.
     * The options are:
     *
     * 1) The entered URL does not exist: new preset gets appended
     * 2) The entered URL is empty: if $form['url_original'] exists
     *    in the presets, this one gets deleted
     * 3) The entered URL is not empty and exists already: the
     *    original presets label and key will be updated.
     *
     * @param  array $form
     * @return array
     */
    public function processFormToNewPresetArray($form)
    {
        $label = $form['label'];
        $key = $form['key'];
        $url = $form['url'];
        $url_original = $form['url_original'];

        $presets = $this->getShortcutPresetsAsArray();

        $add = true;
        $edit = false;
        $delete = false;

        foreach ($presets as $k => $preset) {
            if ($preset['url'] == $url || $preset['url'] == $url_original) {
                $add = false;
                if ($url == '') {
                    $delete = $k;
                } else {
                    $edit = $k;
                }
            }
        }

        if ($add) {
            $presets[] = [
                'label' => $label,
                'key' => $key,
                'url' => $url
            ];
        } elseif ($edit !== false) {
            $presets[$edit] = [
                'label' => $label,
                'key' => $key,
                'url' => $url
            ];
        } elseif ($delete !== false) {
            unset($presets[$delete]);
        }

        return $presets;
    }

    /**
     * Render Javascript component
     * for drop down.
     *
     * @param  string $name
     * @param  array  $params
     * @return string
     */
    public function componentShortcutPresetSelector($name, array $params = array())
    {
        return '<div class="addshortcuts-preset-selector js-'.$name.'" data-params=\''.json_encode($params, JSON_HEX_APOS).'\'"></div>';
    }
}
