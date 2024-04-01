<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todo $todo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Hành động') ?></h4>
            <?= $this->Html->link(__('Cập nhật'), ['action' => 'edit', $todo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $todo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Danh sách việc'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Tạo mới'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="todos view content">
            <h3><?= h($todo->content) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nội dung') ?></th>
                    <td><?= h($todo->content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tạo ngày') ?></th>
                    <td><?= h($todo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cập nhật ngày') ?></th>
                    <td><?= h($todo->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hoàn thành') ?></th>
                    <td><?= $todo->isCompleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
