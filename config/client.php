<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Client Confirmed Cases URL
    |--------------------------------------------------------------------------
    */
    'breakdown_of_confirmed_cases_by_district_url' => env('CLIENT_BREAKDOWN_OF_CONFIRMED_CASES_BY_DISTRICT_URL', 'https://covid-19.nchc.org.tw/myDT_staff.php?TB_name=covidtable_taiwan_cdc4_1&limitColumn=id&limitValue=0&equalValue=!=&encodeKey=MTY1MjQ2MTYzMQ==&c[]=id&t[]=int&d[]=NO&c[]=a01&t[]=date&d[]=NO&c[]=a02&t[]=date&d[]=NO&c[]=a03&t[]=varchar&d[]=NO&c[]=a04&t[]=varchar&d[]=NO&c[]=a05&t[]=int&d[]=NO&c[]=a06&t[]=int&d[]=NO'),

    'daily_confirmed_cases_url' => env('CLIENT_DAILY_CONFIRMED_CASES_URL', 'https://covid-19.nchc.org.tw/myDT_staff.php?TB_name=owl_world_taiwan_v1&limitColumn=a01&limitValue=TW%&equalValue=%20like%20&encodeKey=MTY1MjQ2NDMxOQ==&c[]=id&t[]=int&d[]=NO&c[]=a01&t[]=varchar&d[]=NO&c[]=a02&t[]=varchar&d[]=NO&c[]=a03&t[]=varchar&d[]=NO&c[]=a04&t[]=date&d[]=NO&c[]=a05&t[]=int&d[]=NO&c[]=a06&t[]=int&d[]=NO&c[]=a07&t[]=decimal&d[]=NO&c[]=a08&t[]=decimal&d[]=NO&c[]=a09&t[]=decimal&d[]=NO&c[]=a10&t[]=decimal&d[]=NO&c[]=a11&t[]=int&d[]=NO&c[]=a12&t[]=varchar&d[]=NO'),

    'deaths_url' => env('CLIENT_DEATHS_URL', 'https://covid-19.nchc.org.tw/myDT_staff.php?TB_name=covidtable_taiwan_cdc_death&limitColumn=id&limitValue=0&equalValue=!=&encodeKey=MTY3ODI1NjYyOQ==&c[]=id&t[]=int&d[]=NO&c[]=a01&t[]=date&d[]=NO&c[]=a02&t[]=varchar&d[]=NO&c[]=a03&t[]=varchar&d[]=NO&c[]=a04&t[]=int&d[]=NO&c[]=a05&t[]=varchar&d[]=NO&c[]=a06&t[]=varchar&d[]=NO&c[]=a07&t[]=varchar&d[]=NO&c[]=a08&t[]=varchar&d[]=NO&c[]=a09&t[]=varchar&d[]=NO&c[]=a10&t[]=varchar&d[]=NO&c[]=a11&t[]=text&d[]=NO&c[]=a12&t[]=varchar&d[]=NO&c[]=a13&t[]=date&d[]=NO'),
];
