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

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + v + 1', 'v_11_caption') ?>
            <?= $this->form->text('v_11_caption', ['v_11_caption' => $v_11_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_11_url') ?>
            <?= $this->form->text('v_11_url', ['v_11_url' => $v_11_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + v + 2', 'v_12_caption') ?>
            <?= $this->form->text('v_12_caption', ['v_12_caption' => $v_12_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_12_url') ?>
            <?= $this->form->text('v_12_url', ['v_12_url' => $v_12_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + v + 3', 'v_13_caption') ?>
            <?= $this->form->text('v_13_caption', ['v_13_caption' => $v_13_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_13_url') ?>
            <?= $this->form->text('v_13_url', ['v_13_url' => $v_13_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + v + 4', 'v_14_caption') ?>
            <?= $this->form->text('v_14_caption', ['v_14_caption' => $v_14_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_14_url') ?>
            <?= $this->form->text('v_14_url', ['v_14_url' => $v_14_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + v + 5', 'v_15_caption') ?>
            <?= $this->form->text('v_15_caption', ['v_15_caption' => $v_15_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_15_url') ?>
            <?= $this->form->text('v_15_url', ['v_15_url' => $v_15_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + v + 6', 'v_16_caption') ?>
            <?= $this->form->text('v_16_caption', ['v_16_caption' => $v_16_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_16_url') ?>
            <?= $this->form->text('v_16_url', ['v_16_url' => $v_16_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + v + 7', 'v_17_caption') ?>
            <?= $this->form->text('v_17_caption', ['v_17_caption' => $v_17_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_17_url') ?>
            <?= $this->form->text('v_17_url', ['v_17_url' => $v_17_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + v + 8', 'v_18_caption') ?>
            <?= $this->form->text('v_18_caption', ['v_18_caption' => $v_18_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_18_url') ?>
            <?= $this->form->text('v_18_url', ['v_18_url' => $v_18_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + v + 9', 'v_19_caption') ?>
            <?= $this->form->text('v_19_caption', ['v_19_caption' => $v_19_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_19_url') ?>
            <?= $this->form->text('v_19_url', ['v_19_url' => $v_19_url]) ?>
        </div>

        <div class="add-shortcut-column-full">&nbsp;</div>

        <div class="add-shortcut-column-left">
            <?= $this->form->label(t('Caption for') . ': v + v + 0', 'v_20_caption') ?>
            <?= $this->form->text('v_20_caption', ['v_20_caption' => $v_20_caption]) ?>
        </div>
        <div class="add-shortcut-column-right">
            <?= $this->form->label('&nbsp;', 'v_20_url') ?>
            <?= $this->form->text('v_20_url', ['v_20_url' => $v_20_url]) ?>
        </div>

    </div>



    <div class="task-form-bottom">
        <?= $this->modal->submitButtons() ?>
    </div>

</form>
