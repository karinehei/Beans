<?php
/**
 * Stub for the _Beans_Anonymous_Actions.
 *
 * @package Beans\Framework\Tests\Unit\API\HTML\Fixtures
 *
 * @since   1.5.0
 */

namespace Beans\Framework\Tests\Unit\api\html\fixtures;

/**
 * Class Anonymous_Action_Stub
 *
 * @package Beans\Framework\Tests\Unit\api\html\fixtures
 */
class Anonymous_Action_Stub {

	/**
	 * The callback to register to the given $hook.
	 *
	 * @var string|array
	 */
	public $callback;

	/**
	 * Anonymous_Action_Stub constructor.
	 *
	 * @param string $hook     Hook.
	 * @param array  $callback Callback.
	 * @param int    $priority Action priority.
	 */
	public function __construct( $hook, array $callback, $priority ) {
		$this->callback = $callback;

		add_action( $hook, array( $this, 'callback' ), $priority );
	}

	/**
	 * Mocked callback.
	 */
	public function callback() {
		// do nothing.
	}
}
