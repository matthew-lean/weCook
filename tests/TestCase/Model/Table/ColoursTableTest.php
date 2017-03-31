<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColoursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColoursTable Test Case
 */
class ColoursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ColoursTable
     */
    public $Colours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.colours',
        'app.users',
        'app.recipes',
        'app.recipes_versions',
        'app.versions',
        'app.steps',
        'app.ingredients',
        'app.recipes_ingredients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Colours') ? [] : ['className' => 'App\Model\Table\ColoursTable'];
        $this->Colours = TableRegistry::get('Colours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Colours);

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
