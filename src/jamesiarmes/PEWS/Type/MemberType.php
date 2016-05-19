<?php
/**
 * Contains \jamesiarmes\PEWS\Type\MemberType.
 */

namespace jamesiarmes\PEWS\Type;

use jamesiarmes\PEWS\Type;

/**
 * Represents a member of a distribution list.
 *
 * @package php-ews\Types
 */
class MemberType extends Type
{
    /**
     * Provides a unique identifier for the distribution list member.
     *
     * This attribute is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Key;

    /**
     * Represents the e-mail address of the distribution list member.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Type\EmailAddressType
     */
    public $Mailbox;

    /**
     * Provides information about the status of a distribution list member.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\Enumeration\MemberStatusType
     */
    public $Status;
}
