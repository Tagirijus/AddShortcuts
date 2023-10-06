<div class="page-header">
    <h2><?= t('AddShortcuts configuration') ?></h2>
</div>
<form method="post" action="<?= $this->url->href('AddShortcutsController', 'saveConfig', ['plugin' => 'AddShortcuts']) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <br>

    <p>
        <h3><?= t('v + NUMBER shortcuts') ?></h3>
    </p>

    <p>
        <?= t('You have 10 possible links to fill, which will get activated when pressing the letter v and a number between 0 and 9.') ?>
    </p>
    <div class="task-form-container">

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + 1', 'v_1_caption') ?>
            <?= $this->form->text('v_1_caption', ['v_1_caption' => $v_1_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_1_url') ?>
            <?= $this->form->text('v_1_url', ['v_1_url' => $v_1_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + 2', 'v_2_caption') ?>
            <?= $this->form->text('v_2_caption', ['v_2_caption' => $v_2_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_2_url') ?>
            <?= $this->form->text('v_2_url', ['v_2_url' => $v_2_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + 3', 'v_3_caption') ?>
            <?= $this->form->text('v_3_caption', ['v_3_caption' => $v_3_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_3_url') ?>
            <?= $this->form->text('v_3_url', ['v_3_url' => $v_3_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + 4', 'v_4_caption') ?>
            <?= $this->form->text('v_4_caption', ['v_4_caption' => $v_4_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_4_url') ?>
            <?= $this->form->text('v_4_url', ['v_4_url' => $v_4_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + 5', 'v_5_caption') ?>
            <?= $this->form->text('v_5_caption', ['v_5_caption' => $v_5_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_5_url') ?>
            <?= $this->form->text('v_5_url', ['v_5_url' => $v_5_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + 6', 'v_6_caption') ?>
            <?= $this->form->text('v_6_caption', ['v_6_caption' => $v_6_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_6_url') ?>
            <?= $this->form->text('v_6_url', ['v_6_url' => $v_6_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + 7', 'v_7_caption') ?>
            <?= $this->form->text('v_7_caption', ['v_7_caption' => $v_7_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_7_url') ?>
            <?= $this->form->text('v_7_url', ['v_7_url' => $v_7_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + 8', 'v_8_caption') ?>
            <?= $this->form->text('v_8_caption', ['v_8_caption' => $v_8_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_8_url') ?>
            <?= $this->form->text('v_8_url', ['v_8_url' => $v_8_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + 9', 'v_9_caption') ?>
            <?= $this->form->text('v_9_caption', ['v_9_caption' => $v_9_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_9_url') ?>
            <?= $this->form->text('v_9_url', ['v_9_url' => $v_9_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + 0', 'v_0_caption') ?>
            <?= $this->form->text('v_0_caption', ['v_0_caption' => $v_0_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_0_url') ?>
            <?= $this->form->text('v_0_url', ['v_0_url' => $v_0_url]) ?>
        </div>

    </div>



    <div class="task-form-bottom">
        <?= $this->modal->submitButtons() ?>
    </div>

</form>
