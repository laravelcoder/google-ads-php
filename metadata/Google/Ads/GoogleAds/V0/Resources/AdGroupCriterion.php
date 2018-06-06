<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/ad_group_criterion.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Resources;

class AdGroupCriterion
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Criteria::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\CustomParameter::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\AdGroupCriterionStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\BiddingSource::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\CriterionType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\QualityScoreBucket::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd150a3a676f6f676c652f6164732f676f6f676c656164732f76302f72" .
            "65736f75726365732f61645f67726f75705f637269746572696f6e2e7072" .
            "6f746f1221676f6f676c652e6164732e676f6f676c656164732e76302e72" .
            "65736f75726365731a35676f6f676c652f6164732f676f6f676c65616473" .
            "2f76302f636f6d6d6f6e2f637573746f6d5f706172616d657465722e7072" .
            "6f746f1a3d676f6f676c652f6164732f676f6f676c656164732f76302f65" .
            "6e756d732f61645f67726f75705f637269746572696f6e5f737461747573" .
            "2e70726f746f1a32676f6f676c652f6164732f676f6f676c656164732f76" .
            "302f656e756d732f62696464696e675f736f757263652e70726f746f1a32" .
            "676f6f676c652f6164732f676f6f676c656164732f76302f656e756d732f" .
            "637269746572696f6e5f747970652e70726f746f1a38676f6f676c652f61" .
            "64732f676f6f676c656164732f76302f656e756d732f7175616c6974795f" .
            "73636f72655f6275636b65742e70726f746f1a1e676f6f676c652f70726f" .
            "746f6275662f77726170706572732e70726f746f22ce100a10416447726f" .
            "7570437269746572696f6e12150a0d7265736f757263655f6e616d651801" .
            "2001280912310a0c637269746572696f6e5f6964181a2001280b321b2e67" .
            "6f6f676c652e70726f746f6275662e496e74363456616c756512600a0673" .
            "746174757318032001280e32502e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e656e756d732e416447726f7570437269746572696f6e" .
            "537461747573456e756d2e416447726f7570437269746572696f6e537461" .
            "74757312550a0c7175616c6974795f696e666f18042001280b323f2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76302e7265736f75726365" .
            "732e416447726f7570437269746572696f6e2e5175616c697479496e666f" .
            "122e0a0861645f67726f757018052001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c7565124c0a047479706518192001" .
            "280e323e2e676f6f676c652e6164732e676f6f676c656164732e76302e65" .
            "6e756d732e437269746572696f6e54797065456e756d2e43726974657269" .
            "6f6e54797065122c0a086e65676174697665181f2001280b321a2e676f6f" .
            "676c652e70726f746f6275662e426f6f6c56616c756512330a0e6370635f" .
            "6269645f6d6963726f7318102001280b321b2e676f6f676c652e70726f74" .
            "6f6275662e496e74363456616c756512330a0e63706d5f6269645f6d6963" .
            "726f7318112001280b321b2e676f6f676c652e70726f746f6275662e496e" .
            "74363456616c756512330a0e6370765f6269645f6d6963726f7318182001" .
            "280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75" .
            "65123d0a186566666563746976655f6370635f6269645f6d6963726f7318" .
            "122001280b321b2e676f6f676c652e70726f746f6275662e496e74363456" .
            "616c7565123d0a186566666563746976655f63706d5f6269645f6d696372" .
            "6f7318132001280b321b2e676f6f676c652e70726f746f6275662e496e74" .
            "363456616c7565123d0a186566666563746976655f6370765f6269645f6d" .
            "6963726f7318142001280b321b2e676f6f676c652e70726f746f6275662e" .
            "496e74363456616c756512600a186566666563746976655f6370635f6269" .
            "645f736f7572636518152001280e323e2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76302e656e756d732e42696464696e67536f75726365" .
            "456e756d2e42696464696e67536f7572636512600a186566666563746976" .
            "655f63706d5f6269645f736f7572636518162001280e323e2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e656e756d732e4269646469" .
            "6e67536f75726365456e756d2e42696464696e67536f7572636512600a18" .
            "6566666563746976655f6370765f6269645f736f7572636518172001280e" .
            "323e2e676f6f676c652e6164732e676f6f676c656164732e76302e656e75" .
            "6d732e42696464696e67536f75726365456e756d2e42696464696e67536f" .
            "7572636512610a12706f736974696f6e5f657374696d61746573180a2001" .
            "280b32452e676f6f676c652e6164732e676f6f676c656164732e76302e72" .
            "65736f75726365732e416447726f7570437269746572696f6e2e506f7369" .
            "74696f6e457374696d6174657312300a0a66696e616c5f75726c73180b20" .
            "03280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c7565123b0a15747261636b696e675f75726c5f74656d706c617465180d" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c7565124e0a1575726c5f637573746f6d5f706172616d657465727318" .
            "0e2003280b322f2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "302e636f6d6d6f6e2e437573746f6d506172616d65746572123e0a076b65" .
            "79776f7264181b2001280b322b2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e636f6d6d6f6e2e4b6579776f7264496e666f48001249" .
            "0a0d6c697374696e675f67726f757018202001280b32302e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76302e636f6d6d6f6e2e4c69737469" .
            "6e6747726f7570496e666f48001aff020a0b5175616c697479496e666f12" .
            "320a0d7175616c6974795f73636f726518012001280b321b2e676f6f676c" .
            "652e70726f746f6275662e496e74333256616c756512680a166372656174" .
            "6976655f7175616c6974795f73636f726518022001280e32482e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76302e656e756d732e5175616c" .
            "69747953636f72654275636b6574456e756d2e5175616c69747953636f72" .
            "654275636b6574126a0a18706f73745f636c69636b5f7175616c6974795f" .
            "73636f726518032001280e32482e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e656e756d732e5175616c69747953636f72654275636b" .
            "6574456e756d2e5175616c69747953636f72654275636b657412660a1473" .
            "65617263685f7072656469637465645f63747218042001280e32482e676f" .
            "6f676c652e6164732e676f6f676c656164732e76302e656e756d732e5175" .
            "616c69747953636f72654275636b6574456e756d2e5175616c6974795363" .
            "6f72654275636b65741acc010a11506f736974696f6e457374696d617465" .
            "73123a0a1566697273745f706167655f6370635f6d6963726f7318012001" .
            "280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75" .
            "65123e0a1966697273745f706f736974696f6e5f6370635f6d6963726f73" .
            "18022001280b321b2e676f6f676c652e70726f746f6275662e496e743634" .
            "56616c7565123b0a16746f705f6f665f706167655f6370635f6d6963726f" .
            "7318032001280b321b2e676f6f676c652e70726f746f6275662e496e7436" .
            "3456616c7565420b0a09637269746572696f6e42da010a25636f6d2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76302e7265736f75726365" .
            "734215416447726f7570437269746572696f6e50726f746f50015a4a676f" .
            "6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c" .
            "65617069732f6164732f676f6f676c656164732f76302f7265736f757263" .
            "65733b7265736f7572636573a20203474141aa0221476f6f676c652e4164" .
            "732e476f6f676c654164732e56302e5265736f7572636573ca0221476f6f" .
            "676c655c4164735c476f6f676c654164735c56305c5265736f7572636573" .
            "620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
