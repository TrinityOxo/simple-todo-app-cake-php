<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Todo;
use Authorization\IdentityInterface;

/**
 * Todo policy
 */
class TodoPolicy
{
    /**
     * Check if $user can add Todo
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Todo $todo
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Todo $todo)
    {
        return true;
    }

    /**
     * Check if $user can edit Todo
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Todo $todo
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Todo $todo)
    {
        return $this->isAuthor($user, $todo);
    }

    /**
     * Check if $user can delete Todo
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Todo $todo
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Todo $todo)
    {
        return $this->isAuthor($user, $todo);
    }

    /**
     * Check if $user can view Todo
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Todo $todo
     * @return bool
     */
    public function canView(IdentityInterface $user, Todo $todo)
    {
        return $this->isAuthor($user, $todo);
    }

    protected function isAuthor(IdentityInterface $user, Todo $todo)
    {
        return $todo->user_id === $user->getIdentifier();
    }
}
