<?php
/**
 * CoverTypes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * CoverTypes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CoverTypes
{
    /**
     * Possible values of this enum
     */
    public const DESIGNER_TOP_5 = 'designer-top-5';

    public const DESIGNER_TOP_10 = 'designer-top-10';

    public const LPS_ON_THE_FLOOR = 'lps-on-the-floor';

    public const GRID_STATS = 'grid-stats';

    public const GRID_STATS_SPECIAL = 'grid-stats-special';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESIGNER_TOP_5,
            self::DESIGNER_TOP_10,
            self::LPS_ON_THE_FLOOR,
            self::GRID_STATS,
            self::GRID_STATS_SPECIAL
        ];
    }
}
