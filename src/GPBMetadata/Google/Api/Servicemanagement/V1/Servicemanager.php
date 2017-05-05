<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace GPBMetadata\Google\Api\Servicemanagement\V1;

class Servicemanager
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Service::initOnce();
        \GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae1260a34676f6f676c652f6170692f736572766963656d616e6167656d" .
            "656e742f76312f736572766963656d616e616765722e70726f746f121f67" .
            "6f6f676c652e6170692e736572766963656d616e6167656d656e742e7631" .
            "1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f" .
            "1a18676f6f676c652f6170692f736572766963652e70726f746f1a2f676f" .
            "6f676c652f6170692f736572766963656d616e6167656d656e742f76312f" .
            "7265736f75726365732e70726f746f1a23676f6f676c652f6c6f6e677275" .
            "6e6e696e672f6f7065726174696f6e732e70726f746f1a19676f6f676c65" .
            "2f70726f746f6275662f616e792e70726f746f1a1b676f6f676c652f7072" .
            "6f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f" .
            "746f6275662f6669656c645f6d61736b2e70726f746f1a1c676f6f676c65" .
            "2f70726f746f6275662f7374727563742e70726f746f1a17676f6f676c65" .
            "2f7270632f7374617475732e70726f746f22590a134c6973745365727669" .
            "63657352657175657374121b0a1370726f64756365725f70726f6a656374" .
            "5f696418012001280912110a09706167655f73697a651805200128051212" .
            "0a0a706167655f746f6b656e18062001280922720a144c69737453657276" .
            "69636573526573706f6e736512410a08736572766963657318012003280b" .
            "322f2e676f6f676c652e6170692e736572766963656d616e6167656d656e" .
            "742e76312e4d616e616765645365727669636512170a0f6e6578745f7061" .
            "67655f746f6b656e18022001280922290a11476574536572766963655265" .
            "717565737412140a0c736572766963655f6e616d6518012001280922580a" .
            "14437265617465536572766963655265717565737412400a077365727669" .
            "636518012001280b322f2e676f6f676c652e6170692e736572766963656d" .
            "616e6167656d656e742e76312e4d616e6167656453657276696365222c0a" .
            "1444656c657465536572766963655265717565737412140a0c7365727669" .
            "63655f6e616d65180120012809222e0a16556e64656c6574655365727669" .
            "63655265717565737412140a0c736572766963655f6e616d651801200128" .
            "09225b0a17556e64656c65746553657276696365526573706f6e73651240" .
            "0a077365727669636518012001280b322f2e676f6f676c652e6170692e73" .
            "6572766963656d616e6167656d656e742e76312e4d616e61676564536572" .
            "7669636522420a1747657453657276696365436f6e666967526571756573" .
            "7412140a0c736572766963655f6e616d6518012001280912110a09636f6e" .
            "6669675f696418022001280922580a194c69737453657276696365436f6e" .
            "666967735265717565737412140a0c736572766963655f6e616d65180120" .
            "01280912120a0a706167655f746f6b656e18022001280912110a09706167" .
            "655f73697a6518032001280522630a1a4c69737453657276696365436f6e" .
            "66696773526573706f6e7365122c0a0f736572766963655f636f6e666967" .
            "7318012003280b32132e676f6f676c652e6170692e536572766963651217" .
            "0a0f6e6578745f706167655f746f6b656e180220012809225f0a1a437265" .
            "61746553657276696365436f6e6669675265717565737412140a0c736572" .
            "766963655f6e616d65180120012809122b0a0e736572766963655f636f6e" .
            "66696718022001280b32132e676f6f676c652e6170692e53657276696365" .
            "228e010a195375626d6974436f6e666967536f7572636552657175657374" .
            "12140a0c736572766963655f6e616d6518012001280912440a0d636f6e66" .
            "69675f736f7572636518022001280b322d2e676f6f676c652e6170692e73" .
            "6572766963656d616e6167656d656e742e76312e436f6e666967536f7572" .
            "636512150a0d76616c69646174655f6f6e6c7918032001280822490a1a53" .
            "75626d6974436f6e666967536f75726365526573706f6e7365122b0a0e73" .
            "6572766963655f636f6e66696718012001280b32132e676f6f676c652e61" .
            "70692e53657276696365226e0a1b43726561746553657276696365526f6c" .
            "6c6f75745265717565737412140a0c736572766963655f6e616d65180120" .
            "01280912390a07726f6c6c6f757418022001280b32282e676f6f676c652e" .
            "6170692e736572766963656d616e6167656d656e742e76312e526f6c6c6f" .
            "757422590a1a4c69737453657276696365526f6c6c6f7574735265717565" .
            "737412140a0c736572766963655f6e616d6518012001280912120a0a7061" .
            "67655f746f6b656e18022001280912110a09706167655f73697a65180320" .
            "01280522720a1b4c69737453657276696365526f6c6c6f75747352657370" .
            "6f6e7365123a0a08726f6c6c6f75747318012003280b32282e676f6f676c" .
            "652e6170692e736572766963656d616e6167656d656e742e76312e526f6c" .
            "6c6f757412170a0f6e6578745f706167655f746f6b656e18022001280922" .
            "440a1847657453657276696365526f6c6c6f75745265717565737412140a" .
            "0c736572766963655f6e616d6518012001280912120a0a726f6c6c6f7574" .
            "5f696418022001280922410a14456e61626c655365727669636552657175" .
            "65737412140a0c736572766963655f6e616d6518012001280912130a0b63" .
            "6f6e73756d65725f696418022001280922420a1544697361626c65536572" .
            "766963655265717565737412140a0c736572766963655f6e616d65180120" .
            "01280912130a0b636f6e73756d65725f696418022001280922710a1b4765" .
            "6e6572617465436f6e6669675265706f72745265717565737412280a0a6e" .
            "65775f636f6e66696718012001280b32142e676f6f676c652e70726f746f" .
            "6275662e416e7912280a0a6f6c645f636f6e66696718022001280b32142e" .
            "676f6f676c652e70726f746f6275662e416e7922c9010a1c47656e657261" .
            "7465436f6e6669675265706f7274526573706f6e736512140a0c73657276" .
            "6963655f6e616d65180120012809120a0a02696418022001280912450a0e" .
            "6368616e67655f7265706f72747318032003280b322d2e676f6f676c652e" .
            "6170692e736572766963656d616e6167656d656e742e76312e4368616e67" .
            "655265706f727412400a0b646961676e6f737469637318042003280b322b" .
            "2e676f6f676c652e6170692e736572766963656d616e6167656d656e742e" .
            "76312e446961676e6f7374696332ae130a0e536572766963654d616e6167" .
            "65721291010a0c4c697374536572766963657312342e676f6f676c652e61" .
            "70692e736572766963656d616e6167656d656e742e76312e4c6973745365" .
            "727669636573526571756573741a352e676f6f676c652e6170692e736572" .
            "766963656d616e6167656d656e742e76312e4c6973745365727669636573" .
            "526573706f6e7365221482d3e493020e120c2f76312f7365727669636573" .
            "1296010a0a4765745365727669636512322e676f6f676c652e6170692e73" .
            "6572766963656d616e6167656d656e742e76312e47657453657276696365" .
            "526571756573741a2f2e676f6f676c652e6170692e736572766963656d61" .
            "6e6167656d656e742e76312e4d616e6167656453657276696365222382d3" .
            "e493021d121b2f76312f73657276696365732f7b736572766963655f6e61" .
            "6d657d1284010a0d4372656174655365727669636512352e676f6f676c65" .
            "2e6170692e736572766963656d616e6167656d656e742e76312e43726561" .
            "746553657276696365526571756573741a1d2e676f6f676c652e6c6f6e67" .
            "72756e6e696e672e4f7065726174696f6e221d82d3e4930217220c2f7631" .
            "2f73657276696365733a0773657276696365128a010a0d44656c65746553" .
            "65727669636512352e676f6f676c652e6170692e736572766963656d616e" .
            "6167656d656e742e76312e44656c65746553657276696365526571756573" .
            "741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f706572617469" .
            "6f6e222382d3e493021d2a1b2f76312f73657276696365732f7b73657276" .
            "6963655f6e616d657d1297010a0f556e64656c6574655365727669636512" .
            "372e676f6f676c652e6170692e736572766963656d616e6167656d656e74" .
            "2e76312e556e64656c65746553657276696365526571756573741a1d2e67" .
            "6f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e222c82" .
            "d3e493022622242f76312f73657276696365732f7b736572766963655f6e" .
            "616d657d3a756e64656c65746512ba010a124c6973745365727669636543" .
            "6f6e66696773123a2e676f6f676c652e6170692e736572766963656d616e" .
            "6167656d656e742e76312e4c69737453657276696365436f6e6669677352" .
            "6571756573741a3b2e676f6f676c652e6170692e736572766963656d616e" .
            "6167656d656e742e76312e4c69737453657276696365436f6e6669677352" .
            "6573706f6e7365222b82d3e493022512232f76312f73657276696365732f" .
            "7b736572766963655f6e616d657d2f636f6e66696773129a010a10476574" .
            "53657276696365436f6e66696712382e676f6f676c652e6170692e736572" .
            "766963656d616e6167656d656e742e76312e47657453657276696365436f" .
            "6e666967526571756573741a132e676f6f676c652e6170692e5365727669" .
            "6365223782d3e4930231122f2f76312f73657276696365732f7b73657276" .
            "6963655f6e616d657d2f636f6e666967732f7b636f6e6669675f69647d12" .
            "a4010a1343726561746553657276696365436f6e666967123b2e676f6f67" .
            "6c652e6170692e736572766963656d616e6167656d656e742e76312e4372" .
            "6561746553657276696365436f6e666967526571756573741a132e676f6f" .
            "676c652e6170692e53657276696365223b82d3e493023522232f76312f73" .
            "657276696365732f7b736572766963655f6e616d657d2f636f6e66696773" .
            "3a0e736572766963655f636f6e66696712a6010a125375626d6974436f6e" .
            "666967536f75726365123a2e676f6f676c652e6170692e73657276696365" .
            "6d616e6167656d656e742e76312e5375626d6974436f6e666967536f7572" .
            "6365526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e67" .
            "2e4f7065726174696f6e223582d3e493022f222a2f76312f736572766963" .
            "65732f7b736572766963655f6e616d657d2f636f6e666967733a7375626d" .
            "69743a012a12be010a134c69737453657276696365526f6c6c6f75747312" .
            "3b2e676f6f676c652e6170692e736572766963656d616e6167656d656e74" .
            "2e76312e4c69737453657276696365526f6c6c6f75747352657175657374" .
            "1a3c2e676f6f676c652e6170692e736572766963656d616e6167656d656e" .
            "742e76312e4c69737453657276696365526f6c6c6f757473526573706f6e" .
            "7365222c82d3e493022612242f76312f73657276696365732f7b73657276" .
            "6963655f6e616d657d2f726f6c6c6f75747312b3010a1147657453657276" .
            "696365526f6c6c6f757412392e676f6f676c652e6170692e736572766963" .
            "656d616e6167656d656e742e76312e47657453657276696365526f6c6c6f" .
            "7574526571756573741a282e676f6f676c652e6170692e73657276696365" .
            "6d616e6167656d656e742e76312e526f6c6c6f7574223982d3e493023312" .
            "312f76312f73657276696365732f7b736572766963655f6e616d657d2f72" .
            "6f6c6c6f7574732f7b726f6c6c6f75745f69647d12aa010a144372656174" .
            "6553657276696365526f6c6c6f7574123c2e676f6f676c652e6170692e73" .
            "6572766963656d616e6167656d656e742e76312e43726561746553657276" .
            "696365526f6c6c6f7574526571756573741a1d2e676f6f676c652e6c6f6e" .
            "6772756e6e696e672e4f7065726174696f6e223582d3e493022f22242f76" .
            "312f73657276696365732f7b736572766963655f6e616d657d2f726f6c6c" .
            "6f7574733a07726f6c6c6f757412c1010a1447656e6572617465436f6e66" .
            "69675265706f7274123c2e676f6f676c652e6170692e736572766963656d" .
            "616e6167656d656e742e76312e47656e6572617465436f6e666967526570" .
            "6f7274526571756573741a3d2e676f6f676c652e6170692e736572766963" .
            "656d616e6167656d656e742e76312e47656e6572617465436f6e66696752" .
            "65706f7274526573706f6e7365222c82d3e493022622212f76312f736572" .
            "76696365733a67656e6572617465436f6e6669675265706f72743a012a12" .
            "94010a0d456e61626c655365727669636512352e676f6f676c652e617069" .
            "2e736572766963656d616e6167656d656e742e76312e456e61626c655365" .
            "7276696365526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e" .
            "696e672e4f7065726174696f6e222d82d3e493022722222f76312f736572" .
            "76696365732f7b736572766963655f6e616d657d3a656e61626c653a012a" .
            "1297010a0e44697361626c655365727669636512362e676f6f676c652e61" .
            "70692e736572766963656d616e6167656d656e742e76312e44697361626c" .
            "6553657276696365526571756573741a1d2e676f6f676c652e6c6f6e6772" .
            "756e6e696e672e4f7065726174696f6e222e82d3e493022822232f76312f" .
            "73657276696365732f7b736572766963655f6e616d657d3a64697361626c" .
            "653a012a4295010a23636f6d2e676f6f676c652e6170692e736572766963" .
            "656d616e6167656d656e742e76314213536572766963654d616e61676572" .
            "50726f746f50015a50676f6f676c652e676f6c616e672e6f72672f67656e" .
            "70726f746f2f676f6f676c65617069732f6170692f736572766963656d61" .
            "6e6167656d656e742f76313b736572766963656d616e6167656d656e74a2" .
            "02044741534d620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

