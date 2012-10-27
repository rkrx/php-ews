<?php
/**
 * Contains EWSType_ExpandDLResponseType.
 */

/**
 * Defines a response to a request to expand a distribution list.
 *
 * @package php-ews\Types
 *
 * @todo Create a common response type class.
 */
class EWSType_ExpandDLResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
