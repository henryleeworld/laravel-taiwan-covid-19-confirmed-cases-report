<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Client Confirmed Cases URL
    |--------------------------------------------------------------------------
    */
    'breakdown_of_confirmed_cases_by_district_url' => env('CLIENT_BREAKDOWN_OF_CONFIRMED_CASES_BY_DISTRICT_URL', 'https://covid-19.nchc.org.tw/myDT_staff.php?TB_name=covidtable_taiwan_cdc2&limitColumn=id&limitValue=0&equalValue=!=&encodeKey=MTYyMzA5MjQ3NA==&c[]=id&t[]=int&d[]=NO&c[]=a01&t[]=date&d[]=NO&c[]=a02&t[]=varchar&d[]=NO&c[]=a03&t[]=varchar&d[]=NO&c[]=a04&t[]=varchar&d[]=NO&c[]=a05&t[]=varchar&d[]=NO&c[]=a06&t[]=varchar&d[]=NO'),

    'daily_confirmed_cases_url' => env('CLIENT_DAILY_CONFIRMED_CASES_URL', 'https://covid-19.nchc.org.tw/myDT_staff.php?TB_name=csse_covid_19_daily_reports_country&limitColumn=a01&limitValue=TW/%&equalValue=%20like%20&encodeKey=MTYyMzA5NDA0Ng==&c[]=id&t[]=int&d[]=NO&c[]=a01&t[]=varchar&d[]=NO&c[]=a02&t[]=date&d[]=NO&c[]=a03&t[]=int&d[]=NO&c[]=a04&t[]=int&d[]=NO&c[]=a05&t[]=int&d[]=NO&c[]=a06&t[]=int&d[]=NO&c[]=a07&t[]=decimal&d[]=NO&c[]=a08&t[]=decimal&d[]=NO&c[]=a09&t[]=decimal&d[]=NO&c[]=a10&t[]=decimal&d[]=NO&c[]=a11&t[]=decimal&d[]=NO'),

    'deaths_url' => env('CLIENT_DEATHS_URL', 'https://covid-19.nchc.org.tw/myDT_staff.php?TB_name=covidtable_taiwan_cdc_death&limitColumn=id&limitValue=0&equalValue=!=&encodeKey=MTYyMzE4MTM2OQ==&c[]=id&t[]=int&d[]=NO&c[]=a01&t[]=date&d[]=NO&c[]=a02&t[]=int&d[]=NO&c[]=a03&t[]=varchar&d[]=NO&c[]=a04&t[]=int&d[]=NO&c[]=a05&t[]=varchar&d[]=NO&c[]=a06&t[]=varchar&d[]=NO&c[]=a07&t[]=varchar&d[]=NO&c[]=a08&t[]=varchar&d[]=NO&c[]=a09&t[]=varchar&d[]=NO&c[]=a10&t[]=text&d[]=NO&c[]=a11&t[]=varchar&d[]=NO&c[]=a12&t[]=date&d[]=NO'),
];
