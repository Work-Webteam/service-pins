<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistrationPeriod[]|\Cake\Collection\CollectionInterface $registrationPeriods
 */
?>
<div class="registrationPeriods index content">
    <?= $this->Html->link(__('New Registration Period'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registration Periods') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('award_year') ?></th>
                    <th><?= $this->Paginator->sort('open_registration') ?></th>
                    <th><?= $this->Paginator->sort('close_registration') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrationPeriods as $registrationPeriod): ?>
                <tr>
                    <td><?= $this->Number->format($registrationPeriod->id) ?></td>
                    <td><?= $this->Number->format($registrationPeriod->award_year) ?></td>
                    <td><?= h($registrationPeriod->open_registration) ?></td>
                    <td><?= h($registrationPeriod->close_registration) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $registrationPeriod->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registrationPeriod->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registrationPeriod->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrationPeriod->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
