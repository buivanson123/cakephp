<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeaturedArtistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeaturedArtistsTable Test Case
 */
class FeaturedArtistsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FeaturedArtistsTable
     */
    public $FeaturedArtists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.featured_artists'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FeaturedArtists') ? [] : ['className' => FeaturedArtistsTable::class];
        $this->FeaturedArtists = TableRegistry::getTableLocator()->get('FeaturedArtists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FeaturedArtists);

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
