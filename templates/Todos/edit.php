<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todo $todo
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Hành động') ?></h4>
            <?= $this->Html->link(__('Danh sách việc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(
                __('Xóa'),
                ['action' => 'delete', $todo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $todo->id), 'class' => 'side-nav-item']
            ) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="todos form content">
            <?= $this->Form->create($todo) ?>
            <fieldset>
                <legend><?= __('CẬP NHẬT') ?></legend>
                <?php
                    echo $this->Form->control('content',array('class'=>'form-control','label'=>'Nội dung'));
                    echo $this->Form->control('isCompleted',array('class'=>'form-control','label'=>'Check hoàn thành'));
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cập nhật')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
