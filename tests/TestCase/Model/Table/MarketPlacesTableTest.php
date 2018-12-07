<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MarketPlacesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MarketPlacesTable Test Case
 */
class MarketPlacesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MarketPlacesTable
     */
    public $MarketPlaces;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.market_places'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MarketPlaces') ? [] : ['className' => MarketPlacesTable::class];
        $this->MarketPlaces = TableRegistry::getTableLocator()->get('MarketPlaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MarketPlaces);

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
