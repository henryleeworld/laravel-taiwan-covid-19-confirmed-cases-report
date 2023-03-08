# Laravel 10 台灣武漢肺炎（新型冠狀病毒）確診病例疫情報告

武漢肺炎（新型冠狀病毒）擴散全球，確診病例超過億人，死亡數超過 300 萬人，各國紛紛祭出防疫政策，試圖阻止疫情蔓延，台灣疫情本土確診病例也在近日快速增加逾千例，疫情報告數據來自衛生福利部疾病管制署，可整理了解各項疫情數據。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/cases/confirmed/breakdown-by-district` 來瀏覽本土縣市鄉鎮疫情案例資料表。
- 你可以經由 `/cases/confirmed/daily` 來瀏覽每日疫情案例紀錄資料表。
- 你可以經由 `/deaths` 來瀏覽死亡個案紀錄資料表。

----

## 畫面截圖
![](https://i.imgur.com/Ki1Xauf.gif)
> 國內累計 9,374,088 例新型冠狀病毒肺炎相關通報(含 8,739,409 例排除)，其中 635,870 例確診，分別為 12,092 例境外移入、623,724 例本土病例，36 例敦睦艦隊、3 例航空器感染、1 例不明及 14 例調查中

![](https://i.imgur.com/41X2lT3.gif)
> 民眾應落實手部衛生、咳嗽禮節及佩戴口罩等個人防護措施，減少不必要移動、活動或集會，避免出入人多擁擠的場所，或高感染傳播風險場域，並主動積極配合各項防疫措施，共同嚴守社區防線

![](https://i.imgur.com/2nSWJG7.gif)
> 以糖尿病患致死率最高，變成重症及死亡的風險，更是非糖尿病病患的 2 至 3 倍，因受到疫情影響，部分糖尿病患者畏懼到醫院，醫師提醒，疫情威脅下糖尿病更要穩定控制，做好血糖的監測，並建議在疫苗短缺下，可施打 13 價肺炎鏈球菌疫苗來增加保護力