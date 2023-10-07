<div class="modal-header">
    <?php if ($edit): ?>
        <h2><?= t('AddShortcuts - Edit preset') ?></h2>
    <?php else: ?>
        <h2><?= t('AddShortcuts - Add preset') ?></h2>
    <?php endif ?>
</div>
<form method="post" action="<?= $this->url->href('AddShortcutsController', 'saveAddShortcutModal', ['plugin' => 'AddShortcuts']) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <p>
        <?php if ($edit): ?>
            <?= t('Entered data will overwrite preset with same url!') ?>
        <?php else: ?>
            <?= t('Entered data will be added as a new preset') ?>
        <?php endif ?>
    </p>
    <div class="task-form-container">

        <div class="task-form-main-column margin-bottom"></div>

        <input
            type="hidden"
            name="url_original"
            value="<?= $url ?>"
        >


        <div class="task-form-main-column">
            <?= $this->form->label(t('Label'), 'label') ?>
            <?= $this->form->text('label', ['label' => $label], [], ['autofocus']) ?>
            <?= $this->form->label('Key', 'key') ?>
            <?= $this->form->text('key', ['key' => $key]) ?>
            <?= $this->form->label('URL', 'url') ?>
            <?= $this->form->text('url', ['url' => $url]) ?>
            <span class="addshortcuts-small-font">
                <?= t('Keep URL empty to delete the preset') ?>
            </span>
        </div>

    </div>



    <div class="task-form-bottom">
        <?= $this->modal->submitButtons() ?>
    </div>

</form>
