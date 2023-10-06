<div class="modal-header">
    <h2><?= t('AddShortcuts configuration') ?>: Custom #<?= $v ?></h2>
</div>
<form method="post" action="<?= $this->url->href('AddShortcutsController', 'saveAddShortcutModal', ['plugin' => 'AddShortcuts']) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <p>
        <?= t('Entered data will overwrite chosen shortcut number!') ?>
    </p>
    <div class="task-form-container">

        <div class="task-form-main-column margin-bottom"></div>

        <input
            type="hidden"
            id="v_num"
            name="v_num"
            value="<?= $v ?>"
        >

        <div class="task-form-main-column">
            <?= $this->form->label(t('Caption'), 'v_caption') ?>
            <?= $this->form->text('v_caption', ['v_caption' => $v_caption], [], [
                'autofocus'
            ]) ?>
            <?= $this->form->label('v + ' . $v, 'v_url') ?>
            <?= $this->form->text('v_url', ['v_url' => $uri], [], [
                'autofocus'
            ]) ?>
        </div>

    </div>



    <div class="task-form-bottom">
        <?= $this->modal->submitButtons() ?>
    </div>

</form>
