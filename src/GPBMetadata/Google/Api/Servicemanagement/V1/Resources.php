<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace GPBMetadata\Google\Api\Servicemanagement\V1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\ConfigChange::initOnce();
        \GPBMetadata\Google\Api\Service::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a85120a2f676f6f676c652f6170692f736572766963656d616e6167656d" .
            "656e742f76312f7265736f75726365732e70726f746f121f676f6f676c65" .
            "2e6170692e736572766963656d616e6167656d656e742e76311a1c676f6f" .
            "676c652f6170692f616e6e6f746174696f6e732e70726f746f1a1e676f6f" .
            "676c652f6170692f636f6e6669675f6368616e67652e70726f746f1a1867" .
            "6f6f676c652f6170692f736572766963652e70726f746f1a23676f6f676c" .
            "652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f" .
            "1a19676f6f676c652f70726f746f6275662f616e792e70726f746f1a2067" .
            "6f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f74" .
            "6f1a1c676f6f676c652f70726f746f6275662f7374727563742e70726f74" .
            "6f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70" .
            "726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f22" .
            "430a0e4d616e616765645365727669636512140a0c736572766963655f6e" .
            "616d65180220012809121b0a1370726f64756365725f70726f6a6563745f" .
            "69641803200128092291030a114f7065726174696f6e4d65746164617461" .
            "12160a0e7265736f757263655f6e616d657318012003280912460a057374" .
            "65707318022003280b32372e676f6f676c652e6170692e73657276696365" .
            "6d616e6167656d656e742e76312e4f7065726174696f6e4d657461646174" .
            "612e53746570121b0a1370726f67726573735f70657263656e7461676518" .
            "0320012805122e0a0a73746172745f74696d6518042001280b321a2e676f" .
            "6f676c652e70726f746f6275662e54696d657374616d701a660a04537465" .
            "7012130a0b6465736372697074696f6e18022001280912490a0673746174" .
            "757318042001280e32392e676f6f676c652e6170692e736572766963656d" .
            "616e6167656d656e742e76312e4f7065726174696f6e4d65746164617461" .
            "2e53746174757322670a0653746174757312160a125354415455535f554e" .
            "535045434946494544100012080a04444f4e451001120f0a0b4e4f545f53" .
            "5441525445441002120f0a0b494e5f50524f47524553531003120a0a0646" .
            "41494c45441004120d0a0943414e43454c4c45441005228f010a0a446961" .
            "676e6f7374696312100a086c6f636174696f6e180120012809123e0a046b" .
            "696e6418022001280e32302e676f6f676c652e6170692e73657276696365" .
            "6d616e6167656d656e742e76312e446961676e6f737469632e4b696e6412" .
            "0f0a076d657373616765180320012809221e0a044b696e64120b0a075741" .
            "524e494e47100012090a054552524f52100122560a0c436f6e666967536f" .
            "75726365120a0a026964180520012809123a0a0566696c65731802200328" .
            "0b322b2e676f6f676c652e6170692e736572766963656d616e6167656d65" .
            "6e742e76312e436f6e66696746696c652285020a0a436f6e66696746696c" .
            "6512110a0966696c655f7061746818012001280912150a0d66696c655f63" .
            "6f6e74656e747318032001280c12470a0966696c655f7479706518042001" .
            "280e32342e676f6f676c652e6170692e736572766963656d616e6167656d" .
            "656e742e76312e436f6e66696746696c652e46696c65547970652283010a" .
            "0846696c655479706512190a1546494c455f545950455f554e5350454349" .
            "46494544100012170a13534552564943455f434f4e4649475f59414d4c10" .
            "0112110a0d4f50454e5f4150495f4a534f4e100212110a0d4f50454e5f41" .
            "50495f59414d4c1003121d0a1946494c455f44455343524950544f525f53" .
            "45545f50524f544f100422190a09436f6e666967526566120c0a046e616d" .
            "6518012001280922400a0c4368616e67655265706f727412300a0e636f6e" .
            "6669675f6368616e67657318012003280b32182e676f6f676c652e617069" .
            "2e436f6e6669674368616e676522db050a07526f6c6c6f757412120a0a72" .
            "6f6c6c6f75745f6964180120012809122f0a0b6372656174655f74696d65" .
            "18022001280b321a2e676f6f676c652e70726f746f6275662e54696d6573" .
            "74616d7012120a0a637265617465645f627918032001280912460a067374" .
            "6174757318042001280e32362e676f6f676c652e6170692e736572766963" .
            "656d616e6167656d656e742e76312e526f6c6c6f75742e526f6c6c6f7574" .
            "53746174757312630a18747261666669635f70657263656e745f73747261" .
            "7465677918052001280b323f2e676f6f676c652e6170692e736572766963" .
            "656d616e6167656d656e742e76312e526f6c6c6f75742e54726166666963" .
            "50657263656e745374726174656779480012620a1764656c6574655f7365" .
            "72766963655f737472617465677918c8012001280b323e2e676f6f676c65" .
            "2e6170692e736572766963656d616e6167656d656e742e76312e526f6c6c" .
            "6f75742e44656c657465536572766963655374726174656779480012140a" .
            "0c736572766963655f6e616d651808200128091ab3010a16547261666669" .
            "6350657263656e74537472617465677912650a0b70657263656e74616765" .
            "7318012003280b32502e676f6f676c652e6170692e736572766963656d61" .
            "6e6167656d656e742e76312e526f6c6c6f75742e54726166666963506572" .
            "63656e7453747261746567792e50657263656e7461676573456e7472791a" .
            "320a1050657263656e7461676573456e747279120b0a036b657918012001" .
            "2809120d0a0576616c75651802200128013a0238011a170a1544656c6574" .
            "6553657276696365537472617465677922750a0d526f6c6c6f7574537461" .
            "747573121e0a1a524f4c4c4f55545f5354415455535f554e535045434946" .
            "4945441000120f0a0b494e5f50524f47524553531001120b0a0753554343" .
            "4553531002120d0a0943414e43454c4c45441003120a0a064641494c4544" .
            "1004120b0a0750454e44494e471005420a0a087374726174656779429001" .
            "0a23636f6d2e676f6f676c652e6170692e736572766963656d616e616765" .
            "6d656e742e7631420e5265736f757263657350726f746f50015a50676f6f" .
            "676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65" .
            "617069732f6170692f736572766963656d616e6167656d656e742f76313b" .
            "736572766963656d616e6167656d656e74a202044741534d620670726f74" .
            "6f33"
        ));

        static::$is_initialized = true;
    }
}

