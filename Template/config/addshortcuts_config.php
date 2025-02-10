<div class="page-header">
    <h2><?= t('AddShortcuts configuration') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('AddShortcutsController', 'saveConfig', ['plugin' => 'AddShortcuts']) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <br>

    <p>
        <?= t('Every line has to be in the format "Label:[shortcut like \'v+1\']:url", while the shortcut in the middle can stay blank: "Label::url"') ?>
    </p>
    <div class="task-form-container">

        <div class="task-form-main-column">&nbsp;</div>

        <div class="task-form-main-column">
            <?= $this->form->label(t('Presets'), 'presets') ?>
            <?= $this->form->textarea('presets', ['presets' => $presets], [], [], 'addshortcuts-presets-config') ?>
        </div>

        <div class="task-form-main-column">
            <?= $this->form->label('AddShortcuts ' . t('in dashboard sidebar'), 'dashboard_sidebar') ?>
            <?= $this->form->checkbox('dashboard_sidebar', t('enabled'), 1, $dashboard_sidebar, '', []) ?>
        </div>

    </div>



    <div class="task-form-bottom">
        <?= $this->modal->submitButtons() ?>
    </div>

</form>
