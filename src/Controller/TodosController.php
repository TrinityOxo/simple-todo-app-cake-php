<?php
declare(strict_types=1);

namespace App\Controller;

class TodosController extends AppController
{
    public function index()
    {
        $this->Authorization->skipAuthorization();

        $user_id = $this->request->getAttribute('identity')->getIdentifier();

        $query = $this->Todos->find()->where(['user_id' => $user_id]);
        $todos = $this->paginate($query);

        $this->set(compact('todos'));
    }

    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $todo = $this->Todos->get($id);
        $this->Authorization->authorize($todo);
        $this->set(compact('todo'));
    }

    public function add()
    {
        $todo = $this->Todos->newEmptyEntity();
        $this->Authorization->authorize($todo);
        if ($this->request->is('post')) {
            $todo = $this->Todos->patchEntity($todo, $this->request->getData());


            $todo->user_id = $this->request->getAttribute('identity')->getIdentifier();

            if ($this->Todos->save($todo)) {
                $this->Flash->success(__('Tạo mới thành công'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Không thể tạo mới, lỗi!'));
        }
        $this->set(compact('todo'));
    }

    public function edit($id = null)
    {
        $todo = $this->Todos->get($id, contain: []);
        $this->Authorization->authorize($todo);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $todo = $this->Todos->patchEntity($todo, $this->request->getData());
            
            if ($this->Todos->save($todo)) {
                $this->Flash->success(__('Cập nhật thành công'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Không thể cập nhật, lỗi!'));
        }
        $this->set(compact('todo'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $todo = $this->Todos->get($id);
        $this->Authorization->authorize($todo);
        if ($this->Todos->delete($todo)) {
            $this->Flash->success(__('Xóa thành công'));
        } else {
            $this->Flash->error(__('Không thể xóa, lỗi!'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
