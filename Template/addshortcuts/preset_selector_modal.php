<?= $this->addShortcutsHelper->componentShortcutSelector('select-dropdown-autocomplete', array(
    'name' => 'taskId',
    'placeholder' => t('Choose shortcut preset'),
    'ariaLabel' => t('Choose shortcut preset'),
    'items' => $presets,
    'redirect' => array(
        'regex' => 'PRESET_KEY',
        'url' => '/addshortcuts/redirectToPreset?preset_key=PRESET_KEY',
    ),
    'onFocus' => array(
        'shortcutpreset.selector.open',
    )
)) ?>
