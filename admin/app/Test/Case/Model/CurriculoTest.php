<?php
App::uses('Curriculo', 'Model');

/**
 * Curriculo Test Case
 */
class CurriculoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.curriculo',
		'app.vaga'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Curriculo = ClassRegistry::init('Curriculo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Curriculo);

		parent::tearDown();
	}

}
