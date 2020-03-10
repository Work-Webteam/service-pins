<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MilestonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MilestonesTable Test Case
 */
class MilestonesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MilestonesTable
     */
    protected $Milestones;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Milestones',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Milestones') ? [] : ['className' => MilestonesTable::class];
        $this->Milestones = TableRegistry::getTableLocator()->get('Milestones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Milestones);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
