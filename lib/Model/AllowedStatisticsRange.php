<?php
/**
 * AllowedStatisticsRange
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
 * AllowedStatisticsRange Class Doc Comment
 *
 * @category Class
 * @package  Listenbrainz
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AllowedStatisticsRange
{
    /**
     * Possible values of this enum
     */
    public const ALL_TIME = 'all_time';

    public const MONTH = 'month';

    public const WEEK = 'week';

    public const YEAR = 'year';

    public const QUARTER = 'quarter';

    public const HALF_YEARLY = 'half_yearly';

    public const THIS_WEEK = 'this_week';

    public const THIS_MONTH = 'this_month';

    public const THIS_YEAR = 'this_year';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL_TIME,
            self::MONTH,
            self::WEEK,
            self::YEAR,
            self::QUARTER,
            self::HALF_YEARLY,
            self::THIS_WEEK,
            self::THIS_MONTH,
            self::THIS_YEAR
        ];
    }
}
