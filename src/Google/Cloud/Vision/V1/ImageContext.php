<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Image context and/or feature-specific parameters.
 * </pre>
 *
 * Protobuf type <code>google.cloud.vision.v1.ImageContext</code>
 */
class ImageContext extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * lat/long rectangle that specifies the location of the image.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.LatLongRect lat_long_rect = 1;</code>
     */
    private $lat_long_rect = null;
    /**
     * <pre>
     * List of languages to use for TEXT_DETECTION. In most cases, an empty value
     * yields the best results since it enables automatic language detection. For
     * languages based on the Latin alphabet, setting `language_hints` is not
     * needed. In rare cases, when the language of the text in the image is known,
     * setting a hint will help get better results (although it will be a
     * significant hindrance if the hint is wrong). Text detection returns an
     * error if one or more of the specified languages is not one of the
     * [supported languages](/vision/docs/languages).
     * </pre>
     *
     * <code>repeated string language_hints = 2;</code>
     */
    private $language_hints;
    /**
     * <pre>
     * Parameters for crop hints annotation request.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.CropHintsParams crop_hints_params = 4;</code>
     */
    private $crop_hints_params = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * lat/long rectangle that specifies the location of the image.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.LatLongRect lat_long_rect = 1;</code>
     */
    public function getLatLongRect()
    {
        return $this->lat_long_rect;
    }

    /**
     * <pre>
     * lat/long rectangle that specifies the location of the image.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.LatLongRect lat_long_rect = 1;</code>
     */
    public function setLatLongRect(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\LatLongRect::class);
        $this->lat_long_rect = $var;
    }

    /**
     * <pre>
     * List of languages to use for TEXT_DETECTION. In most cases, an empty value
     * yields the best results since it enables automatic language detection. For
     * languages based on the Latin alphabet, setting `language_hints` is not
     * needed. In rare cases, when the language of the text in the image is known,
     * setting a hint will help get better results (although it will be a
     * significant hindrance if the hint is wrong). Text detection returns an
     * error if one or more of the specified languages is not one of the
     * [supported languages](/vision/docs/languages).
     * </pre>
     *
     * <code>repeated string language_hints = 2;</code>
     */
    public function getLanguageHints()
    {
        return $this->language_hints;
    }

    /**
     * <pre>
     * List of languages to use for TEXT_DETECTION. In most cases, an empty value
     * yields the best results since it enables automatic language detection. For
     * languages based on the Latin alphabet, setting `language_hints` is not
     * needed. In rare cases, when the language of the text in the image is known,
     * setting a hint will help get better results (although it will be a
     * significant hindrance if the hint is wrong). Text detection returns an
     * error if one or more of the specified languages is not one of the
     * [supported languages](/vision/docs/languages).
     * </pre>
     *
     * <code>repeated string language_hints = 2;</code>
     */
    public function setLanguageHints(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->language_hints = $var;
    }

    /**
     * <pre>
     * Parameters for crop hints annotation request.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.CropHintsParams crop_hints_params = 4;</code>
     */
    public function getCropHintsParams()
    {
        return $this->crop_hints_params;
    }

    /**
     * <pre>
     * Parameters for crop hints annotation request.
     * </pre>
     *
     * <code>.google.cloud.vision.v1.CropHintsParams crop_hints_params = 4;</code>
     */
    public function setCropHintsParams(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\CropHintsParams::class);
        $this->crop_hints_params = $var;
    }

}

