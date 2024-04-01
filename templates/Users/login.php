<style>
    .users.form {
        width: 50%;
        margin: 50px auto;
    }
</style>


<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>ĐĂNG NHẬP</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Đăng nhập')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Đăng ký", ['action' => 'register']) ?>
</div>