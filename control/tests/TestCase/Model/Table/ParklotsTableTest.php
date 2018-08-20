<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParklotsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParklotsTable Test Case
 */
class ParklotsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ParklotsTable
     */
    public $Parklots;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.parklots',
        'app.logs',
        'app.users',
        'app.vehicles',
        'app.tickets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Parklots') ? [] : ['className' => ParklotsTable::class];
        $this->Parklots = TableRegistry::get('Parklots', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Parklots);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
