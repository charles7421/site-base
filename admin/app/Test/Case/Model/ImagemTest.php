<?php
App::uses('Imagem', 'Model');

/**
 * Imagem Test Case
 */
class ImagemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.imagem',
		'app.albun',
		'app.produto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Imagem = ClassRegistry::init('Imagem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Imagem);

		parent::tearDown();
	}

}
