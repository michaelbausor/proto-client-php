<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/debugger.proto

namespace GPBMetadata\Google\Devtools\Clouddebugger\V2;

class Debugger
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Data::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a94130a2f676f6f676c652f646576746f6f6c732f636c6f756464656275" .
            "676765722f76322f64656275676765722e70726f746f1220676f6f676c65" .
            "2e646576746f6f6c732e636c6f756464656275676765722e76321a1c676f" .
            "6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a2b676f" .
            "6f676c652f646576746f6f6c732f636c6f756464656275676765722f7632" .
            "2f646174612e70726f746f1a1b676f6f676c652f70726f746f6275662f65" .
            "6d7074792e70726f746f2285010a14536574427265616b706f696e745265" .
            "717565737412130a0b64656275676765655f696418012001280912400a0a" .
            "627265616b706f696e7418022001280b322c2e676f6f676c652e64657674" .
            "6f6f6c732e636c6f756464656275676765722e76322e427265616b706f69" .
            "6e7412160a0e636c69656e745f76657273696f6e18042001280922590a15" .
            "536574427265616b706f696e74526573706f6e736512400a0a627265616b" .
            "706f696e7418012001280b322c2e676f6f676c652e646576746f6f6c732e" .
            "636c6f756464656275676765722e76322e427265616b706f696e74225a0a" .
            "14476574427265616b706f696e745265717565737412130a0b6465627567" .
            "6765655f696418012001280912150a0d627265616b706f696e745f696418" .
            "022001280912160a0e636c69656e745f76657273696f6e18042001280922" .
            "590a15476574427265616b706f696e74526573706f6e736512400a0a6272" .
            "65616b706f696e7418012001280b322c2e676f6f676c652e646576746f6f" .
            "6c732e636c6f756464656275676765722e76322e427265616b706f696e74" .
            "225d0a1744656c657465427265616b706f696e745265717565737412130a" .
            "0b64656275676765655f696418012001280912150a0d627265616b706f69" .
            "6e745f696418022001280912160a0e636c69656e745f76657273696f6e18" .
            "032001280922e2020a164c697374427265616b706f696e74735265717565" .
            "737412130a0b64656275676765655f696418012001280912190a11696e63" .
            "6c7564655f616c6c5f757365727318022001280812180a10696e636c7564" .
            "655f696e616374697665180320012808125e0a06616374696f6e18042001" .
            "280b324e2e676f6f676c652e646576746f6f6c732e636c6f756464656275" .
            "676765722e76322e4c697374427265616b706f696e747352657175657374" .
            "2e427265616b706f696e74416374696f6e56616c756512150a0d73747269" .
            "705f726573756c747318052001280812120a0a776169745f746f6b656e18" .
            "062001280912160a0e636c69656e745f76657273696f6e1808200128091a" .
            "5b0a15427265616b706f696e74416374696f6e56616c756512420a057661" .
            "6c756518012001280e32332e676f6f676c652e646576746f6f6c732e636c" .
            "6f756464656275676765722e76322e427265616b706f696e742e41637469" .
            "6f6e22750a174c697374427265616b706f696e7473526573706f6e736512" .
            "410a0b627265616b706f696e747318012003280b322c2e676f6f676c652e" .
            "646576746f6f6c732e636c6f756464656275676765722e76322e42726561" .
            "6b706f696e7412170a0f6e6578745f776169745f746f6b656e1802200128" .
            "0922590a144c69737444656275676765657352657175657374120f0a0770" .
            "726f6a65637418022001280912180a10696e636c7564655f696e61637469" .
            "766518032001280812160a0e636c69656e745f76657273696f6e18042001" .
            "280922560a154c697374446562756767656573526573706f6e7365123d0a" .
            "0964656275676765657318012003280b322a2e676f6f676c652e64657674" .
            "6f6f6c732e636c6f756464656275676765722e76322e4465627567676565" .
            "32bd070a0944656275676765723212ca010a0d536574427265616b706f69" .
            "6e7412362e676f6f676c652e646576746f6f6c732e636c6f756464656275" .
            "676765722e76322e536574427265616b706f696e74526571756573741a37" .
            "2e676f6f676c652e646576746f6f6c732e636c6f75646465627567676572" .
            "2e76322e536574427265616b706f696e74526573706f6e7365224882d3e4" .
            "93024222342f76322f64656275676765722f6465627567676565732f7b64" .
            "656275676765655f69647d2f627265616b706f696e74732f7365743a0a62" .
            "7265616b706f696e7412ca010a0d476574427265616b706f696e7412362e" .
            "676f6f676c652e646576746f6f6c732e636c6f756464656275676765722e" .
            "76322e476574427265616b706f696e74526571756573741a372e676f6f67" .
            "6c652e646576746f6f6c732e636c6f756464656275676765722e76322e47" .
            "6574427265616b706f696e74526573706f6e7365224882d3e49302421240" .
            "2f76322f64656275676765722f6465627567676565732f7b646562756767" .
            "65655f69647d2f627265616b706f696e74732f7b627265616b706f696e74" .
            "5f69647d12af010a1044656c657465427265616b706f696e7412392e676f" .
            "6f676c652e646576746f6f6c732e636c6f756464656275676765722e7632" .
            "2e44656c657465427265616b706f696e74526571756573741a162e676f6f" .
            "676c652e70726f746f6275662e456d707479224882d3e49302422a402f76" .
            "322f64656275676765722f6465627567676565732f7b6465627567676565" .
            "5f69647d2f627265616b706f696e74732f7b627265616b706f696e745f69" .
            "647d12c0010a0f4c697374427265616b706f696e747312382e676f6f676c" .
            "652e646576746f6f6c732e636c6f756464656275676765722e76322e4c69" .
            "7374427265616b706f696e7473526571756573741a392e676f6f676c652e" .
            "646576746f6f6c732e636c6f756464656275676765722e76322e4c697374" .
            "427265616b706f696e7473526573706f6e7365223882d3e493023212302f" .
            "76322f64656275676765722f6465627567676565732f7b64656275676765" .
            "655f69647d2f627265616b706f696e747312a0010a0d4c69737444656275" .
            "676765657312362e676f6f676c652e646576746f6f6c732e636c6f756464" .
            "656275676765722e76322e4c697374446562756767656573526571756573" .
            "741a372e676f6f676c652e646576746f6f6c732e636c6f75646465627567" .
            "6765722e76322e4c697374446562756767656573526573706f6e7365221e" .
            "82d3e493021812162f76322f64656275676765722f646562756767656573" .
            "4286010a24636f6d2e676f6f676c652e646576746f6f6c732e636c6f7564" .
            "64656275676765722e7632420d446562756767657250726f746f50015a4d" .
            "676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f" .
            "676c65617069732f646576746f6f6c732f636c6f75646465627567676572" .
            "2f76323b636c6f75646465627567676572620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

