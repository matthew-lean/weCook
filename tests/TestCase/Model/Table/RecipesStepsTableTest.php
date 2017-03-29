<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecipesStepsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecipesStepsTable Test Case
 */
class RecipesStepsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecipesStepsTable
     */
    public $RecipesSteps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recipes_steps',
        'app.recipes',
        'app.users',
        'app.colours',
        'app.recipe_steps',
        'app.recipes_versions',
        'app.versions',
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
        $config = TableRegistry::exists('RecipesSteps') ? [] : ['className' => 'App\Model\Table\RecipesStepsTable'];
        $this->RecipesSteps = TableRegistry::get('RecipesSteps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RecipesSteps);

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
