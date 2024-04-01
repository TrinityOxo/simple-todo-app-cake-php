<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TodosFixture
 */
class TodosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'content' => 'Lorem ipsum dolor sit amet',
                'isCompleted' => 1,
                'created' => '2024-04-01 09:41:35',
                'modified' => '2024-04-01 09:41:35',
            ],
        ];
        parent::init();
    }
}
