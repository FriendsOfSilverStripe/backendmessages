<?php

/**
 * This field lets you put an arbitrary warning into your backend
 *
 * <code>
 * BaseMessage::create(
 *    $content = 'your message'
 * )
 * </code>
 */
class Message
{
    /**
     * Creates a error message.
     *
     * @param string
     * @return MessageBoxField
     */
    public static function generic($message = null, $CSSClass = null)
    {
        return MessageBoxField::create(md5($message), $message)->addCSSClass($CSSClass);
    }

    /**
     * Creates a error message.
     *
     * @param string
     * @return MessageBoxField
     */
    public static function error($message = null)
    {
        return self::generic($message, ErrorMessage::$CSSClass);
    }

    /**
     * Creates a warning message.
     *
     * @param string
     * @return MessageBoxField
     */
    public static function warning($message = null)
    {
        return self::generic($message, WarningMessage::$CSSClass);
    }

    /**
     * Creates a success message.
     *
     * @param string
     * @return MessageBoxField
     */
    public static function success($message = null)
    {
        return self::generic($message, SuccessMessage::$CSSClass);
    }

    /**
     * Creates a notice message.
     *
     * @param string
     * @return MessageBoxField
     */
    public static function notice($message = null)
    {
        return self::generic($message, NoticeMessage::$CSSClass);
    }
}
