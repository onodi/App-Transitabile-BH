<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProceedingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProceedingsTable Test Case
 */
class ProceedingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProceedingsTable
     */
    public $Proceedings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proceedings',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Proceedings') ? [] : ['className' => ProceedingsTable::class];
        $this->Proceedings = TableRegistry::get('Proceedings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Proceedings);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
