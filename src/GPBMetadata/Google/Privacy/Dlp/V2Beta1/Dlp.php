<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace GPBMetadata\Google\Privacy\Dlp\V2Beta1;

class Dlp
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Storage::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9e250a24676f6f676c652f707269766163792f646c702f763262657461" .
            "312f646c702e70726f746f121a676f6f676c652e707269766163792e646c" .
            "702e763262657461311a1c676f6f676c652f6170692f616e6e6f74617469" .
            "6f6e732e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f" .
            "6f7065726174696f6e732e70726f746f1a28676f6f676c652f7072697661" .
            "63792f646c702f763262657461312f73746f726167652e70726f746f1a1f" .
            "676f6f676c652f70726f746f6275662f74696d657374616d702e70726f74" .
            "6f22cd010a0d496e7370656374436f6e66696712380a0a696e666f5f7479" .
            "70657318012003280b32242e676f6f676c652e707269766163792e646c70" .
            "2e763262657461312e496e666f54797065123e0a0e6d696e5f6c696b656c" .
            "69686f6f6418022001280e32262e676f6f676c652e707269766163792e64" .
            "6c702e763262657461312e4c696b656c69686f6f6412140a0c6d61785f66" .
            "696e64696e677318032001280512150a0d696e636c7564655f71756f7465" .
            "18042001280812150a0d6578636c7564655f747970657318062001280822" .
            "490a0b436f6e74656e744974656d120c0a0474797065180120012809120e" .
            "0a046461746118022001280c4800120f0a0576616c756518032001280948" .
            "00420b0a09646174615f6974656d22620a0d496e7370656374526573756c" .
            "7412350a0866696e64696e677318012003280b32232e676f6f676c652e70" .
            "7269766163792e646c702e763262657461312e46696e64696e67121a0a12" .
            "66696e64696e67735f7472756e636174656418022001280822f6010a0746" .
            "696e64696e67120d0a0571756f746518012001280912370a09696e666f5f" .
            "7479706518022001280b32242e676f6f676c652e707269766163792e646c" .
            "702e763262657461312e496e666f54797065123a0a0a6c696b656c69686f" .
            "6f6418032001280e32262e676f6f676c652e707269766163792e646c702e" .
            "763262657461312e4c696b656c69686f6f6412360a086c6f636174696f6e" .
            "18042001280b32242e676f6f676c652e707269766163792e646c702e7632" .
            "62657461312e4c6f636174696f6e122f0a0b6372656174655f74696d6518" .
            "062001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d7022af020a084c6f636174696f6e12350a0a627974655f72616e6765" .
            "18012001280b32212e676f6f676c652e707269766163792e646c702e7632" .
            "62657461312e52616e6765123a0a0f636f6465706f696e745f72616e6765" .
            "18022001280b32212e676f6f676c652e707269766163792e646c702e7632" .
            "62657461312e52616e6765123e0a0b696d6167655f626f78657318032003" .
            "280b32292e676f6f676c652e707269766163792e646c702e763262657461" .
            "312e496d6167654c6f636174696f6e12390a0a7265636f72645f6b657918" .
            "042001280b32252e676f6f676c652e707269766163792e646c702e763262" .
            "657461312e5265636f72644b657912350a086669656c645f696418052001" .
            "280b32232e676f6f676c652e707269766163792e646c702e763262657461" .
            "312e4669656c64496422230a0552616e6765120d0a057374617274180120" .
            "012803120b0a03656e6418022001280322490a0d496d6167654c6f636174" .
            "696f6e120b0a03746f70180120012805120c0a046c656674180220012805" .
            "120d0a057769647468180320012805120e0a066865696768741804200128" .
            "0522ca020a14526564616374436f6e74656e745265717565737412410a0e" .
            "696e73706563745f636f6e66696718012001280b32292e676f6f676c652e" .
            "707269766163792e646c702e763262657461312e496e7370656374436f6e" .
            "66696712360a056974656d7318022003280b32272e676f6f676c652e7072" .
            "69766163792e646c702e763262657461312e436f6e74656e744974656d12" .
            "570a0f7265706c6163655f636f6e6669677318032003280b323e2e676f6f" .
            "676c652e707269766163792e646c702e763262657461312e526564616374" .
            "436f6e74656e74526571756573742e5265706c616365436f6e6669671a5e" .
            "0a0d5265706c616365436f6e66696712370a09696e666f5f747970651801" .
            "2001280b32242e676f6f676c652e707269766163792e646c702e76326265" .
            "7461312e496e666f5479706512140a0c7265706c6163655f776974681802" .
            "20012809224f0a15526564616374436f6e74656e74526573706f6e736512" .
            "360a056974656d7318012003280b32272e676f6f676c652e707269766163" .
            "792e646c702e763262657461312e436f6e74656e744974656d2292010a15" .
            "496e7370656374436f6e74656e745265717565737412410a0e696e737065" .
            "63745f636f6e66696718012001280b32292e676f6f676c652e7072697661" .
            "63792e646c702e763262657461312e496e7370656374436f6e6669671236" .
            "0a056974656d7318022003280b32272e676f6f676c652e70726976616379" .
            "2e646c702e763262657461312e436f6e74656e744974656d22540a16496e" .
            "7370656374436f6e74656e74526573706f6e7365123a0a07726573756c74" .
            "7318012003280b32292e676f6f676c652e707269766163792e646c702e76" .
            "3262657461312e496e7370656374526573756c7422ed010a1d4372656174" .
            "65496e73706563744f7065726174696f6e5265717565737412410a0e696e" .
            "73706563745f636f6e66696718012001280b32292e676f6f676c652e7072" .
            "69766163792e646c702e763262657461312e496e7370656374436f6e6669" .
            "6712410a0e73746f726167655f636f6e66696718022001280b32292e676f" .
            "6f676c652e707269766163792e646c702e763262657461312e53746f7261" .
            "6765436f6e66696712460a0d6f75747075745f636f6e6669671803200128" .
            "0b322f2e676f6f676c652e707269766163792e646c702e76326265746131" .
            "2e4f757470757453746f72616765436f6e66696722630a134f7574707574" .
            "53746f72616765436f6e66696712440a0c73746f726167655f7061746818" .
            "022001280b322c2e676f6f676c652e707269766163792e646c702e763262" .
            "657461312e436c6f756453746f7261676550617468480042060a04747970" .
            "65225c0a12496e666f547970655374617469737469637312370a09696e66" .
            "6f5f7479706518012001280b32242e676f6f676c652e707269766163792e" .
            "646c702e763262657461312e496e666f54797065120d0a05636f756e7418" .
            "022001280322b2030a18496e73706563744f7065726174696f6e4d657461" .
            "6461746112170a0f70726f6365737365645f627974657318012001280312" .
            "1d0a15746f74616c5f657374696d617465645f6279746573180420012803" .
            "12470a0f696e666f5f747970655f737461747318022003280b322e2e676f" .
            "6f676c652e707269766163792e646c702e763262657461312e496e666f54" .
            "79706553746174697374696373122f0a0b6372656174655f74696d651803" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e54696d65737461" .
            "6d7012490a16726571756573745f696e73706563745f636f6e6669671805" .
            "2001280b32292e676f6f676c652e707269766163792e646c702e76326265" .
            "7461312e496e7370656374436f6e66696712490a16726571756573745f73" .
            "746f726167655f636f6e66696718062001280b32292e676f6f676c652e70" .
            "7269766163792e646c702e763262657461312e53746f72616765436f6e66" .
            "6967124e0a15726571756573745f6f75747075745f636f6e666967180720" .
            "01280b322f2e676f6f676c652e707269766163792e646c702e7632626574" .
            "61312e4f757470757453746f72616765436f6e66696722260a16496e7370" .
            "6563744f7065726174696f6e526573756c74120c0a046e616d6518012001" .
            "280922510a1a4c697374496e737065637446696e64696e67735265717565" .
            "7374120c0a046e616d6518012001280912110a09706167655f73697a6518" .
            "022001280512120a0a706167655f746f6b656e18032001280922710a1b4c" .
            "697374496e737065637446696e64696e6773526573706f6e736512390a06" .
            "726573756c7418012001280b32292e676f6f676c652e707269766163792e" .
            "646c702e763262657461312e496e7370656374526573756c7412170a0f6e" .
            "6578745f706167655f746f6b656e180220012809227e0a13496e666f5479" .
            "70654465736372697074696f6e120c0a046e616d6518012001280912140a" .
            "0c646973706c61795f6e616d6518022001280912430a0a63617465676f72" .
            "69657318032003280b322f2e676f6f676c652e707269766163792e646c70" .
            "2e763262657461312e43617465676f72794465736372697074696f6e223f" .
            "0a144c697374496e666f54797065735265717565737412100a0863617465" .
            "676f727918012001280912150a0d6c616e67756167655f636f6465180220" .
            "012809225c0a154c697374496e666f5479706573526573706f6e73651243" .
            "0a0a696e666f5f747970657318012003280b322f2e676f6f676c652e7072" .
            "69766163792e646c702e763262657461312e496e666f5479706544657363" .
            "72697074696f6e22390a1343617465676f72794465736372697074696f6e" .
            "120c0a046e616d6518012001280912140a0c646973706c61795f6e616d65" .
            "18022001280922320a194c697374526f6f7443617465676f726965735265" .
            "717565737412150a0d6c616e67756167655f636f64651801200128092261" .
            "0a1a4c697374526f6f7443617465676f72696573526573706f6e73651243" .
            "0a0a63617465676f7269657318012003280b322f2e676f6f676c652e7072" .
            "69766163792e646c702e763262657461312e43617465676f727944657363" .
            "72697074696f6e2a740a0a4c696b656c69686f6f64121a0a164c494b454c" .
            "49484f4f445f554e535045434946494544100012110a0d564552595f554e" .
            "4c494b454c591001120c0a08554e4c494b454c591002120c0a08504f5353" .
            "49424c451003120a0a064c494b454c591004120f0a0b564552595f4c494b" .
            "454c59100532f6070a0a446c7053657276696365129c010a0e496e737065" .
            "6374436f6e74656e7412312e676f6f676c652e707269766163792e646c70" .
            "2e763262657461312e496e7370656374436f6e74656e7452657175657374" .
            "1a322e676f6f676c652e707269766163792e646c702e763262657461312e" .
            "496e7370656374436f6e74656e74526573706f6e7365222382d3e493021d" .
            "22182f763262657461312f636f6e74656e743a696e73706563743a012a12" .
            "98010a0d526564616374436f6e74656e7412302e676f6f676c652e707269" .
            "766163792e646c702e763262657461312e526564616374436f6e74656e74" .
            "526571756573741a312e676f6f676c652e707269766163792e646c702e76" .
            "3262657461312e526564616374436f6e74656e74526573706f6e73652222" .
            "82d3e493021c22172f763262657461312f636f6e74656e743a7265646163" .
            "743a012a129a010a16437265617465496e73706563744f7065726174696f" .
            "6e12392e676f6f676c652e707269766163792e646c702e76326265746131" .
            "2e437265617465496e73706563744f7065726174696f6e52657175657374" .
            "1a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f" .
            "6e222682d3e4930220221b2f763262657461312f696e73706563742f6f70" .
            "65726174696f6e733a012a12ba010a134c697374496e737065637446696e" .
            "64696e677312362e676f6f676c652e707269766163792e646c702e763262" .
            "657461312e4c697374496e737065637446696e64696e6773526571756573" .
            "741a372e676f6f676c652e707269766163792e646c702e76326265746131" .
            "2e4c697374496e737065637446696e64696e6773526573706f6e73652232" .
            "82d3e493022c122a2f763262657461312f7b6e616d653d696e7370656374" .
            "2f726573756c74732f2a7d2f66696e64696e677312ac010a0d4c69737449" .
            "6e666f547970657312302e676f6f676c652e707269766163792e646c702e" .
            "763262657461312e4c697374496e666f5479706573526571756573741a31" .
            "2e676f6f676c652e707269766163792e646c702e763262657461312e4c69" .
            "7374496e666f5479706573526573706f6e7365223682d3e4930230122e2f" .
            "763262657461312f726f6f7443617465676f726965732f7b63617465676f" .
            "72793d2a7d2f696e666f547970657312a4010a124c697374526f6f744361" .
            "7465676f7269657312352e676f6f676c652e707269766163792e646c702e" .
            "763262657461312e4c697374526f6f7443617465676f7269657352657175" .
            "6573741a362e676f6f676c652e707269766163792e646c702e7632626574" .
            "61312e4c697374526f6f7443617465676f72696573526573706f6e736522" .
            "1f82d3e493021912172f763262657461312f726f6f7443617465676f7269" .
            "6573426b0a1e636f6d2e676f6f676c652e707269766163792e646c702e76" .
            "3262657461314208446c7050726f746f50015a3d676f6f676c652e676f6c" .
            "616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f7072" .
            "69766163792f646c702f763262657461313b646c70620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

