<?php
/**
 * This field lets you put an error message box into your backend
 *
 * <code>
 * ErrorMessage::create(
 *    $content = 'your error'
 * )
 * </code>
 */
class ErrorMessage
{
    /**
     * @var string
     */
    public static $CSSClass = 'error';

    /**
     * creates a message box
     *
     * @param string $message
     * @return MessageBoxField
     */
    public static function create($message)
    {
        return Message::generic($message, self::$CSSClass);
    }
}
