<?php
/**
 * OfferStatusExternal
 *
 * PHP version 5
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * Supplier API description... <br /><br /> Open [OpenAPI.json](doc.json).
 *
 * OpenAPI spec version: 1.1.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Emesa\PartnerPlatform\Model;
use \Emesa\PartnerPlatform\ObjectSerializer;

/**
 * OfferStatusExternal Class Doc Comment
 *
 * @category Class
 * @package  Emesa\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OfferStatusExternal
{
    /**
     * Possible values of this enum
     */
    const NO_OFFER = 'no_offer';
const WAITING_FOR_APPROVAL = 'waiting_for_approval';
const APPROVED = 'approved';
const STOPPED = 'stopped';
const DISAPPROVED = 'disapproved';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_OFFER,
self::WAITING_FOR_APPROVAL,
self::APPROVED,
self::STOPPED,
self::DISAPPROVED,        ];
    }
}
