<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Todo> $todos
 */
?>
<div class="todos index content">
    <?= $this->Html->link(__('Tạo mới'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Việc cần làm') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Nội dung') ?></th>
                    <th><?= $this->Paginator->sort('Hoàng thành') ?></th>
                    <th><?= $this->Paginator->sort('Tạo ngày') ?></th>
                    <th><?= $this->Paginator->sort('Cập nhật ngày') ?></th>
                    <th class="actions"><?= __('Hành động') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todos as $todo): ?>
                <tr>
                    <td><?= $this->Number->format($todo->id) ?></td>
                    <td><?= h($todo->content) ?></td>
                    <td><?= h($todo->isCompleted) ? __('Yes') : __('No'); ?></td>
                    <td><?= h($todo->created) ?></td>
                    <td><?= h($todo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Xem'), ['action' => 'view', $todo->id]) ?>
                        <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $todo->id]) ?>
                        <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $todo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todo->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
