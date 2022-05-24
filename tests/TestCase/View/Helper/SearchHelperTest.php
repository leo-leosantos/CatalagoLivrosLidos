<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\SearchHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\SearchHelper Test Case
 */
class SearchHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\SearchHelper
     */
    protected $Search;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Search = new SearchHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Search);

        parent::tearDown();
    }
}
