<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="content">
    <div class="row">

        <div class="col-md-4 offset-md-4"></div>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Login') ?></legend>
            <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Sign Up')) ?>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
        </div>
    </div>
</div>