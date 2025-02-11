<?php
/**
 * Mode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Listenbrainz
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ListenBrainz Swagger - OpenAPI 3.0
 *
 * OpenAPI client defintion.
 *
 * The version of the OpenAPI document: v-2024-07-17.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Listenbrainz\Model;
use \Listenbrainz\ObjectSerializer;

/**
 * Mode Class Doc Comment
 *
 * @category Class
 * @description mode is the LB radio mode to be used for this query
 * @package  Listenbrainz
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Mode
{
    /**
     * Possible values of this enum
     */
    public const EASY = 'easy';

    public const MEDIUM = 'medium';

    public const HARD = 'hard';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EASY,
            self::MEDIUM,
            self::HARD
        ];
    }
}
