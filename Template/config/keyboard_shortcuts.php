<div class="page-header">
    <h2><?= t('Keyboard shortcuts') ?></h2>
</div>
<div class="panel">
    <h3><?= t('Board/Calendar/List view') ?></h3>
    <ul>
        <li><?= t('Switch to the project overview') ?> = <strong>v o</strong></li>
        <li><?= t('Switch to the board view') ?> = <strong>v b</strong></li>
        <li><?= t('Switch to the list view') ?> = <strong>v l</strong></li>
        <li><?= t('Switch to the tasks view') ?> = <strong>v t</strong></li>
        <li><?= t('Open Big Board') ?> = <strong>v a</strong><br><i>(need <a href="https://github.com/BlueTeck/kanboard_plugin_bigboard" target="_blank">BigBoard</a> for this to work)</i></li>
        <li><?= t('Show tasks, which were completed in the last week (Mo-Su)') ?> = <strong>v c</strong></li>
        <li><?= t('Show tasks, which were completed in the actual week (Mo-Su)') ?> = <strong>v v c</strong></li>
        <?= $this->addShortcutsHelper->getHelpListV09() ?>
    </ul>
    <h3><?= t('Board view') ?></h3>
    <ul>
        <li><?= t('New task') ?> = <strong>n</strong></li>
        <li><?= t('Expand/collapse tasks') ?> = <strong>s</strong></li>
        <li><?= t('Compact/wide view') ?> = <strong>c</strong></li>
    </ul>
    <h3><?= t('Task view') ?></h3>
    <ul>
        <li><?= t('Edit task') ?> = <strong>e</strong></li>
        <li><?= t('New subtask') ?> = <strong>s</strong></li>
        <li><?= t('New comment') ?> = <strong>c</strong></li>
        <li><?= t('New internal link') ?> = <strong>l</strong></li>
        <li><?= t('Add spent time') ?> = <strong>t</strong><br><i>(need <a href="https://github.com/Tagirijus/AddSpentTime" target="_blank">AddSpentTime</a> for this to work)</i></li>
        <li><?= t('Convert task times to new subtask') ?> = <strong>S</strong><br><i>(need <a href="https://github.com/Tagirijus/SubtaskHelper" target="_blank">SubtaskHelper</a> for this to work)</i></li>
        <li><?= t('Combine done subtasks to new subtask') ?> = <strong>g</strong><br><i>(need <a href="https://github.com/Tagirijus/SubtaskHelper" target="_blank">SubtaskHelper</a> for this to work)</i></li>
        <li><?= t('Edit subtask') ?> = <strong>E</strong><br><i>(need <a href="https://github.com/Tagirijus/SubtaskHelper" target="_blank">SubtaskHelper</a> for this to work)</i></li>
    </ul>
    <h3><?= t('Application') ?></h3>
    <ul>
        <li><?= t('Display list of keyboard shortcuts') ?> = <strong>?</strong></li>
        <li><?= t('Home') ?> = <strong>Home</strong></li>
        <li><?= t('Open board switcher') ?> = <strong>b</strong></li>
        <li><?= t('Open task switcher') ?> = <strong>B</strong><br><i>(need <a href="https://github.com/Tagirijus/TaskSelector" target="_blank">TaskSelector</a> for this to work)</i></li>
        <li><?= t('Go to the search/filter box') ?> = <strong>f</strong></li>
        <li><?= t('Reset the search/filter box') ?> = <strong>r</strong></li>
        <li><?= t('Close dialog box') ?> = <strong>ESC</strong></li>
        <li><?= t('Submit a form') ?> = <strong>CTRL+ENTER</strong> <?= t('or') ?> <strong>⌘+ENTER</strong></li>
    </ul>
    <h3><?= t('Various') ?></h3>
    <ul>
        <li><?= t('Analytics') ?> = <strong>a a</strong></li>
    </ul>
</div>
