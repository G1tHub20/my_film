<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_id' => 1,
                'user_id' => 1,
                'comment' => '3点。テレビシリーズも全部見たこの作品。映画になっても同じように面白かった。わざわざ映画でなくてもＴＶと同等内容だった気もするが・・',
                'rating' => 3,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'movie_id' => 1,
                'user_id' => 2,
                'comment' => 'マジで。阿部さん好き女の子も、脇役も',
                'rating' => 5,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'movie_id' => 2,
                'user_id' => 2,
                'comment' => 'フュリオサ観てから鑑賞。あれは前日弾とはいえど、結構近い過去だったりするのかな？ちゃんとシリーズとして楽しめるのが良かった。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'movie_id' => 3,
                'user_id' => 2,
                'comment' => 'シンドラーは決して聖人ではなかった。ユダヤ人を利用しお金を稼ぎ、女、酒を嗜む。そんな彼を動かすほどの、ナチスによるむごたらし情景には何度も目を背けたくなった。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'movie_id' => 4,
                'user_id' => 1,
                'comment' => '何度も見たことはあるんだけどいつもながら見でちゃんと観れてなかったけど今回はちゃんと見切った。魔法使いってワクワクだしそんな学校での生活みてるの楽しすぎた！',
                'rating' => 5,
                'created_at' => '2024-08-03 18:10:56',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'movie_id' => 5,
                'user_id' => 4,
                'comment' => '心温まるストーリーとユーモア。全世代が楽しめるピクサーの不朽の名作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:22:23',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'movie_id' => 2,
                'user_id' => 4,
                'comment' => '視覚効果とアクションが圧巻。世界観も魅力的でエンターテイメント性が高い。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:23:11',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'movie_id' => 1,
                'user_id' => 4,
                'comment' => 'ユニークなキャラクターとトリックが楽しいが、展開が少し予想通り。ファンには満足の一本。',
                'rating' => 3,
                'created_at' => '2024-08-03 18:23:38',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'movie_id' => 3,
                'user_id' => 4,
                'comment' => '感動的なストーリーと卓越した演技。歴史を深く考えさせられる傑作だが、やや重いテーマ。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:27:12',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'movie_id' => 4,
                'user_id' => 4,
                'comment' => '魔法の世界に引き込まれる冒険。ファンタジーの魅力を存分に味わえる始まりの一作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:27:53',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'movie_id' => 25,
                'user_id' => 4,
                'comment' => '美しいアニメーションと独特なキャラクター。ストーリーが少し複雑だが魅力的。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:28:38',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'movie_id' => 26,
                'user_id' => 4,
                'comment' => '冒険とユーモアが詰まったエンターテイメント。ジョニー・デップの演技が光る。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:29:25',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'movie_id' => 31,
                'user_id' => 4,
                'comment' => '圧倒的な映像美と感動的なラブストーリー。歴史とドラマを見事に融合させた名作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:30:01',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'movie_id' => 33,
                'user_id' => 4,
                'comment' => '緊張感あるストーリー展開と強烈な結末。サスペンス好きにはたまらない一作。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:30:54',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'movie_id' => 43,
                'user_id' => 4,
                'comment' => 'タイムトラベルの魅力が詰まったSFの名作。ユーモアとアドベンチャーの完璧なバランス。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:31:26',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'movie_id' => 69,
                'user_id' => 4,
                'comment' => '限られた空間での緊迫感とサスペンスが秀逸。ハラハラドキドキの展開に引き込まれる。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:33:46',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'movie_id' => 70,
                'user_id' => 4,
                'comment' => '実話を基にした感動の物語。心に響くストーリーと優れた演技が光る。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:34:30',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'movie_id' => 71,
                'user_id' => 4,
                'comment' => 'ユーモアとアクションが融合したエンターテイメント。笑いと興奮が絶えない作品。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:35:25',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'movie_id' => 72,
                'user_id' => 4,
                'comment' => 'インド映画特有のユーモアと感動のバランスが良い。少し長めだが、楽しめる作品。',
                'rating' => 3,
                'created_at' => '2024-08-03 18:35:57',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'movie_id' => 66,
                'user_id' => 4,
                'comment' => '現代社会の問題を鋭く描く感動作。キャストの演技が秀逸で、深く考えさせられる。',
                'rating' => 4,
                'created_at' => '2024-08-03 18:36:16',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'movie_id' => 67,
                'user_id' => 4,
                'comment' => '心温まるストーリーと美しいアニメーション。全世代に愛されるジブリの名作。',
                'rating' => 5,
                'created_at' => '2024-08-03 18:36:43',
                'updated_at' => '2024-08-27 09:14:41',
            ),
            21 => 
            array (
                'id' => 23,
                'movie_id' => 76,
                'user_id' => 2,
                'comment' => 'シュワちゃん、大暴れという映画です。
痛快！',
                'rating' => 4,
                'created_at' => '2024-08-27 08:55:57',
                'updated_at' => '2024-08-27 08:55:57',
            ),
            22 => 
            array (
                'id' => 24,
                'movie_id' => 31,
                'user_id' => 2,
                'comment' => '音楽がいい！',
                'rating' => 4,
                'created_at' => '2024-08-27 08:57:47',
                'updated_at' => '2024-08-27 08:57:47',
            ),
            23 => 
            array (
                'id' => 25,
                'movie_id' => 46,
                'user_id' => 2,
                'comment' => '実際に画面から物が飛び出して来る様な映像に、当時は観客全体が驚き、観客がみんなで避けたりした。',
                'rating' => 3,
                'created_at' => '2024-08-27 08:59:30',
                'updated_at' => '2024-08-27 08:59:30',
            ),
            24 => 
            array (
                'id' => 26,
                'movie_id' => 66,
                'user_id' => 2,
                'comment' => '家族の形について考えさせられるし、血の繋がりがあるものの、他人同士の間でのドラマが、あってなおかつパラサイトみたく人間臭すぎるわけではなくちゃんとその中でも愛も感じられる映画だった。',
                'rating' => 5,
                'created_at' => '2024-08-27 09:01:00',
                'updated_at' => '2024-08-27 09:01:00',
            ),
            25 => 
            array (
                'id' => 27,
                'movie_id' => 75,
                'user_id' => 2,
                'comment' => '映像と脚本の優れた映画、そしてこの物語が実話を基に書かれていると思うと、主人公に感情移入してしまう。
仕事に忙殺されがちな毎日のなかで、ふと、ザックにシュラフを詰め込んで旅に出たくなる。そんな映画です。',
                'rating' => 4,
                'created_at' => '2024-08-27 09:03:46',
                'updated_at' => '2024-08-27 09:03:46',
            ),
            26 => 
            array (
                'id' => 28,
                'movie_id' => 10,
                'user_id' => 2,
                'comment' => '差別といったものは、時代もあるけれどその個人の環境が強く根付いてできるものなのだと感じた。
一旦差別していた対象と関係を持ってみることや、怒りに身を任せないことがこの映画の重点だったと思う。',
                'rating' => 4,
                'created_at' => '2024-09-21 18:13:34',
                'updated_at' => '2024-09-21 18:13:34',
            ),
            27 => 
            array (
                'id' => 29,
                'movie_id' => 7,
                'user_id' => 2,
                'comment' => '想像していたものとは違うかったが面白かった。韓国の映画を見るのは初めてだが、良かった。最後父が地下から上ってきて息子と抱き合うシーンは、将来の妄想なのか現実なのか、馬鹿な私には分からなかった。',
                'rating' => 3,
                'created_at' => '2024-09-21 18:51:57',
                'updated_at' => '2024-09-21 18:51:57',
            ),
            28 => 
            array (
                'id' => 30,
                'movie_id' => 13,
                'user_id' => 2,
                'comment' => '西田敏行の人情味もさることながら、無学で過ごしてきた田中邦衛の熱い思い（特にオグリキャップ）を語るシーンは鮮烈に覚えている。
中江有里が可愛かったなぁ…',
                'rating' => 4,
                'created_at' => '2024-09-21 19:07:02',
                'updated_at' => '2024-09-21 19:07:02',
            ),
            29 => 
            array (
                'id' => 31,
                'movie_id' => 58,
                'user_id' => 2,
                'comment' => '「夕陽のガンマン」と無関係。なぜこんな邦題を？
南北戦争について、概略だけでも調べてみようと思いました。
長すぎました。(けど、「あるシーン」からはおもしろかった)',
                'rating' => 3,
                'created_at' => '2024-09-21 19:09:26',
                'updated_at' => '2024-09-21 19:09:26',
            ),
            30 => 
            array (
                'id' => 32,
                'movie_id' => 6,
                'user_id' => 2,
                'comment' => 'パリ18区を舞台に繰り広げられる短編映画を集めたオムニバス作品。
有名な監督陣の短編集となっており、コーエン兄弟やガス・ヴァン・サントの作品もある。
各監督の作品それぞれに個性があって、見ていて面白いし、パリの情景が美しい。フランス映画独特の美しさが光る。セリフとかも素敵なシーンが多いのも見どころ。
短編集なので飽きることもないし、センスを感じる作品が多かった。',
                'rating' => 4,
                'created_at' => '2024-09-21 19:37:30',
                'updated_at' => '2024-09-21 19:37:30',
            ),
            31 => 
            array (
                'id' => 33,
                'movie_id' => 36,
                'user_id' => 2,
                'comment' => '絵本のような少年の世界の中、確かにある不穏な空気や少年の言動ががぞわぞわとさせる本作

話が進むに連れユダヤ人の少女との出会いや周囲の不穏さを醸し出していた大人たちとの変化に和みながら、それでもやはり現実にあった出来事に沿って物語は進んでいきます
終わったあとのなんとも言えない感じ、もう一度見たいかと言われれば見ないけれど何度も思い返すシーンがいくつもある

こういった気持ちを心に残してくれる、戦争映画としてすごいことなのではと感じます',
                'rating' => 5,
                'created_at' => '2024-09-21 19:39:54',
                'updated_at' => '2024-09-21 19:39:54',
            ),
            32 => 
            array (
                'id' => 34,
                'movie_id' => 55,
                'user_id' => 5,
                'comment' => '障害を持つ息子の容疑を晴らす為に母ちゃんが頑張るんだけど　最後の結局血は争えないという事実にあーマジかよ！ってなってしまい変な余韻のまま劇場を後にしましたが　ポンジュノらしい作品で相変わらずハズレが全く無い職人監督だなあとつくづく思いました！',
                'rating' => 4,
                'created_at' => '2024-09-21 22:03:11',
                'updated_at' => '2024-09-21 22:03:11',
            ),
            33 => 
            array (
                'id' => 35,
                'movie_id' => 19,
                'user_id' => 5,
                'comment' => 'mark5の装着がめちゃくちゃ良い。このレビューはインフィニティ・サーガをみ終わった後に書いてるけどウォーマシンの誕生少し雑な気がする',
                'rating' => 3,
                'created_at' => '2024-09-21 22:04:27',
                'updated_at' => '2024-09-21 22:04:27',
            ),
            34 => 
            array (
                'id' => 36,
                'movie_id' => 62,
                'user_id' => 2,
                'comment' => '日本ではそこそこの評価ですが、アメリカでは不朽の名作扱いです。

全体的な印象は静かなハードボイルドの印象です。
常にニコルの旦那の視点で描かれ、他の人物の視点は排除されています。
ポランスキー先輩独特の乾いた画面に高級感が漂う映像造形が秀逸です。

ミステリーですがストーリーは単純でスリラーやサスペンスは希薄ですので、独特の映像感覚を堪能する作品です。',
                'rating' => 4,
                'created_at' => '2024-09-21 22:13:18',
                'updated_at' => '2024-09-21 22:13:18',
            ),
            35 => 
            array (
                'id' => 37,
                'movie_id' => 40,
                'user_id' => 2,
                'comment' => '映画系YouTuberさん2人が勧めていた作品

何の気なしに観てみたが
案外良かった。

確か2090年代の話だか、
実際、きっとここまで発展してはいないとは
思うけど、未来感がとても好き
とても綺麗。

主人公のジャレッド・レトさん
良いですね

どんな役でもできそうな感じ',
                'rating' => 4,
                'created_at' => '2024-09-21 22:14:36',
                'updated_at' => '2024-09-21 22:14:36',
            ),
            36 => 
            array (
                'id' => 38,
                'movie_id' => 3,
                'user_id' => 1,
                'comment' => 'いろんな感情が交錯した。泣いた。とてもいい映画。',
                'rating' => 5,
                'created_at' => '2024-09-28 19:40:19',
                'updated_at' => '2024-09-28 19:43:51',
            ),
            37 => 
            array (
                'id' => 39,
                'movie_id' => 77,
                'user_id' => 1,
                'comment' => '仲間から「壁の花」と名付けてもらって壁からぐいっと前に出てくる場面がよかった。／音楽を掛けて、サンルーフから体を出して、一瞬だけでもこの世の王になるのだ。',
                'rating' => 4,
                'created_at' => '2024-10-01 08:23:02',
                'updated_at' => '2024-10-01 08:23:02',
            ),
            38 => 
            array (
                'id' => 40,
                'movie_id' => 78,
                'user_id' => 1,
                'comment' => '素直なロマンスとホッとする作品だった。
ふとした瞬間に思い出し久々に観たいと思った作品',
                'rating' => 4,
                'created_at' => '2024-10-01 08:25:54',
                'updated_at' => '2024-10-01 08:25:54',
            ),
            39 => 
            array (
                'id' => 41,
                'movie_id' => 70,
                'user_id' => 1,
                'comment' => '最初の少しを超えると、とても引き込まれて最後まで、集中してしまう。

静かなきもするが、退屈はしない。',
                'rating' => 4,
                'created_at' => '2024-10-01 08:29:52',
                'updated_at' => '2024-10-01 08:29:52',
            ),
            40 => 
            array (
                'id' => 42,
                'movie_id' => 14,
                'user_id' => 1,
                'comment' => '一人の人にたくさんの感情が存在して、それぞれが考えたり相談したり指示したり。面白い発想の内容でした。最期のビンボンのシーンは泣ける〜。',
                'rating' => 3,
                'created_at' => '2024-10-01 08:32:20',
                'updated_at' => '2024-10-01 08:32:20',
            ),
            41 => 
            array (
                'id' => 43,
                'movie_id' => 79,
                'user_id' => 1,
                'comment' => '確かに、『あっ…』と言わせるような映画だけど
これは、いい脚本だったと思う。
ストーリーも去ることながら、誰しもが思う自分への劣等感や失望感を、払拭させられるような力を持つ映画でした。',
                'rating' => 4,
                'created_at' => '2024-10-01 08:39:52',
                'updated_at' => '2024-10-01 08:39:52',
            ),
            42 => 
            array (
                'id' => 44,
                'movie_id' => 80,
                'user_id' => 1,
                'comment' => 'というタイトルがぴったりな作品。
ネタバレを知ってから観たけどそれでも充分面白かった。

自分がもしあの状態になったら...
出ていけ！！',
                'rating' => 4,
                'created_at' => '2024-10-01 08:42:51',
                'updated_at' => '2024-10-01 08:42:51',
            ),
            43 => 
            array (
                'id' => 45,
                'movie_id' => 84,
                'user_id' => 1,
                'comment' => '深い内容でとても面白かった。
知らない事が多くて興味深く見れました。
全人類必見！',
                'rating' => 4,
                'created_at' => '2024-10-01 09:55:30',
                'updated_at' => '2024-10-01 09:55:30',
            ),
            44 => 
            array (
                'id' => 46,
                'movie_id' => 99,
                'user_id' => 4,
                'comment' => 'とにかく面白かった
ずーっと目が離せなかった
ドキュメンタリーチックですごくリアルな作品',
                'rating' => 4,
                'created_at' => '2024-10-01 10:22:38',
                'updated_at' => '2024-10-01 10:22:38',
            ),
            45 => 
            array (
                'id' => 47,
                'movie_id' => 100,
                'user_id' => 4,
                'comment' => 'スターウォーズの中でも、一番ドラマチックな展開のあったのがこのエピソード。
数々の展開の中、やはり、若きルークが、ヨーダとの研鑽の日々を重ね、ジェダイマスターへとなっていく過程が最大の見所だと感じました。

また、ハンソロ、レイアの関係にも新たな展開が…',
                'rating' => 4,
                'created_at' => '2024-10-01 10:25:51',
                'updated_at' => '2024-10-01 10:25:51',
            ),
            46 => 
            array (
                'id' => 48,
                'movie_id' => 91,
                'user_id' => 4,
                'comment' => '泣きあり笑いあり。評価悪いが私は好き。残酷なところや、やるせない事もあるけど、個々のキャラがとても好き。ネズミも良かった。',
                'rating' => 4,
                'created_at' => '2024-10-01 10:27:16',
                'updated_at' => '2024-10-01 10:27:16',
            ),
            47 => 
            array (
                'id' => 49,
                'movie_id' => 95,
                'user_id' => 4,
                'comment' => 'リアルなギャングたちの話。
実話ベースということで興味深く鑑賞させていただきました。
ギャングとして生きていくのも楽じゃない。',
                'rating' => 4,
                'created_at' => '2024-10-01 10:28:55',
                'updated_at' => '2024-10-01 10:28:55',
            ),
            48 => 
            array (
                'id' => 50,
                'movie_id' => 52,
                'user_id' => 4,
                'comment' => 'そこまで絶賛の嵐に埋もれる映画評論には疑問があります。

でもいい映画です。',
                'rating' => 4,
                'created_at' => '2024-10-01 10:30:21',
                'updated_at' => '2024-10-01 10:30:21',
            ),
            49 => 
            array (
                'id' => 51,
                'movie_id' => 65,
                'user_id' => 4,
                'comment' => 'とにかく派手な画面作りの映画です。セットや特殊効果という部分はもちろん、俳優のキャスティングもとにかく派手。ちらっとしか出てこないキャラにけっこうな有名俳優が出てきますが、メインキャラとなる姫発や妲己などには新人を起用しています。',
                'rating' => 3,
                'created_at' => '2024-10-01 10:57:12',
                'updated_at' => '2024-10-01 10:57:12',
            ),
            50 => 
            array (
                'id' => 52,
                'movie_id' => 58,
                'user_id' => 4,
                'comment' => 'どうしてこんなに面白いんだろう？！
1968年7月14日、この日「続夕陽のガンマン」と「サムライ」を観なかったら、私は50年以上映画ファンであり続ける事はなかったかも知れない。自分史の中でそういう位置を占めているのだ。',
                'rating' => 5,
                'created_at' => '2024-10-01 11:01:48',
                'updated_at' => '2024-10-01 11:01:48',
            ),
        ));
        
        
    }
}