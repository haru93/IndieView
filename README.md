# Indiew

![image](https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/github_image_202010200206.jpeg)

## 概要

　Laravel で個人製作したポートフォリオです。  
　NintendoSwitchを保有するユーザー向けへのインディーズゲームの紹介・共有サービスとなります。

## URL

[https://indiew.com/](https://indiew.com/)

ボタンひとつでログインが可能です。  
ぜひご利用ください。

## なぜ作成したか

　コロナ禍によって外出の機会が減る中、少しでも有意義に自宅時間を過ごしたいと思っている方は多いのではないかと考えました。
インディーズゲームは低価格な作品が多くダウンロードすればすぐに遊ぶことができます。また、作品によっては大自然の中を駆けたり、壮大なストーリーが展開されるなど没入感ある作品が揃っています。  
　そこで、各ゲームのそのような景色を共有し作品を紹介できるサービスがあれば、自宅での過ごし方の幅を増やすきっかけになると考えました。
本サービスは、家族や友達とのマルチプレイが手軽なNintendoSwitchを使って遊べる作品を厳選して紹介し、並ぶ景色の中から直感的に作品への興味を持っていただきたいという想いで構成しました。

## 使用技術

- PHP 7.3.22
- Laravel 6.18.37
- Bootstrap
- Vue.js
- AWS (EC2, RDS for PostgreSQL, S3, VPC, Route53)
- Docker/docker-compose
- CircleCI (CI/CD)
- Nginx
- Git, GitHub
- Google Analytics

## サービス構成図

![サービス構成図](https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/20201007035453_indiew_back.png)

## ER図

![ER図](https://trip-switch-bucket.s3-ap-northeast-1.amazonaws.com/indiew_erd2_202010200130.png)

## 機能一覧

- ユーザーログイン、登録

- ユーザーパスワード再設定(SendGridによるメール送信)

- Twitter、GoogleによるOAuthログイン

- 管理者マルチログイン

- ユーザー投稿関連

	- CRUD

	- 画像投稿(リサイズ処理)

	- コメント投稿・削除

	- いいね登録・解除(非同期通信)

	- タグ付け(自動補完)

	- Twitterシェア

- ゲーム作品データ、カテゴリーの登録(管理者アカウント)

- 各種検索関連

	- 投稿記事のキーワード検索

	- ゲーム作品のカテゴリー、価格帯、配信年別検索

	- ゲーム作品の金額、配信日によるソート機能

## 制作で意識した点

- ユーザーがストレスなく利用できるかどうかを意識し制作に努めました。

	- インディーズゲームを幅広い世代に広めるため、シンプルで統一感のあるデザインを心がけました。

	- 各ニーズに見合った作品を探せるよう、検索機能や記事と作品同士の関連付けなど遷移手段の拡充を意識しました。

	- サイズが大きい画像は軽量化(リサイズ)される仕組みとし、負荷が軽減されるよう試みました。

	- 簡易ログイン手段の拡充、パスワード再設定など認証時の負担が軽減されるよう試みました。

## GitHubの活用

　チームでの開発を見据え、開発中はGit、GitHubの理解を深めるため、様々な活用を試しました。

- 開発中の課題や計画は、Milestoneを設定の上で各issueを作成し、スケジュール管理を行いました。

- 各issueへのAssignees、Labels、プルリクエストとのリンク設定(自動close)を行いました。