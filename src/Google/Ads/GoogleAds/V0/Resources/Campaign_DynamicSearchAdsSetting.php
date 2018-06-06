<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/campaign.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The setting for controlling Dynamic Search Ads (DSA).
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.Campaign.DynamicSearchAdsSetting</code>
 */
class Campaign_DynamicSearchAdsSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * The Internet domain name that this setting represents, e.g., "google.com"
     * or "www.google.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain_name = 1;</code>
     */
    private $domain_name = null;
    /**
     * The language code specifying the language of the domain, e.g., "en".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     */
    private $language_code = null;
    /**
     * Whether the campaign uses advertiser supplied URLs exclusively.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue use_supplied_urls_only = 3;</code>
     */
    private $use_supplied_urls_only = null;
    /**
     * The list of page feeds associated with the campaign.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value feed_ids = 4;</code>
     */
    private $feed_ids;

    public function __construct() {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\Campaign::initOnce();
        parent::__construct();
    }

    /**
     * The Internet domain name that this setting represents, e.g., "google.com"
     * or "www.google.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain_name = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }

    /**
     * The Internet domain name that this setting represents, e.g., "google.com"
     * or "www.google.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain_name = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDomainName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->domain_name = $var;

        return $this;
    }

    /**
     * The language code specifying the language of the domain, e.g., "en".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The language code specifying the language of the domain, e.g., "en".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Whether the campaign uses advertiser supplied URLs exclusively.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue use_supplied_urls_only = 3;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getUseSuppliedUrlsOnly()
    {
        return $this->use_supplied_urls_only;
    }

    /**
     * Whether the campaign uses advertiser supplied URLs exclusively.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue use_supplied_urls_only = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setUseSuppliedUrlsOnly($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->use_supplied_urls_only = $var;

        return $this;
    }

    /**
     * The list of page feeds associated with the campaign.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value feed_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeedIds()
    {
        return $this->feed_ids;
    }

    /**
     * The list of page feeds associated with the campaign.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value feed_ids = 4;</code>
     * @param \Google\Protobuf\Int64Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeedIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Int64Value::class);
        $this->feed_ids = $arr;

        return $this;
    }

}
