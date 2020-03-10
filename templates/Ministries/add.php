<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ministry $ministry
 */
?>


<h1>Add Participating Organization</h1>

<?= $this->Form->create($ministry) ?>

<div class="form-group">
    <label for="name">Full Name:</label>
    <input class="form-control" type="text" name="name" id="name-input" placeholder="e.g. Ministry of ...">
</div>

<div class="form-group">
    <label for="initials">Initials:</label>
    <input class="form-control" type="text" name="initials" id="initials-input" placeholder="e.g. FLNRD">
</div>

<div class="form-group">
    <label for="retroactive">Retroactivity:</label>
    <select class="form-control" name="retroactive">
        <option disabled selected>Choose One...</option>
        <option value="none">No Retroactive Pins</option>
        <option value="milestone">Only if in Milestone Year</option>
        <option value="unrestricted">Retroactive any time</option>
    </select>
</div>

<div class="form-group">
    <label for="shipping-method">Retroactive Pin Shipping Method:</label>
    <select class="form-control" name="shipping-method">
        <option disabled selected>Choose One...</option>
        <option value="supervisor">Send to Supervisors</option>
        <option value="bulk">Send in Bulk to Contact</option>
    </select>
</div>

<div class="form-group">
    <label for="shipping-address">Bulk Pin Shipping Address</label>
    <textarea class="form-control"></textarea>
</div>

<div class="form-group">
    <label for="contact_name">Contact Full Name:</label>
    <input  class="form-control" type="text" name="contact_name" id="contact_name-input" placeholder="Firstname Surname">
</div>

<div class="form-group">
    <label for="contact_email">Contact Email</label>
    <input  class="form-control" type="text" name="contact_email" id="contact_email-input" placeholder="first.last@gov.bc.ca">
</div>

<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>

<!--
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ministries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ministries form content">
            <?= $this->Form->create($ministry) ?>
            <fieldset>
                <legend><?= __('Add Ministry') ?></legend>
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
-->
