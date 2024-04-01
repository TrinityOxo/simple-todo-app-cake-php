<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todo $todo
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Hành động') ?></h4>
            <?= $this->Html->link(__('Danh sách công việc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="todos form content">
            <?= $this->Form->create($todo) ?>
            <fieldset>
                <legend><?= __('TẠO MỚI') ?></legend>
                <?php
                    echo $this->Form->control('content',array('class'=>'form-control','label'=>'Nội dung'));
                ?>
            </fieldset>
            <?= $this->Form->button(__('Tạo')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
