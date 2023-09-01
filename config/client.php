<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Client Confirmed Cases URL
    |--------------------------------------------------------------------------
    */
    'breakdown_of_confirmed_cases_by_district_url' => env('CLIENT_BREAKDOWN_OF_CONFIRMED_CASES_BY_DISTRICT_URL', 'https://covid-19.nchc.org.tw/dt02_staff.php?TB_name=2023-cdc-Day_Confirmation_Age_County_Gender_19CoV_v1&limitColumn=a02&limitValue=%E5%85%A8%E5%9C%8B&equalValue==&limitColumn2=a03&limitValue2=%E5%85%A8%E5%8D%80&equalValue2==&encodeKey=NTYyNTg0MTM2&c[]=id&t[]=int&d[]=int&c[]=a01&t[]=date&d[]=date&c[]=a02&t[]=varchar&d[]=varchar(32)&c[]=a03&t[]=varchar&d[]=varchar(32)&c[]=a04&t[]=int&d[]=int&c[]=a05&t[]=int&d[]=int&c[]=a06&t[]=decimal&d[]=decimal(10,2)'),

    'breakdown_of_confirmed_cases_by_age_url' => env('CLIENT_BREAKDOWN_OF_CONFIRMED_CASES_BY_AGE_URL', 'https://covid-19.nchc.org.tw/dt02_staff.php?TB_name=2023-cdc-Day_Confirmation_Age_County_Gender_19CoV_v3_1&limitColumn=a02&limitValue=%E5%85%A8%E5%9C%8B&equalValue==&limitColumn2=a03&limitValue2=%E5%85%A8%E5%8D%80&equalValue2==&encodeKey=NTYyNTg0ODAz&c[]=id&t[]=int&d[]=int&c[]=a01&t[]=date&d[]=date&c[]=a02&t[]=varchar&d[]=varchar(255)&c[]=a03&t[]=varchar&d[]=varchar(255)&c[]=a04&t[]=varchar&d[]=varchar(255)&c[]=a05&t[]=int&d[]=int'),

    'deaths_url' => env('CLIENT_DEATHS_URL', 'https://covid-19.nchc.org.tw/dt02_staff.php?TB_name=2023-cdc-open_data_death_date_statistics_19CoV_2_v1&limitColumn=a02&limitValue=%E5%85%A8%E5%9C%8B&equalValue==&limitColumn2=a03&limitValue2=%E5%85%A8%E5%8D%80&equalValue2==&encodeKey=NTYyNTg1Mzg4&c[]=id&t[]=int&d[]=int&c[]=a01&t[]=date&d[]=date&c[]=a02&t[]=varchar&d[]=varchar(32)&c[]=a03&t[]=varchar&d[]=varchar(32)&c[]=a04&t[]=int&d[]=int&c[]=a05&t[]=int&d[]=int&c[]=a06&t[]=decimal&d[]=decimal(10,2)'),
];
