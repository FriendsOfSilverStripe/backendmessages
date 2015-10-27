<?php
/**
 * This field lets you put an success message box into your backend
 *
 * <code>
 * SuccessMessage::create(
 *    $content = 'your request was successful submitted.'
 * )
 * </code>
 */
class SuccessMessage {
	/**
	 * @var string
	 */
	public static $CSSClass = 'good';

	/**
	 * creates a message box
	 *
	 * @param string $message
	 * @return MessageBoxField
	 */
	public static function create($message) {
		return Message::generic($message, self::$CSSClass);
	}
}
