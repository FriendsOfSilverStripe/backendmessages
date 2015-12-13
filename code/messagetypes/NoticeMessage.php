<?php
/**
 * This field lets you put an notice message box into your backend
 *
 * <code>
 * NoticeMessage::create(
 *    $content = 'your notice'
 * )
 * </code>
 */
class NoticeMessage
{
    /**
     * @var string
     */
    public static $CSSClass = 'notice';

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
