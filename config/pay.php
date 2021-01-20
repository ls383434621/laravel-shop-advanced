<?php

return [
    'alipay' => [
        'app_id'         => '2021000116697403',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApEaCzFlyUXQDIBmehbXeJe4FTEkx64MlfR+K5KECimJmHQJLeQUQ7DtGxoSx9Pvhm1CLbJ/V5fX5dIda9OAGWnWlejWuYVIeTo2Z0JleJKwCQI12Mvn3nh3oqszp5mKG8MFHiBraX0fga5wAYONhfW/DTzNwfdOk47vEPlA4ZAM0P/xmuvm8h9HXMOe7ukp0fbfdDutfTCi2jSKHBDByM8Jw9ZyPqyaQflamA2Qh9e/aiyGHVXwDJYs/Zom8ad4Ef0uDHqdpo4DLA443qlWTXatLsIvcxGPRuDDXXkJTzLLHrUL3Y6CYfpO+/HPLn/OIm5ULUt00XNHaUIhQb+5HMQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAzBGUYc9m21P7JJCaiiG8LeeQObJ+FMkB9wy4C0D4ZKPtufq4yFIWfSV4rv01j9BAx6vAU+HCuk99z+F4FVyWm8SxWCxS3h06Y403z9PMCiMrhKBddYvvyINunb22FF+CbFGoDlf155/+d5I33J0pBzUM5X+f3b75OeEeOYGum8aIjjEsbiSFUlSwVtV517IeaOkwD+4Eye8Ik6HYJpvA2SDyD7pVnHQSqyrzlWY1FRM5HISaKl7esSI36Jmu7GXrhONpyawRnshBLJ7e8xQFXDoAaPfXEvtamLafstcQOCKQg8U5F+uNkDAu5whsrrrEX1cAg0dANuV/0Xa6syD2GQIDAQABAoIBAQC5sB1mywR6+vYBlZspqfzDgHwaJDLZ0vX4yRgHFX1whkHhAyV1EkzoX1prUHiWfhcUGVKOgVVhlseSi0Vrmq5o2xfMdbiJ5+qjf3KTp9N4PfxxWELynPz5Za8X1fKCo03YJo1XT+6wb0Nrph8yncchicJMak8bxZSeeBu6lChAEUtnGc4wZbIQbNRL9fAY3f/hOvEiEdua6+sf1Rtcy0eayH3J5VkgcC7eL1VruofLsfMqF9elDWdDlOSaNabdrHxiQiNEOSwXdGlnOKEd2A9He/A8iu6s4TJOTsy//9Zo+D9+o4mPSP5sFhujlIkhnVaKprPDqfb+Y/tTxvdMbDwpAoGBAPwYYiHPGVInHs4v1d/KOTBfOdBtYnZtnJe2IqId/onYkATBkhLvj/UuzZRrFxAQzjtjFK/sBMDCoDVkUi7DwdUPtlg9B9EcV4C5AHW24wlkf+9r3WAq72c2/Mvv0aDW4x5TMyYJXfEmWuJedxBR0HsYIQeWODJ0+0PMuCKkATwvAoGBAM86wnmdzKARwjSAxzXqASFZbPHElU1hcyKSv69BcuCEo76QJGJHvu73hGmioSPfsgsGAAtdBjUb3Y70+5b7gjm3TQkBSzDsfSm7LAOARVylCo79jau8Ls/qk8m4wA1e3eStItzpb04BDQwQkr+lvLQ9KzZzGZpN0Jt5twRLCXg3AoGBANr24uWy2K9+w0ccTYygPaRCUhkzqX5sHsO3s8VUgC6DKDS5XYONCWFRUcdEbTfLIRZ8LQ/Q1SAI7NbzWF6+MbI6f4uNFykOkQKBrmCQhgs2e9kdu584K9Fe9Zy9pTsq6wMACUFUiYBYbECLBKfsKEWC482PMSjCayysuJN+GISJAoGAabGckw7q2RF1rfWopVTusqW7rSwIwmjbolyaq7aD8wNzyLQX+pCBT7yqqn4qFfP4CStMRn9xtRC7VjiZQY6SAwH8poUkZpWX2PsAHeEEf5Yl5nxoD5lxftYz/oTeX3NtVT8BMw9Ul8JtdyPU1S6hKoSwT5sxCcR6i3Hu6J+k+s0CgYBFNJL4B99wZLTmGRuCS+AK5ntHTn+IAipysQuwWbYAHvHhSBsULp1CV85av/mWTanCfORu4SYhH4aFEaNdm4ckFUMZkv9obE6Isnr/+546qrpytwAvRsl8nV9X6QUmZvZCMQgyKV24BLE7zcP5QgD3r9GrYWqp/jaHFTUOvaIGBg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wx226cd681f88e7f4b',
        'mch_id'      => '1528433631',
        'key'         => 'shangjiukeji0218shangjiukeji0218',
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];