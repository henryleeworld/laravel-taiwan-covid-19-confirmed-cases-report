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
- 你可以經由 `/cases/confirmed/breakdown-by-age` 來瀏覽分齡疫情案例資料表。
- 你可以經由 `/deaths` 來瀏覽死亡紀錄資料表。

----

## 畫面截圖
![](https://i.imgur.com/Y7Skphw.gif)
> 上週（6/11-6/17）平均每日新增 30 例死亡，較前一週（6/4-6/10）之每日死亡平均數 35 例下降 14%，尚需觀察；新增死亡個案中，92% 具慢性病史、61% 未打滿 3 劑疫苗、96% 為 60 歲以上。現全國疫情仍處高原期，須提高警覺，密切監測各項指標變化

![](https://i.imgur.com/4kcjBot.gif)
> 注意落實手部衛生及咳嗽禮節等衛生好習慣，年長者或免疫低下者外出時，或於人潮聚集且無法保持適當距離或通風不良之場所、與年長者或免疫低下者密切接觸時，建議要戴口罩維護自身健康。如出現發燒或咳嗽、流鼻涕、喉嚨痛等疑似症狀，請儘速就醫並在家休息，避免接觸脆弱族群，保護自己與他人

![](https://i.imgur.com/r8MbGx2.gif)
> 以糖尿病患致死率最高，變成重症及死亡的風險，更是非糖尿病病患的 2 至 3 倍，因受到疫情影響，部分糖尿病患者畏懼到醫院，醫師提醒，疫情威脅下糖尿病更要穩定控制，做好血糖的監測，並建議在疫苗短缺下，可施打 13 價肺炎鏈球菌疫苗來增加保護力