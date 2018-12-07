<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LatestMusicsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LatestMusicsTable Test Case
 */
class LatestMusicsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LatestMusicsTable
     */
    public $LatestMusics;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.latest_musics'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LatestMusics') ? [] : ['className' => LatestMusicsTable::class];
        $this->LatestMusics = TableRegistry::getTableLocator()->get('LatestMusics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LatestMusics);

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
