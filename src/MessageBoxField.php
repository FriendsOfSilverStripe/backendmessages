<?php
/**
 * This field lets you put an arbitrary message box into your backend.
 *
 * <code>
 * MessageBoxField::create(
 *    $name = "yourmessageboxfield",
 *    $content = 'your message'
 * )->addCSSClass('notice');
 * </code>
 */

namespace FriendsOfSilverStripe\Backendmessages;

use SilverStripe\Forms\LiteralField;
use SilverStripe\Core\Config\Configurable;

class MessageBoxField extends LiteralField
{
    use Configurable;

    /**
     * @var string
     */
    protected $classes = 'alert';

    /**
     * Allow generic messages to contain HTML.
     * Defaults to false to maintain backwards compatibility
     *
     * @var boolean
     */
    private static $allow_html = false;

    /**
     * @var string
     */
    public function addCSSClass($CSSClass)
    {
        $this->classes .= ' '.(string) $CSSClass;

        return $this;
    }

    /**
     * adjusts the return to include the required classes.
     *
     * @param array $properties
     *
     * @return string
     */
    public function FieldHolder($properties = array())
    {
        $content = $this->content;

        if ($content instanceof ViewableData) {
            if ($properties) {
                $content = $content->customise($properties);
            }

            $content = $content->forTemplate();
        }

        if($this->config()->allow_html === true) {
            return '<div class="'.$this->classes.'"" name="'.$this->getName().'">'.$content.'</div>';
        } else {
            return '<p class="'.$this->classes.'"" name="'.$this->getName().'">'.$content.'</p>';
        }
    }
}
