<?php
App::uses('Promocao', 'Model');

/**
 * Promocao Test Case
 */
class PromocaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promocao',
		'app.produto',
		'app.imagem',
		'app.albun'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Promocao = ClassRegistry::init('Promocao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Promocao);

		parent::tearDown();
	}

}
