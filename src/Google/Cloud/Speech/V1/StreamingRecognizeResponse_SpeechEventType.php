<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

/**
 * <pre>
 * Indicates the type of speech event.
 * </pre>
 *
 * Protobuf enum <code>google.cloud.speech.v1.StreamingRecognizeResponse.SpeechEventType</code>
 */
class StreamingRecognizeResponse_SpeechEventType
{
    /**
     * <pre>
     * No speech event specified.
     * </pre>
     *
     * <code>SPEECH_EVENT_UNSPECIFIED = 0;</code>
     */
    const SPEECH_EVENT_UNSPECIFIED = 0;
    /**
     * <pre>
     * This event indicates that the server has detected the end of the user's
     * speech utterance and expects no additional speech. Therefore, the server
     * will not process additional audio (although it may subsequently return
     * additional results). The client should stop sending additional audio
     * data, half-close the gRPC connection, and wait for any additional results
     * until the server closes the gRPC connection. This event is only sent if
     * `single_utterance` was set to `true`, and is not used otherwise.
     * </pre>
     *
     * <code>END_OF_SINGLE_UTTERANCE = 1;</code>
     */
    const END_OF_SINGLE_UTTERANCE = 1;
}

