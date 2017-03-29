<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecipesVersionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecipesVersionsTable Test Case
 */
class RecipesVersionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecipesVersionsTable
     */
    public $RecipesVersions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recipes_versions',
        'app.recipes',
        'app.users',
        'app.colours',
        'app.steps',
        'app.ingredients',
        'app.recipes_ingredients',
        'app.versions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RecipesVersions') ? [] : ['className' => 'App\Model\Table\RecipesVersionsTable'];
        $this->RecipesVersions = TableRegistry::get('RecipesVersions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RecipesVersions);

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
