<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FootersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FootersTable Test Case
 */
class FootersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FootersTable
     */
    protected $Footers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Footers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Footers') ? [] : ['className' => FootersTable::class];
        $this->Footers = TableRegistry::getTableLocator()->get('Footers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Footers);

        parent::tearDown();
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
