<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1beta1;

/**
 * <pre>
 * Audio encoding of the data sent in the audio message. All encodings support
 * only 1 channel (mono) audio. Only `FLAC` includes a header that describes
 * the bytes of audio that follow the header. The other encodings are raw
 * audio bytes with no header.
 * For best results, the audio source should be captured and transmitted using
 * a lossless encoding (`FLAC` or `LINEAR16`). Recognition accuracy may be
 * reduced if lossy codecs (such as AMR, AMR_WB and MULAW) are used to capture
 * or transmit the audio, particularly if background noise is present.
 * </pre>
 *
 * Protobuf enum <code>google.cloud.speech.v1beta1.RecognitionConfig.AudioEncoding</code>
 */
class RecognitionConfig_AudioEncoding
{
    /**
     * <pre>
     * Not specified. Will return result [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
     * </pre>
     *
     * <code>ENCODING_UNSPECIFIED = 0;</code>
     */
    const ENCODING_UNSPECIFIED = 0;
    /**
     * <pre>
     * Uncompressed 16-bit signed little-endian samples (Linear PCM).
     * This is the only encoding that may be used by `AsyncRecognize`.
     * </pre>
     *
     * <code>LINEAR16 = 1;</code>
     */
    const LINEAR16 = 1;
    /**
     * <pre>
     * This is the recommended encoding for `SyncRecognize` and
     * `StreamingRecognize` because it uses lossless compression; therefore
     * recognition accuracy is not compromised by a lossy codec.
     * The stream FLAC (Free Lossless Audio Codec) encoding is specified at:
     * http://flac.sourceforge.net/documentation.html.
     * 16-bit and 24-bit samples are supported.
     * Not all fields in STREAMINFO are supported.
     * </pre>
     *
     * <code>FLAC = 2;</code>
     */
    const FLAC = 2;
    /**
     * <pre>
     * 8-bit samples that compand 14-bit audio samples using G.711 PCMU/mu-law.
     * </pre>
     *
     * <code>MULAW = 3;</code>
     */
    const MULAW = 3;
    /**
     * <pre>
     * Adaptive Multi-Rate Narrowband codec. `sample_rate` must be 8000 Hz.
     * </pre>
     *
     * <code>AMR = 4;</code>
     */
    const AMR = 4;
    /**
     * <pre>
     * Adaptive Multi-Rate Wideband codec. `sample_rate` must be 16000 Hz.
     * </pre>
     *
     * <code>AMR_WB = 5;</code>
     */
    const AMR_WB = 5;
}

