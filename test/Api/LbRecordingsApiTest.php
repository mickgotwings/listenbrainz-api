<?php
/**
 * LbRecordingsApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Listenbrainz\Test\Api;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * LbRecordingsApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LbRecordingsApiTest extends TestCase
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
     * Test case for getFeedback
     *
     * Get feedback given by user 'user_name'. The format for the JSON returned is defined in our Feedback JSON Documentation.  If the optional argument score is not given, this endpoint will return all the feedback submitted by the user. Otherwise filters the feedback to be returned by score..
     *
     */
    public function testGetFeedback()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getFeedbackForRecordings
     *
     * Get feedback given by user user_name for the list of recordings supplied..
     *
     */
    public function testGetFeedbackForRecordings()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getFeedbackMbid
     *
     * Get feedback for recording with given recording_mbid..
     *
     */
    public function testGetFeedbackMbid()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getFeedbackMsid
     *
     * Get feedback for recording with given recording_msid..
     *
     */
    public function testGetFeedbackMsid()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getPins
     *
     * Get a list of all recordings ever pinned by a user with given user_name in descending order of the time they were originally pinned..
     *
     */
    public function testGetPins()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getPinsCurrent
     *
     * Get the currently pinned recording by a user with given user_name..
     *
     */
    public function testGetPinsCurrent()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for getPinsFollowing
     *
     * Get a list containing the active pinned recordings for all users in a user's user_name following list. The returned pinned recordings are sorted in descending order of the time they were pinned..
     *
     */
    public function testGetPinsFollowing()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for pin
     *
     * Pin a recording for user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header! Each request should contain only one pinned recording item in the payload..
     *
     */
    public function testPin()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for pinDelete
     *
     * Deletes the pinned recording with given row_id from the server. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header!.
     *
     */
    public function testPinDelete()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for recordingFeedback
     *
     * Submit recording feedback (love/hate) to the server. A user token (found on https://listenbrainz.org/settings/ ) must be provided in the Authorization header! Each request should contain only one feedback in the payload..
     *
     */
    public function testRecordingFeedback()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for unpin
     *
     * Unpins the currently active pinned recording for the user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header!.
     *
     */
    public function testUnpin()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for updatePin
     *
     * Updates the blurb content of a pinned recording for the user. A user token (found on https://listenbrainz.org/settings/) must be provided in the Authorization header! Each request should contain only one pinned recording item in the payload..
     *
     */
    public function testUpdatePin()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
