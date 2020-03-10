<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistrationPeriodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistrationPeriodsTable Test Case
 */
class RegistrationPeriodsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistrationPeriodsTable
     */
    protected $RegistrationPeriods;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.RegistrationPeriods',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RegistrationPeriods') ? [] : ['className' => RegistrationPeriodsTable::class];
        $this->RegistrationPeriods = TableRegistry::getTableLocator()->get('RegistrationPeriods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->RegistrationPeriods);

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
