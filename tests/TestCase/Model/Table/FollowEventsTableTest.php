<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FollowEventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FollowEventsTable Test Case
 */
class FollowEventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FollowEventsTable
     */
    public $FollowEvents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.follow_events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FollowEvents') ? [] : ['className' => FollowEventsTable::class];
        $this->FollowEvents = TableRegistry::getTableLocator()->get('FollowEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FollowEvents);

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
