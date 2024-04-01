<style>
    .users.form {
        width: 50%;
        margin: 50px auto;
    }
</style>

<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>ĐĂNG KÝ</h3>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->button(__('Đăng ký')) ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Đăng nhập", ['action' => 'login']) ?>
</div>
