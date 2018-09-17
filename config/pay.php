<?php

return [
    'alipay' => [
        'app_id'         => '2016091800542730',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0pXDZS/Ztom6UtKdovU0Kscxf5K367vdUqBf118rZZUMAybfhvJDpKL7Do0JBmrdAlZxSxBGZyubesCAcK6hzVXJQQXJjmUhCmw6LfxxpshOfKeM+VajgY7d6sLLFH3lohpl/XHwoVL1syLFScLosehb2yRi5h4yS/LWVXOn+fpOMAgMv99d7rofA6nyoMMU0OizyXVnp6CtCTLQLCEt42Km80y0JZQDbSk7Ctz+tQWWHvgDoP5z35posNUBeinxX+XJxNcBwDaeAdzxyuccK+pOI5gRRYvff1Ex6RjYN0ZeeLTZ1A0o3wMfpg+rc8chFFpK0lTKx0cCCZbvPHrwjwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA3yyGufiOVaolAeUiNuuD6zzMi/bF1QOGrXrDjI3NM51wPbC32G/qjH6A3ORiYfEp/SHIN1wLrJFt6LmdFw0mQTQtB62/lbXiIBKp5XzguCAsBtsCjqt/dcengURjJBAGxYZYfBZ3/udULQxo/IohkkicELyrgPM51JoA479E3ol1gOkXKQIgiiicg8U0oGSpUQqB+5lTQXOg5xMpSSHlKdTDdWVaxQnnWkMnLgc/BT2b8D3aDziC04oGmWxVXf+sR9x1/6VTgS0YwV7A6QPE+BzGpvb7ts19+YgmzTTC5iHgaV9at+cNzSVORfge3Wr7E2ZpbDPsMLKjIShHLnmfTQIDAQABAoIBACRlXpN1tcDCvsZQWAQc5Ka4g6NP23Oh35TrMHj7pzuDsYpeB52EovvGpb1ggar3aaGeoMhmeoDqNsJ9guD/g/2eRLm73ELOJtKUOKD0fLGKjaOQlBowXdkXdnnebUy0UGZmQof6IhewIko2e+iznkX9EXapTk75W7UQaJS73L9t3X4dL2sLut9T9JmIvkGAtByZU1XAw/Ff1L66McrNJl/MU7O6jkt52KH49WA9v7JPTiUsYn1LMNjHRoPKrPmdFHTTFYWd0QvlDUSWJ37f7+CRdf7tvTtFgbgVkLMtNenoPaE+VjGVEuo4lao6FUEf6aUPkFZVAbDipMaHH7G2OQECgYEA9ZF22EZt967LH5QKFtIC1W3fJ/cvxo9hgr0ahQu4hpGLyBzEQ9fOOewTyf5MOXOe8qWQbl7aEXQJ685kzw3ZAH++NrZSnFJhc0LgdJLj4f9+M3c/7jMtPtkQGFQKt/Gd6feWRl7bVt+4ddIlN5wy+iCSpBekx3UQWawN38cSBjcCgYEA6KeGnbrWs1KUMkQbHxf85x0ZV1tO385W9Ar0ad5lIDNuElbBO5KYUlIrvShf0ExHRe1MqYp7/xMK2iUPjeABiylHY3w2lHWMMYbXr3k0OlYYq1Id2fHuf5FZL/0L7s8At130NOy0OsbTjgmsl6gvUIrAGLvnem+mXe6vt0nBBJsCgYBcHtKPdXRBSwAF+5oBT40ilZH2QyNYAGebDOeK64ewa58dVbVGoglJ70bJKq1bjAUfj35r+QcjLv2dyRJGHjK+ni00BxdcbwcBnx/me0gjep3UHrML34Tko7cG+VgAAxKzN17XTTRJFan0AP5XKzBwZpG8HuaAsGiOyx11Sg935wKBgQDg4i3pANTPeR7uh45/u7wl2abJHeVbyCOcuYoPW3z8ZzoaV+loIAdEa1EEAqa6vUCXgwz7RHUe1dVDj1c9mC1lynzK2SIY1pawuNp7Lvkg+l/WGgXoyUXz4RcIn9yM9WKH3DVVgwejWNTdEtTVsygo/jU4s0jIvGtfmHwY+x2ryQKBgQDwQRNu0SsuDa/WUdAYaMmgYPEMgyES0J5JAK1s5guQ61Y8xwd8kAf0/sPUzQCj1m6SF49d9undx7kaENqAMKPaGWQDj34hMiRILMBpFlVH1hmGVZ8s0wb4jpl/xZGPBKkS0UwQDGn707PFikyta4STE95vWpPrFwBlwM/Khi6OEw==',
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
