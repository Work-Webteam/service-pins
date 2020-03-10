<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationPeriod $registrationPeriod
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Registration Period'), ['action' => 'edit', $registrationPeriod->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registration Period'), ['action' => 'delete', $registrationPeriod->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationPeriod->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registration Periods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registration Period'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="registrationPeriods view content">
            <h3><?= h($registrationPeriod->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registrationPeriod->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Award Year') ?></th>
                    <td><?= $this->Number->format($registrationPeriod->award_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Open Registration') ?></th>
                    <td><?= h($registrationPeriod->open_registration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Close Registration') ?></th>
                    <td><?= h($registrationPeriod->close_registration) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
