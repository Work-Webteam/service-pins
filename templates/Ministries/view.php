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
            <?= $this->Html->link(__('Edit Ministry'), ['action' => 'edit', $ministry->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ministry'), ['action' => 'delete', $ministry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ministry->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ministries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ministry'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ministries view content">
            <h3><?= h($ministry->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($ministry->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Initials') ?></th>
                    <td><?= h($ministry->initials) ?></td>
                </tr>
                <tr>
                    <th><?= __('Retroactive') ?></th>
                    <td><?= h($ministry->retroactive) ?></td>
                </tr>
                <tr>
                    <th><?= __('Shipping Method') ?></th>
                    <td><?= h($ministry->shipping_method) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Name') ?></th>
                    <td><?= h($ministry->contact_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Email') ?></th>
                    <td><?= h($ministry->contact_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ministry->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Bulk Shipping Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ministry->bulk_shipping_address)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Registrations') ?></h4>
                <?php if (!empty($ministry->registrations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Idir') ?></th>
                            <th><?= __('User Guid') ?></th>
                            <th><?= __('Employee Number') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Ministry Id') ?></th>
                            <th><?= __('Department') ?></th>
                            <th><?= __('Milestone') ?></th>
                            <th><?= __('Retro Years') ?></th>
                            <th><?= __('Admin Notes') ?></th>
                            <th><?= __('Office Careof') ?></th>
                            <th><?= __('Office Address') ?></th>
                            <th><?= __('Office Suite') ?></th>
                            <th><?= __('Office City Id') ?></th>
                            <th><?= __('Office Province') ?></th>
                            <th><?= __('Office Postal Code') ?></th>
                            <th><?= __('Office Po Box') ?></th>
                            <th><?= __('Work Phone') ?></th>
                            <th><?= __('Work Extension') ?></th>
                            <th><?= __('Preferred Email') ?></th>
                            <th><?= __('Supervisor First Name') ?></th>
                            <th><?= __('Supervisor Last Name') ?></th>
                            <th><?= __('Supervisor Careof') ?></th>
                            <th><?= __('Supervisor Address') ?></th>
                            <th><?= __('Supervisor Suite') ?></th>
                            <th><?= __('Supervisor City Id') ?></th>
                            <th><?= __('Supervisor Province') ?></th>
                            <th><?= __('Supervisor Postal Code') ?></th>
                            <th><?= __('Supervisor Email') ?></th>
                            <th><?= __('Supervisor Work Phone') ?></th>
                            <th><?= __('Supervisor Work Extension') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ministry->registrations as $registrations) : ?>
                        <tr>
                            <td><?= h($registrations->id) ?></td>
                            <td><?= h($registrations->created) ?></td>
                            <td><?= h($registrations->modified) ?></td>
                            <td><?= h($registrations->user_idir) ?></td>
                            <td><?= h($registrations->user_guid) ?></td>
                            <td><?= h($registrations->employee_number) ?></td>
                            <td><?= h($registrations->first_name) ?></td>
                            <td><?= h($registrations->last_name) ?></td>
                            <td><?= h($registrations->ministry_id) ?></td>
                            <td><?= h($registrations->department) ?></td>
                            <td><?= h($registrations->milestone) ?></td>
                            <td><?= h($registrations->retro_years) ?></td>
                            <td><?= h($registrations->admin_notes) ?></td>
                            <td><?= h($registrations->office_careof) ?></td>
                            <td><?= h($registrations->office_address) ?></td>
                            <td><?= h($registrations->office_suite) ?></td>
                            <td><?= h($registrations->office_city_id) ?></td>
                            <td><?= h($registrations->office_province) ?></td>
                            <td><?= h($registrations->office_postal_code) ?></td>
                            <td><?= h($registrations->office_po_box) ?></td>
                            <td><?= h($registrations->work_phone) ?></td>
                            <td><?= h($registrations->work_extension) ?></td>
                            <td><?= h($registrations->preferred_email) ?></td>
                            <td><?= h($registrations->supervisor_first_name) ?></td>
                            <td><?= h($registrations->supervisor_last_name) ?></td>
                            <td><?= h($registrations->supervisor_careof) ?></td>
                            <td><?= h($registrations->supervisor_address) ?></td>
                            <td><?= h($registrations->supervisor_suite) ?></td>
                            <td><?= h($registrations->supervisor_city_id) ?></td>
                            <td><?= h($registrations->supervisor_province) ?></td>
                            <td><?= h($registrations->supervisor_postal_code) ?></td>
                            <td><?= h($registrations->supervisor_email) ?></td>
                            <td><?= h($registrations->supervisor_work_phone) ?></td>
                            <td><?= h($registrations->supervisor_work_extension) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Registrations', 'action' => 'view', $registrations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Registrations', 'action' => 'edit', $registrations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Registrations', 'action' => 'delete', $registrations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related User Roles') ?></h4>
                <?php if (!empty($ministry->user_roles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Idir') ?></th>
                            <th><?= __('Guid') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Ministry Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ministry->user_roles as $userRoles) : ?>
                        <tr>
                            <td><?= h($userRoles->id) ?></td>
                            <td><?= h($userRoles->idir) ?></td>
                            <td><?= h($userRoles->guid) ?></td>
                            <td><?= h($userRoles->role_id) ?></td>
                            <td><?= h($userRoles->ministry_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'UserRoles', 'action' => 'view', $userRoles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'UserRoles', 'action' => 'edit', $userRoles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserRoles', 'action' => 'delete', $userRoles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userRoles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
