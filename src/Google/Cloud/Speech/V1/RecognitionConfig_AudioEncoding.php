<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

/**
 * <pre>
 * Audio encoding of the data sent in the audio message. All encodings support
 * only 1 channel (mono) audio. Only `FLAC` includes a header that describes
 * the bytes of audio that follow the header. The other encodings are raw
 * audio bytes with no header.
 * For best results, the audio source should be captured and transmitted using
 * a lossless encoding (`FLAC` or `LINEAR16`). Recognition accuracy may be
 * reduced if lossy codecs, which include the other codecs listed in
 * this section, are used to capture or transmit the audio, particularly if
 * background noise is present.
 * </pre>
 *
 * Protobuf enum <code>google.cloud.speech.v1.RecognitionConfig.AudioEncoding</code>
 */
class RecognitionConfig_AudioEncoding
{
    /**
     * <pre>
     * Not specified. Will return result [google.rpc.Code.INVALID_ARGUMENT][].
     * </pre>
     *
     * <code>ENCODING_UNSPECIFIED = 0;</code>
     */
    const ENCODING_UNSPECIFIED = 0;
    /**
     * <pre>
     * Uncompressed 16-bit signed little-endian samples (Linear PCM).
     * </pre>
     *
     * <code>LINEAR16 = 1;</code>
     */
    const LINEAR16 = 1;
    /**
     * <pre>
     * [`FLAC`](https://xiph.org/flac/documentation.html) (Free Lossless Audio
     * Codec) is the recommended encoding because it is
     * lossless--therefore recognition is not compromised--and
     * requires only about half the bandwidth of `LINEAR16`. `FLAC` stream
     * encoding supports 16-bit and 24-bit samples, however, not all fields in
     * `STREAMINFO` are supported.
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
     * Adaptive Multi-Rate Narrowband codec. `sample_rate_hertz` must be 8000.
     * </pre>
     *
     * <code>AMR = 4;</code>
     */
    const AMR = 4;
    /**
     * <pre>
     * Adaptive Multi-Rate Wideband codec. `sample_rate_hertz` must be 16000.
     * </pre>
     *
     * <code>AMR_WB = 5;</code>
     */
    const AMR_WB = 5;
    /**
     * <pre>
     * Opus encoded audio frames in Ogg container
     * ([OggOpus](https://wiki.xiph.org/OggOpus)).
     * `sample_rate_hertz` must be 16000.
     * </pre>
     *
     * <code>OGG_OPUS = 6;</code>
     */
    const OGG_OPUS = 6;
    /**
     * <pre>
     * Although the use of lossy encodings is not recommended, if a very low
     * bitrate encoding is required, `OGG_OPUS` is highly preferred over
     * Speex encoding. The [Speex](https://speex.org/)  encoding supported by
     * Cloud Speech API has a header byte in each block, as in MIME type
     * `audio/x-speex-with-header-byte`.
     * It is a variant of the RTP Speex encoding defined in
     * [RFC 5574](https://tools.ietf.org/html/rfc5574).
     * The stream is a sequence of blocks, one block per RTP packet. Each block
     * starts with a byte containing the length of the block, in bytes, followed
     * by one or more frames of Speex data, padded to an integral number of
     * bytes (octets) as specified in RFC 5574. In other words, each RTP header
     * is replaced with a single byte containing the block length. Only Speex
     * wideband is supported. `sample_rate_hertz` must be 16000.
     * </pre>
     *
     * <code>SPEEX_WITH_HEADER_BYTE = 7;</code>
     */
    const SPEEX_WITH_HEADER_BYTE = 7;
}

