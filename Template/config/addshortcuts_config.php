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

        <div class="task-form-main-column">
            <?= $this->form->label('v + 1', 'v_1_url') ?>
            <?= $this->form->text('v_1_url', ['v_1_url' => $v_1_url], [], [
                'autofocus',
                'tabindex="1"'
            ]) ?>
        </div>

        <div class="task-form-main-column">
            <?= $this->form->label('v + 2', 'v_2_url') ?>
            <?= $this->form->text('v_2_url', ['v_2_url' => $v_2_url], [], [
                'autofocus',
                'tabindex="2"'
            ]) ?>
        </div>

        <div class="task-form-main-column">
            <?= $this->form->label('v + 3', 'v_3_url') ?>
            <?= $this->form->text('v_3_url', ['v_3_url' => $v_3_url], [], [
                'autofocus',
                'tabindex="3"'
            ]) ?>
        </div>

        <div class="task-form-main-column">
            <?= $this->form->label('v + 4', 'v_4_url') ?>
            <?= $this->form->text('v_4_url', ['v_4_url' => $v_4_url], [], [
                'autofocus',
                'tabindex="4"'
            ]) ?>
        </div>

        <div class="task-form-main-column">
            <?= $this->form->label('v + 5', 'v_5_url') ?>
            <?= $this->form->text('v_5_url', ['v_5_url' => $v_5_url], [], [
                'autofocus',
                'tabindex="5"'
            ]) ?>
        </div>

        <div class="task-form-main-column">
            <?= $this->form->label('v + 6', 'v_6_url') ?>
            <?= $this->form->text('v_6_url', ['v_6_url' => $v_6_url], [], [
                'autofocus',
                'tabindex="6"'
            ]) ?>
        </div>

        <div class="task-form-main-column">
            <?= $this->form->label('v + 7', 'v_7_url') ?>
            <?= $this->form->text('v_7_url', ['v_7_url' => $v_7_url], [], [
                'autofocus',
                'tabindex="7"'
            ]) ?>
        </div>

        <div class="task-form-main-column">
            <?= $this->form->label('v + 8', 'v_8_url') ?>
            <?= $this->form->text('v_8_url', ['v_8_url' => $v_8_url], [], [
                'autofocus',
                'tabindex="8"'
            ]) ?>
        </div>

        <div class="task-form-main-column">
            <?= $this->form->label('v + 9', 'v_9_url') ?>
            <?= $this->form->text('v_9_url', ['v_9_url' => $v_9_url], [], [
                'autofocus',
                'tabindex="9"'
            ]) ?>
        </div>

        <div class="task-form-main-column">
            <?= $this->form->label('v + 0', 'v_0_url') ?>
            <?= $this->form->text('v_0_url', ['v_0_url' => $v_0_url], [], [
                'autofocus',
                'tabindex="0"'
            ]) ?>
        </div>

    </div>



    <div class="task-form-bottom">
        <?= $this->modal->submitButtons() ?>
    </div>

</form>
