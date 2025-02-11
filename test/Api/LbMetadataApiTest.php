<?php
/**
 * LbMetadataApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Listenbrainz\Test\Api;

use \Listenbrainz\Configuration;
use \Listenbrainz\ApiException;
use \Listenbrainz\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * LbMetadataApiTest Class Doc Comment
 *
 * @category Class
 * @package  Listenbrainz
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LbMetadataApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for artistMetadata
     *
     * This endpoint takes in a list of artist_mbids and returns an array of dicts that contain recording metadata suitable for showing in a context that requires as much detail about a recording and the artist. Using the inc parameter, you can control which portions of metadata to fetch..
     *
     */
    public function testArtistMetadata()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getManualMapping
     *
     * Get the manual mapping of a recording messybrainz ID that a user added..
     *
     */
    public function testGetManualMapping()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for lookup
     *
     * This endpoint looks up mbid metadata for the given artist, recording and optionally a release name. The total number of characters in the artist name, recording name and release name query arguments should be less than or equal to MAX_MAPPING_QUERY_LENGTH..
     *
     */
    public function testLookup()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for recordingMetadata
     *
     * This endpoint takes in a list of recording_mbids and returns an array of dicts that contain recording metadata suitable for showing in a context that requires as much detail about a recording and the artist. Using the inc parameter, you can control which portions of metadata to fetch..
     *
     */
    public function testRecordingMetadata()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for releaseGroupMetadata
     *
     * This endpoint takes in a list of release_group_mbids and returns an array of dicts that contain release_group metadata suitable for showing in a context that requires as much detail about a release_group and the artist. Using the inc parameter, you can control which portions of metadata to fetch..
     *
     */
    public function testReleaseGroupMetadata()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for submitManualMapping
     *
     * Submit a manual mapping of a recording messybrainz ID to a musicbrainz recording id..
     *
     */
    public function testSubmitManualMapping()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
