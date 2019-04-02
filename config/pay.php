<?php

return [
    'alipay' => [
        'app_id'         => '2016081600257909',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAunKTKVrmlEe8nfxLbHE2fzVbkqRdGkhcElXKQ5RCsXvdxRH6dKbMVVx3pO+7eS6DtvkDiCAyNbOzAT2E0LLk/1/sSLkiN1oxRJjA2pZD30ASQPbgphIsoK87Ji1IiA56T58n5TRE/NgGtLKpj0RmB2TZ8TfAXv+KwXxRfYx1Z3otWd//6vxaM1br70DjtxHM/O4ShEt0OjofMtHC89Slppivobwh8nJN6jwrjBdZN2CnykIFm1XALp/yUh6TF6h9NyEdEYhWtuE4E6C4yOb1e7pZbW4AK/9Hl0Grk/Vxc2t8Td9/CUtuX2WEDMuDQMSEiZMlMGFhzdWTrIHw1aBvgwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA6DeVj6JtPneHj8kX/xwKK//TtxfQfqAd3EKDQbltejkRzq5KBBsPYQzQFJMXbL8Sab/QrpZoa/Vh3OlgsyrHfwlY3MAtnFUAjt0578jFmmbX9aIFSGltYwdg6I/dTccQjNVGufzrHVVzhPIHg660IlE08X1onYe8VQSiWY1AW3uzsUl522ba4rx1Kc0Ph+6SkNzN+sGRuwWRLVgEzIDjXpcrt5VuamYzvzJhqG3jBUFXWi4PoQQZIRxcdJxH4VY/cuYcZD0woRcGkmImBz8CckIWnAieJK2K1jprDn1QFBa0AK3EX6LJp1AVoC+D0EBHJbx+dW12tv8gwRFV5RfOIwIDAQABAoIBAQCgNOjsJWU0+YX+/v+dMx0ZafAIm1duZMz1DrY7e9A5yHGuo7PQzVJ45DwSVcCNd+0eJAW2zXHROYOAw0nBkjv8Otihw7wz5Ljz11CHS354nYdUoaj/Yizja03CZK6LYFDcuK+I1SLoI/IEwG3KvZbtLhVWney08dZO2VmgasEB2y9Q9NTecK4MT2/mfZdj3/fH3j6Q/829dInWv7wis9Q9uNKdTM1GPs991V0W7c6aHXpQi2w6TzlG9TEuQtam3eo8MTDKKjSnmxaC6SzSrFp4DK2wfqul5Y6UD/bpGvl/xPNyiD/Wt+Jwrmu2gjoeuFovvOY1lGbfLaVUKX3g1wlBAoGBAP4ZzeHOagQ8vQsuZLzDWh++p5QyaOGARZIcgNBz3W3O0pGgggYlH8VCKvd8o+eU8TJtYte5kMQSDY6iy9ujMRkT6+x2pskH2gF74HupiJ2/Mlz3xOhGVIIEuZUQHbr4qdDqYIqltLViemnnnaIUwIlWZ084Hr3ZnjaJYX9CZC2TAoGBAOnz6GgTTDGboL6prJ5brbyevZMcKf7jwgzLXuqufykjkrq8f8BafuTpDeu3EXYiR4kec2K4rKrqceYczRO8ktPDKc9iSUi7Cq8yKUuKVVonlABdQAeCxpRUz/wR6GULTxB0JQ6zgsosWPJjag1NMKCa38oozsgniTmn7Mt9rbcxAn9uLMIYJmfRboSJVJRZRFrPaNtAZpsTK4r+z10LBTH9aq/idLXr9CzSWt5GcMSgpPPv6X3yC4O5gBpgvjWmBhxDw1+IJ+opQD5GZm/vLpMN0tkDdmrqS5RYy7Or7lD1wNvgub8iXrb77rclNEgk/tp8sfoZXzv1FWaEPw0HIMJPAoGBAJqDsPcr56LL+npybcOZIUH2RZanf0UM/9ibaPDulqWBDSOv42ATZMOi+MK5ghrXwQ9awTJubfvkI52rX/atEPwzZaXGcEhM4F2db5CoqH6GrUUgUW2kfarx6Pu+iBJUSb/ANclj3fnRGF3eMujeFkO8hhlqokendQZTVh1/v//BAoGBAKMyX0wT64iEALCFM2ANF5lNETX5kvXoS4F9whxtWrbEcitQKCFVyAjjOl5rFhENWYsiByc+l/3bfS7klo+ztXeWLPZ2fSvhjEtMRN4KQwQ7clXH6SNcdiYo/JA9RLaFvZOFzLm6JSKu2IJiu7H2Qm7xj2rqpA5Rnx0oZjeS7X/0',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
