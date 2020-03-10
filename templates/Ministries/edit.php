<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ministry $ministry
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ministry->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ministry->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ministries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ministries form content">
            <?= $this->Form->create($ministry) ?>
            <fieldset>
                <legend><?= __('Edit Ministry') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('initials');
                    echo $this->Form->control('retroactive');
                    echo $this->Form->control('shipping_method');
                    echo $this->Form->control('bulk_shipping_address');
                    echo $this->Form->control('contact_name');
                    echo $this->Form->control('contact_email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
