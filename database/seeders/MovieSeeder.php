<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'トリック劇場版',
                'original_title' => 'トリック劇場版',
                'overview' => 'ある日、奈緒子は災いが起こると言い伝えられる村で「神を演じてほしい」と依頼を受ける。しかし村には自称「神」を名乗る3人の男が待っていた…。',
                'release_year' => 2002,
                'director_id' => 2,
                'country_id' => 1,
                'image1' => '/tt84MQlU6RCMI00jOxIx8jxQfes.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'マッドマックス　フュリオサ',
                'original_title' => 'Furiosa: A Mad Max Saga',
                'overview' => '世界崩壊から45年。バイカー軍団に連れ去られ、すべてを奪われた若きフュリオサは故郷への帰還を誓い、MADな世界（マッドワールド）に対峙する——巨大なバイカー軍団、その頂点ディメンタス将軍は可愛い熊の人形を引っさげ改造バイクで絶叫し、さらには、白塗りの兵隊ウォーボーイズたちが神と崇めるイモータン・ジョーは鉄壁の要塞を牛耳り、互いが覇権を争っていた。生き残れるのは狂った奴だけ。怒りの戦士フュリオサよ、復讐のエンジンを鳴らせ！',
                'release_year' => 2024,
                'director_id' => 1,
                'country_id' => 2,
                'image1' => '/raph7qjAGTMXaIjVxt6ZDSXRzUr.jpg',
                'image2' => '/uk3xNoCirHkbcfUbgH5UISI23De.jpg',
                'created_at' => Now()
            ],
            [
                'title' => 'シンドラーのリスト',
                'original_title' => "Schindler's List",
                'overview' => '1939年、ポーランド南部の都市クラクフにドイツ軍が侵攻した。ドイツ人実業家のオスカー・シンドラーは、一旗揚げようとこの街にやって来た。彼は 金にものを言わせて巧みに軍の幹部たちに取り入り、ユダヤ人の所有していた工場を払い下げてもらう。ユダヤ人会計士のイツァーク・シュテルンをパートナーに選んだシンドラーは、軍用ホーロー容器の事業を始める。41年3月、ユダヤ人たちは壁に囲まれたゲットー（居住区）に住むことを義務づけられる。シュテルンの活躍で、ゲットーのユ ダヤ人たちが無償の労働力として、シンドラーの工場に続々と集められ事業はたちまち軌道に乗る。',
                'release_year' => 1994,
                'director_id' => 3,
                'country_id' => 2,
                'image1' => '/zb6fM1CX41D9rF9hdgclu0peUmy.jpg',
                'image2' => '/ei5xjikx59WR2oDFl2lNLbtQHkx.jpg',
                'created_at' => Now()
            ],
            [
                'title' => 'ハリー・ポッターと賢者の石',
                'original_title' => "Harry Potter and the Philosopher's Stone",
                'overview' => '両親の死後、親戚の家に預けられたハリー・ポッター少年。そこでは階段下の物置部屋をあてがわれ、何かとこき使われる毎日。そんなある日、ハリー の11歳の誕生日に一通の手紙が届いた。中身はなんと、魔法魔術学校の入学許可証だった。実は、ハリーの両親は優秀な魔法使いだったのだ。手紙に導かれるままホグワーツ魔法魔術学校にたどり着いたハリーは、さっそく魔法使いになるための勉強を始める。ロンとハーマイオニーという友達もでき、楽しい毎日を送るハリーだったが、やがて学校に隠された驚くべき秘密に気づくのだった……。',
                'release_year' => 2001,
                'director_id' => 4,
                'country_id' => 2,
                'image1' => '/pXvDfEB5kA4cZJ2S2zTXg8cKTsK.jpg',
                'image2' => '/dK3WWZCwInfpCG5BMpKagcchJDi.jpg',
                'created_at' => Now()
            ],
            [
                'title' => 'トイ・ストーリー',
                'original_title' => 'Toy Story',
                'overview' => 'カウボーイ人形のウッディはアンディ少年の大のお気に入り。だがそれも誕生日プレゼントでアクション人形バズ・ライトイヤーを手にするまでの事だ った。NO．1の座を奪われたウッディは何とかバズをこらしめようとするが、バズはバズで自分が本物のスペース・レンジャーだと思い込んでいる有り様。そんな二人がふと したいざこざから外の世界に飛び出してしまう。なんとか我が家へ帰還しようとする二人だが、なんとアンディの隣に住む悪ガキのシドに捕まってしまった……。',
                'release_year' => 1995,
                'director_id' => 5,
                'country_id' => 2,
                'image1' => '/lxD5ak7BOoinRNehOCA85CQ8ubr.jpg',
                'image2' => '/3Rfvhy1Nl6sSGJwyjb0QiZzZYlB.jpg',
                'created_at' => Now()
            ],
            [
                'title' => 'インサイド・ヘッド２',
                'original_title' => 'Inside Out 2',
                'overview' => '',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/stKGOm8UyhuLPR9sZLjs5AkmncA.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => '猿の惑星／キングダム',
                'original_title' => 'Kingdom of the Planet of the Apes',
                'overview' => '今から300年後の世界、猿たちは絶対的支配を目論み、巨大な帝国＜キングダム＞を築こうとしていた。一方、人類は退化し、まるで野生動物のような存在となっていた。そんな世界で生きる若き猿ノアは、ある人間の女性と出会う。彼女は人間の中で“誰よりも賢い”とされ、猿たちから狙われていた。猿と人間の共存は不可能なのか。はたして、この世界で生き残るのは―。',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/fqv8v6AycXKsivp1T5yKtLbGXce.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'インサイド・ヘッド',
                'original_title' => 'Inside Out',
                'overview' => '田舎町に暮らす11歳の女の子ライリーは、父親の仕事の影響で都会のサンフランシスコに移り住むことになる。新しい生活に慣れようとするライリーの 頭の中では、ヨロコビ、カナシミ、イカリ、ビビリ、ムカムカたちが、ライリーの幸せのためという強い気持ちが原因で衝突していて……。〈11歳の少女の頭の中を舞台に、喜び、怒り、嫌悪、恐れ、悲しみといった感情がそれぞれキャラクターとなり、物語を繰り広げるディズニー/ピクサーによるアニメ。田舎から都会への引っ越しで環境が変化 した少女の頭の中で起こる、感情を表すキャラクターたちの混乱やぶつかり合いなどを描く。メガホンを取るのは、『モンスターズ・インク』や『カールじいさんの空飛ぶ家』などの監督ピート・ドクター。〉',
                'release_year' => 2015,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/j29ekbcLpBvxnGk6LjdTc2EI5SA.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ゴジラxコング 新たなる帝国',
                'original_title' => 'Godzilla x Kong: The New Empire',
                'overview' => '',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/jvPMJ2zM92jfXxVEFsqP1MMrLaO.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => '외계+인 2부',
                'original_title' => '외계+인 2부',
                'overview' => '',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 6,
                'image1' => '/gGmf3CyHdXvaZtcun0DvU1WSNft.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'デューン 砂の惑星PART2',
                'original_title' => 'Dune: Part Two',
                'overview' => 'その惑星を制する者が全宇宙を制すると言われる砂の惑星デューンで繰り広げられたアトレイデス家とハルコンネン家の戦い。ハルコンネン家の陰謀に より一族を滅ぼされたアトレイデス家の後継者ポールは、ついに反撃の狼煙を上げる。砂漠の民フレメンのチャニと心を通わせながら、救世主として民を率いていくポールだったが、宿敵ハルコンネン家の次期男爵フェイド＝ラウサがデューンの新たな支配者として送り込まれてくる。',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/xOMo8BRK7PfcJv9JCnx7s5hj0PX.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'El Halcón: Sed de Venganza',
                'original_title' => 'El Halcón: Sed de Venganza',
                'overview' => '',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 11,
                'image1' => '/7KcwyOQL6hC6VJxN7LBB1p2GRaY.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'FLY！/フライ！',
                'original_title' => 'Migration',
                'overview' => '',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/2KGxQFV9Wp1MshPBf8BuqWUgVAz.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ねこのガーフィールド',
                'original_title' => 'The Garfield Movie',
                'overview' => '',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 9,
                'image1' => '/vWzJDjLPmycnQ42IppEjMpIhrhc.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => '宇宙＋人 1部',
                'original_title' => '외계+인 1부',
                'overview' => '',
                'release_year' => 2022,
                'director_id' => 6,
                'country_id' => 6,
                'image1' => '/7ZP8HtgOIDaBs12krXgUIygqEsy.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ゴーストバスターズ／フローズン・サマー',
                'original_title' => 'Ghostbusters: Frozen Empire',
                'overview' => '',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/1r1dWa9yf1LeSLfkOfkSqxmWHdK.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'Space Pups',
                'original_title' => 'Space Pups',
                'overview' => '',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/mYIWIFZRrxCVsOUFM9uUpOdgJ3I.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'バービー',
                'original_title' => 'Barbie',
                'overview' => 'すべてが完璧で今日も明日も明後日も《夢》のような毎日が続くバービーランド！ バービーとボーイフレンド？ のケンが連日繰り広げるのはパーティ ー、ドライブ、サーフィン。しかし、ある日突然バービーの身体に異変が！ 原因を探るために人間の世界へ行く２人。しかし、そこはバービーランドとはすべて勝手が違う 現実の世界、行く先々で大騒動を巻き起こすことにー！？ 彼女たちにとって完璧とは程遠い人間の世界で知った驚きの〈世界の秘密〉とは？ そして彼女が選んだ道とはー？ 予想を裏切る驚きの展開と、誰もの明日を輝かせる魔法のようなメッセージが待っているー！',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/3N5QNUqS76GFYNoEayfkkJyAyTN.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'DUNE／デューン 砂の惑星',
                'original_title' => 'Dune',
                'overview' => 'アトレイデス家の後継者、ポール。彼には”未来が視える”能力があった。  宇宙帝国の皇帝からの命令で、その惑星を制する者が全宇宙を制すると言わ れる、  過酷な《砂の惑星デューン》へと移住するが、それは罠だった…。  そこで宇宙支配を狙う宿敵ハルコンネン家の壮絶な戦いが勃発！！  父を殺され、巨大なサンド ワームが襲い来るその惑星で、全宇宙のために立ち上がるー',
                'release_year' => 2021,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/zRKQW58MBEY078AxkHxEJzUskCl.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ワンダーウーマン',
                'original_title' => 'Wonder Woman',
                'overview' => '人間社会から孤立した女性のみの一族のプリンセスとして生まれたワンダーウーマンは、自分が育ってきた世界以外の環境を知らず、さらに男性を見た こともなかった。ある日、彼女は浜辺に不時着したパイロットと遭遇。彼を救出したことをきっかけに、ワンダーウーマンは身分を隠して人間社会で生活していくことにする。',
                'release_year' => 2017,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/6iUNJZymJBMXXriQyFZfLAKnjO6.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'マイティ・ソー バトルロイヤル',
                'original_title' => 'Thor: Ragnarok',
                'overview' => 'アベンジャーズの一員ソーの前に死の女神・ヘラが現れた。復讐と野望に燃えるヘラは、ソーの故郷へ攻撃をはじめる。故郷を奪われたソーは、この最 強の敵を倒すため盟友ハルク、宿敵ロキらと型破りのチーム“リベンジャーズ”を組み極限バトルに挑む。 そこには、ソーの運命を変える秘密が隠されていた。',
                'release_year' => 2017,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/kaIfm5ryEOwYg8mLbq8HkPuM1Fo.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ザ・フラッシュ',
                'original_title' => 'The Flash',
                'overview' => 'フラッシュが“過去“を変えた影響で、現在に歪みをもたらしてしまい、かつてスーパーマンが倒したはずの敵（ゾッド将軍）が大軍勢を率いて襲来、地 球植民地化を進めようと破壊の限りを尽くし大ピンチに！？',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/yF1eOkaYvwiORauRCPWznV9xVvi.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ウィッシュ',
                'original_title' => 'Wish',
                'overview' => 'これまでディズニー作品の主人公たちは強く願う力で道を切り開いてきたが、本作はそんなどの作品の世界より前から存在するファンタジーの世界、ど んな“願い”も叶うと言われている “ロサス王国”を舞台にした物語。その主人公となるヒロインは、“願いの力”をまだ知らない17歳のアーシャ。前向きで明るく、王国の人々 を大切に思っている彼女は、ある出来事によってこの夢のような王国に隠された秘密を知り、ディズニー史上最も恐ろしいヴィランに立ち向かう。',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/ehumsuIBbgAe1hg343oszCLrAfI.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ブルー きみは大丈夫',
                'original_title' => 'IF',
                'overview' => '母親を亡くし、心に傷を抱えた少女ビー。彼女はある日、“子供にしか見えない不思議な存在”のブルーに出会う。ブルーが友達だった子供はもう大人に なって彼のことを忘れてしまい、このまま新しいパートナーがいないとブルーは消えてしまう運命に…。少女はブルーを救えるパートナーを見つけることが出来るのか？',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/nxxCPRGTzxUH8SFMrIsvMmdxHti.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => '외계+인 2부',
                'original_title' => '외계+인 2부',
                'overview' => '',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 6,
                'image1' => '/gGmf3CyHdXvaZtcun0DvU1WSNft.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'カンフー・パンダ4',
                'original_title' => 'Kung Fu Panda 4',
                'overview' => '',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/kYgQzzjNis5jJalYtIHgrom0gOx.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ザ・ウォッチャーズ',
                'original_title' => 'The Watchers',
                'overview' => '地図にない森、ガラス貼りの部屋、見知らぬ3人ー28歳の孤独なアーティスト ミナは、贈り物を届けるだけのはずだったが、そこに閉じ込められ“謎の何か”に毎晩監視されているー“監視者”は何者なのか？そして何故…？',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/oZDRuGHhe5uY8wBqFJcJZT9kdvJ.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'Wild Eyed and Wicked',
                'original_title' => 'Wild Eyed and Wicked',
                'overview' => '',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/zs2S0D4sZMNbOKgs4LyZAxiX9eY.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ミラキュラス・ワールド／パリ シェイディバグ＆クロウノワール',
                'original_title' => 'Miraculous World : Paris, Les Aventures de Toxinelle et Griffe Noire',
                'overview' => '',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 8,
                'image1' => '/hU1Q9YVzdYhokr8a9gLywnSUMlN.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'マダム・ウェブ',
                'original_title' => 'Madame Web',
                'overview' => 'アメリカ・ニューヨーク。救命士として懸命に働いていたキャシー・ウェヴ（ダコタ・ジョンソン）は、ある日、生死を彷徨う事故に遭い、それをきっ かけに“未来予知”の能力を手にする。突如覚醒した能力に戸惑うキャシーだったが、未来を予知するだけでなく、自分の意思で未来を変えられる事が分かってくる。そんなある日、キャシーは偶然出会った3人の少女が、黒いマスクとスーツに身を包んだ謎の男に殺害される未来を見たことから、図らずもその男から少女たちを守ることに……。ある 重要な秘密を持つとされる少女たちは一体何者なのか。そして、キャシーと同じく未来が見える黒いマスクとスーツの男は、どこからやって来たのか。やがて全ては、キャシー出生の秘密とともに、壮大な“運命”の糸で結びついてゆく……。',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/pwGmXVKUgKN13psUjlhC9zBcq1o.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'The Legend of Catclaws Mountain',
                'original_title' => 'The Legend of Catclaws Mountain',
                'overview' => '',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/rZ8VxBH8QRHGQi9YztBRm3eAsxL.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ユニコーンのテルマ',
                'original_title' => 'Thelma the Unicorn',
                'overview' => 'スターを夢見る歌うポニーがキラキラのユニコーンにイメチェンしたところ、たちまち大ブレイク。あこがれのセレブとしての一歩をふみ出したポニー を、ワイルドでめまぐるしい毎日が待ち受ける。',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/AuKXTyCVzeIdtTe1NAQnJa1ZC7I.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => '宇宙＋人 1部',
                'original_title' => '외계+인 1부',
                'overview' => '',
                'release_year' => 2022,
                'director_id' => 6,
                'country_id' => 6,
                'image1' => '/7ZP8HtgOIDaBs12krXgUIygqEsy.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ゴーストバスターズ／フローズン・サマー',
                'original_title' => 'Ghostbusters: Frozen Empire',
                'overview' => '',
                'release_year' => 2024,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/1r1dWa9yf1LeSLfkOfkSqxmWHdK.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ゴーストバスターズ',
                'original_title' => 'Ghostbusters',
                'overview' => '幽霊退治に挑む科学者たちの活躍を描き、1980年代に一世を風靡した「ゴーストバスターズ」を、女性をメインキャラクターに新たに復活させたアクシ ョンコメディ。アメリカ・ニューヨーク。コロンビア大学の素粒子物理学者のエリン・ギルバートは、心霊現象を科学的に証明する研究を重ねていたが、研究費を打ち切られ、大学をクビになってしまう。エリンは自らの知識と技術力を生かすため、幽霊退治の専門会社「ゴーストバスターズ」を立ち上げるが……。「',
                'release_year' => 2016,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/3RWsSQlqzRjsuqSRmoyggy74UA7.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'マイ・エレメント',
                'original_title' => 'Elemental',
                'overview' => '火・水・土・風のエレメント（元素）が共に暮らす都市エレメント・シティを舞台に、だれも知らないイマジネーションあふれる色鮮やかな世界での奇 跡の出会い、予想もできない驚きと感動の物語が始まる。 ふたりの距離は近くて、遠い。 正反対のふたりが起こす、奇跡の化学反応。 本作の主人公は“火のエレメント“エ ンバーと“水のエレメント“ウェイド。 様々なエレメントたちが共に暮らすエレメント・シティで、アツくなりやすくて家族思いな火の女の子エンバーと涙もろくて心やさし い水の青年ウェイドは性格だけでなく、その気になればお互いを消せる（!?）性質を持ち、全てが正反対の意外なふたり。 正反対のふたりの出会いは“エレメントの世界“に どんな化学反応を起こすのか？',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/6YInbRTk39ckuLYFmUgBCKcKNjb.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ワンダーウーマン',
                'original_title' => 'Wonder Woman',
                'overview' => '人間社会から孤立した女性のみの一族のプリンセスとして生まれたワンダーウーマンは、自分が育ってきた世界以外の環境を知らず、さらに男性を見た こともなかった。ある日、彼女は浜辺に不時着したパイロットと遭遇。彼を救出したことをきっかけに、ワンダーウーマンは身分を隠して人間社会で生活していくことにする。',
                'release_year' => 2017,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/6iUNJZymJBMXXriQyFZfLAKnjO6.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ウィッシュ',
                'original_title' => 'Wish',
                'overview' => 'これまでディズニー作品の主人公たちは強く願う力で道を切り開いてきたが、本作はそんなどの作品の世界より前から存在するファンタジーの世界、ど んな“願い”も叶うと言われている “ロサス王国”を舞台にした物語。その主人公となるヒロインは、“願いの力”をまだ知らない17歳のアーシャ。前向きで明るく、王国の人々 を大切に思っている彼女は、ある出来事によってこの夢のような王国に隠された秘密を知り、ディズニー史上最も恐ろしいヴィランに立ち向かう。',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/ehumsuIBbgAe1hg343oszCLrAfI.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => '封神第一部：朝歌风云',
                'original_title' => '封神第一部：朝歌风云',
                'overview' => '',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 7,
                'image1' => '/uaSIzbRfwLidxRNMvdZAUwW3vtL.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ザ・スーパーマリオブラザーズ・ムービー',
                'original_title' => 'The Super Mario Bros. Movie',
                'overview' => 'ニューヨークで配管工を営む双子の兄弟マリオとルイージ。謎の土管で迷いこんだのは、魔法に満ちた新世界。はなればなれになってしまった兄弟が、 絆の力で世界の危機に立ち向かう。',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 1,
                'image1' => '/9n2tJBplPbgR2ca05hS5CKXwP2c.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => 'ウォンカとチョコレート工場のはじまり',
                'original_title' => 'Wonka',
                'overview' => '世界中を虜にした名作『チャーリーとチョコレート工場』で有名な工場長ウィリー・ウォンカの若き日の物語。夢見ることを禁じられた町で、ウォンカ は母と夢見た世界一のチョコレート工場をつくることができるのか―？「ハリー・ポッター」シリーズのプロデューサーが、次世代のジョニー・デップとの呼び声高いティモ シー・シャラメ、名優ヒュー・グラントら超豪華キャストを迎えて贈る、歌と魔法と感動のファンタジー超大作！',
                'release_year' => 2023,
                'director_id' => 6,
                'country_id' => 3,
                'image1' => '/yyFc8Iclt2jxPmLztbP617xXllT.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => '約束のネバーランド',
                'original_title' => '約束のネバーランド',
                'overview' => '内容は孤児院で育てられた子ども達が過酷な運命に抗っていく物語である。白井の初連載作品で、出水にとっては6度目（『ジャンプ』では初）の連載作品。『ジャンプ』では珍しい少女主人公によるダーク・ファンタジー、サスペンス作品でもある。  作風としては、少年漫画らしく「友情、努力、勝利の物語」、「逆境モノ」であることにこだわり、白井の初期構想で強かった「エロ・グロ・ナンセンス的なエグみ」は抑えられている。また宮崎駿およびジブリ作品の影響を特に受けているのこと。絵柄は出水が『ジャンプ』に寄せようとしたが上手くいかなかったため、連載初期には出水が普段イラスト投稿サイトに上げるようなタッチで描かれていた。しかし『ハイキュー!!』や『鬼滅の刃』など、同時期に連載されていた作品の影響で徐々に「ジャンプナイズ（ジャンプ化）」されていったという。  白井は、ジャンプのセオリーである「“友情、努力、勝利”に繋がっていくような話を、ちょっと違う角度から」描いているとしている[8]。担当編集者は、一見『ジャンプ』らしくない作風だが本質的には逆境 や試練を努力・友情で乗り越え勝利をつかもうとする「『ジャンプ』らしい」活劇であるとしている。',
                'release_year' => 2020,
                'director_id' => 6,
                'country_id' => 1,
                'image1' => '/iy08wTsqcWYT2PFTEWFYcxepLeB.jpg',
                'image2' => '',
                'created_at' => Now()
            ],
            [
                'title' => '私ときどきレッサーパンダ',
                'original_title' => 'Turning Red',
                'overview' => 'マジメで頑張り屋の13歳の少女メイが、過保護の母親ミンからの期待と思春期の混乱の間で悩む姿を描く。興味や友達との関係、体に変化が起きる過渡 期…そんな中、メイは興奮するとレッサーパンダに変身する体になってしまう！',
                'release_year' => 2022,
                'director_id' => 6,
                'country_id' => 2,
                'image1' => '/fOy2Jurz9k6RnJnMUMRDAgBwru2.jpg',
                'image2' => '',
                'created_at' => Now()
             ]
            
            
        ]);
    }
}
