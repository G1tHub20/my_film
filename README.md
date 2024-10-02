## 開発したサービスについて

### タイトル名：My Film
URL：https://myfilminfo.com/ (PC推奨)
GitHub：https://github.com/G1tHub20/my_film

### サービス概要
レビューをしたり独自のタグをつけることで、オススメの映画を紹介できるサービス

### なぜ作成したのか？
見たい映画を探す上で、関連するタグから検索することで直感的に映画を探すことができ、そのタグをユーザーが自由に設定できれば面白いのではないか、と思い作成しました。

## 画面イメージ

### TOP（検索）画面
![検索.png](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/1830892/351270e0-1ee6-12ef-4b7a-5846d4d10816.png)

### 一覧画面
![一覧.png](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/1830892/b8286032-5c34-d132-d947-a1a980f22d09.png)

### 詳細情報画面
![詳細情報.png](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/1830892/f7425a73-29f3-4a7b-d150-fb5c317af9ca.png)

### レビュー登録画面
![レビュー登録.png](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/1830892/d10ce3e7-203e-b8e8-75d6-83cf86c62a53.png)

### レビュー編集画面
![レビュー編集.png](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/1830892/acfd4560-e2a0-fe13-9572-c81f90785212.png)

## 開発期間
期間：4月～8月の約5カ月間
時間：概算で学習時間(70時間)、作成時間(130時間)合わせて200時間ほど費やしたと思います。
平日1時間。休日3時間。

動画学習サイトでLaravelを学習後、仕様を決めてサイトを作成しました。

## 学習方法
基本は独学で、MENTAというサービスでメンターを雇い、疑問解決や進捗管理をしていただきました。

## 学習教材
Udemyをメインに書籍も併用しながら学習を行いました。

## 機能一覧
### 映画データの登録
* TMDb APIから映画データを取得しDBに登録
### 映画検索
* タイトルやジャンル等の基本情報、またはタグから映画を検索
### レビュー投稿
* ユーザが映画のレビュー（評価、感想、タグ）を投稿
### タグ登録
* ユーザが映画に対し独自のタグをつける（レビュー登録／編集画面）

## テーブル設計
![ER図.png](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/1830892/dd01ebfb-9601-baba-b2e9-1376f70b714d.png)

## 技術・環境
### フロントエンド
* HTML / CSS / Tailwind CSS
* JavaScript / Node.js
### バックエンド
* PHP 8.0
* Laravel 9.5
### データベース
* MySQL 
### インフラ
AWS（EC2）
### その他ツール
* Visual Studio Code
* Composer
* GitHub
* draw.io

## 工夫した点

### 映画データ作成の自動化
このサービスを作る上で映画データを大量に用意する必要がありました。
手打ちで入力できる量ではサービスのコンテンツ量が足りないため、映画のデータベースのAPIを探したところ「TMDb API」を知りました。
GuzzleHTTPクライアントを使いサーバー上でAPIからデータを取得し、DBに登録するシステム（コマンド）を作りました。

### 映画データの整形
APIで取得したデータをサービス上で表示するために整形する必要がありました。
* 取得項目や値の形式を統一したい
　例）製作年：数値4桁、ジャンル：ジャンルID（数値）など
* 1975年から2024年の各年に公開された映画を取得したい
* 全18ジャンルそれぞれに該当する映画を1本以上含めたい
* 映画1本につき、シーンの画像を2枚取得したい

上記を実現するために、試行錯誤し、DBのリレーションなど設計を考えながら作成しました。

### タグによる検索
ジャンルや評価の高さだけでなく、「泣ける」「旅に出たくなる」といったタグを映画に付けることで、映画のイメージから直感的に映画を探せるのではないかと考えました。
そのタグをレビュー時にユーザーが独自のものを付けられる仕組みにすることで、ユーザーの感想や思いを反映した映画紹介サイトが実現できると考えました。

## まとめ
実際にサービスを作成する過程で、データベース設計におけるリレーションの理解や、Laravelの基本的な使い方を学べたことは非常に有意義でした。
実際に手を動かして実装することで、より多くのことを吸収できたと感じたので、今後も積極的に実践を重ねていきたいと思います。
