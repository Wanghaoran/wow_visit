<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//首页
	public function index()
	{
        //Hot 10
        $this -> load -> model('pichot_model');
        $hot_10 = $this -> pichot_model -> hot10();
        $data = array();
        $data['hot10'] = $hot_10;

        //每个地区的人数
        $this -> load -> model('groupnum_model');
        $group_num = $this -> groupnum_model -> getnum();
        $data['group_num'] = $group_num;



        /*
        //模拟数据
        $data = array();
        $data['hot10'] = array(
            array(
                'group' => 1,
                'pic' => 10,
            ),
            array(
                'group' => 2,
                'pic' => 10,
            ),
        );

        $data['group_num'] = array(
            array(
                'num' => 10,
            ),
            array(
                'num' => 500,
            ),
            array(
                'num' => 0,
            ),
            array(
                'num' => 130,
            ),
            array(
                'num' => 10,
            ),
            array(
                'num' => 10,
            ),
        );

        */


        $map_arr = array(
            1 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '阿兰卡峰林',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '阿兰卡峰林',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '阿兰卡峰林',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '戈尔德隆',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '戈尔德隆',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '戈尔德隆',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '霜火岭',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '霜火岭',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '霜火岭',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '塔拉多',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '塔拉多',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '塔拉多',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '影月谷',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '影月谷',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '影月谷',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
            ),
            2 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '安多哈尔',
                    'description' => '在第三次战争中阿尔萨斯将这个小镇从亡灵的威胁下拯救了出来。但是后来当阿尔萨斯成为天灾的爪牙后，他又毁灭了这里。'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '暴风城',
                    'description' => '联盟五大主城之一，是人类的主城。高等精灵，矮人还有一些来自于西部的神秘的暗夜精灵都居住于此，但总而言之，暴风城是一个人类城市。'
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '藏宝海湾',
                    'description' => '位于东部王国大陆的最南部，这里的繁荣来自于荆棘谷钓鱼大赛，以及发达的地精工程。在这里可以乘坐交通工具少女之爱号去棘齿城。'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '达拉然巨坑',
                    'description' => '达拉然被摧毁后，由罗宁等人修复并为了与天灾对抗，肯瑞托利用魔法将达拉然移往诺森德而形成。'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '腐烂森林',
                    'description' => '这片地区覆盖着浓厚的、污秽的薄雾，这足以使任何胆敢接近的愚蠢的凡人窒息。'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '格雷迈恩之墙',
                    'description' => '吉尔尼斯为了保护人民不受外部的威胁所建立的城墙，并使国家有效地避免来自世界的小冲突。'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '黑曜石森林',
                    'description' => '曾经是红龙的一个营地，但是现在已经被破坏了。之后红龙女王试图重新让这块地方焕发活力，结果还不可知。'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '激流堡',
                    'description' => '艾泽拉斯历史上人族的古都，由阿拉希的军阀建立的巨大要塞 ，大陆各处的人类曾在激流城定居。'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '铁炉堡',
                    'description' => '铁炉堡位于丹莫罗的北部，是铜须矮人的首都，是一座开凿在山腹之中的宏伟之城。'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '乌鸦岭',
                    'description' => '这座鬼镇曾经以殡仪为傲。这里有所殡仪学院，艾泽拉斯最优秀的尸体防腐处理师均毕业于此。遗憾的是，亡灵毁掉了这里。'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '血色修道院',
                    'description' => '原本是洛丹伦王国的骄傲，宗教的朝圣之地，然而在战后成为了疯狂血色十字军信徒出没的地方。'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '阳光树林',
                    'description' => '夜色镇西侧的阳光树林如她的名字一样曾经是一片土壤肥沃、环境优美的度假胜地，现在这里只有令人压抑的幽暗深林和受到诅咒的可怕生物。'
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '银月城',
                    'description' => '奎尔萨拉斯的首都，曾经的高等精灵的家园，坐落在富饶的永歌森林北部，由逐日者王朝领导。'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '幽暗城',
                    'description' => '曾经被圣光所庇护的地方，位于原洛丹伦王国的地下深处，那些皇家陵寝已经被改造成了亡灵的基地。'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '止水湖',
                    'description' => '一个大而深的湖泊，湖畔镇就是沿着它的岸边建起的。'
                ),
            ),
            3 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '埃索达',
                    'description' => '它是将德莱尼人带至艾泽拉斯大陆的纳鲁飞船。虽然现在被困在了蓝秘岛，它仍然是那高贵的种族的家园。'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '艾西娜神殿',
                    'description' => '为了祭奠荒野之灵艾西娜的古老神殿，位于灰谷心脏部位一片林间空地的中间。
                    '
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '奥格瑞玛',
                    'description' => '兽人的主城，位于卡利姆多的北部。为了纪念传奇英雄奥格瑞姆·毁灭之锤，萨尔带领兽人们建立了这座被命名为奥格瑞玛的城市。'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '拉穆卡恒',
                    'description' => '拉穆卡恒的喵形子民是奥丹姆守护者托维尔一族的后裔。尽管他们失去了石头的身体，但保护泰坦秘密的使命仍然留在了他们一成不变的传统中。'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '拉文凯斯雕像',
                    'description' => '为了纪念拉文凯斯——暗夜精灵早期对抗燃烧军团的部队指挥官和领导者所建立的雕像。'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '雷霆崖',
                    'description' => '坐落在莫高雷地区青翠草场的台地上。一度过着游牧生活的牛头人最近建立了这座城市。'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '莫高雷巨门',
                    'description' => '因为联盟的的入侵，牛头人大酋长贝恩下令建立莫高雷巨门，以抵御任何来自联盟的进攻。'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '暮光壁垒',
                    'description' => '囚禁了很多囚犯。还曾囚禁恐怖图腾部落的首领——玛加萨·恐怖图腾，暮光之锤教徒企图得到这位强大萨满的支持。'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '萨格隆',
                    'description' => '原本是卡多雷在上古时期祭祀月亮之神艾露恩的神圣场所，然而现在这片遗迹已经被邪恶的萨特所占领。'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '塞拉摩岛',
                    'description' => '由女法师吉安娜·普罗德摩尔在先知麦迪文的指引之下带领着洛丹伦的逃亡者在卡利姆多东岸建立起来的一座城市，但是被加尔鲁什·地狱咆哮用蓝龙一族的神器所破坏'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '闪光深渊',
                    'description' => '曾经的闪光平原，以地精的沙漠赛道著称,在永恒之井爆炸前曾是一个巨大山谷的一部分，但是在大灾变中被淹没成为一片汪洋'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '泰达希尔',
                    'description' => '达纳苏斯是暗夜精灵最伟大的城市，居住着德鲁伊和艾露恩信徒双方的领袖。虽然暗夜精灵天性平和，但哨兵、古树保护者和战争古树的严密把守令人望而生畏。 '
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '旋云之巅',
                    'description' => '这里不仅仅是一处令人屏息的建筑奇观，更成了军队的据点。风元素领主奥拉基尔的副官和奴仆们在这里集结，意图进攻艾泽拉斯。'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '主宰之剑',
                    'description' => '泰坦的造物——石巨人曾在这里斩杀了上古之神的仆从——滑行者索格斯，不过也有传言主宰之剑钉死的是一位上古之神。'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '坠星村',
                    'description' => '位于冬泉谷西北部的暗夜精灵村庄。'
                ),
            ),
            4 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '冰冠堡垒',
                    'description' => '位于诺森德大陆，坐落在艾泽拉斯世界上最大的冰川—冰冠冰川之上。巫妖王阿尔萨斯就坐在这个冰隙中央的王座上，用他的大脑控制着整个诺森德的天灾军团。'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '达拉然',
                    'description' => '被修复后的达拉然，被移到了晶歌森林上空。在被阿尔萨斯召唤阿克蒙德毁灭之前，紫罗兰城堡一直是整个人类历史上魔法和奥术研究的中心。'
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '丹厄古尔',
                    'description' => '位于灰熊丘陵地图东南,这里可是完成灰熊丘陵全任务的关键地点。'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '夺日者指挥站',
                    'description' => '在大法师艾萨斯·夺日者的努力下，一贯被达拉然拒之门外的部落也获准进入这座城市。他的追随者保卫着以他的名字命名的夺日者圣殿。其首领为艾萨斯·夺日者。'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '风暴神殿',
                    'description' => '风暴神殿在风暴峭壁，这座神殿坐落在几乎最高的山峰上面，这是泰坦制造的地方，仰视这座神殿，偶尔会发现闪电在穹顶闪烁，并不落下。'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '乌特加德城堡',
                    'description' => '乌特加德城堡矗立在嚎风峡湾的考杜斯湖畔。野蛮而又神秘的维库人占据着这座固若金汤的堡垒。这座古代城堡深入地下，因此没有一个联盟或部落的探子能够活着探索出它深处的秘密。'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '复仇港',
                    'description' => '前往幽暗城的港口。复仇港驻扎着由希尔瓦娜斯女王派遣的被遗忘者势力复仇之手。他们想要在诺森德散播最新研制成功的瘟疫病菌来向阿尔萨斯复仇。'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '光芒之柱',
                    'description' => '芙蕾雅的化身正在寻求旅行者的帮助，来防止诅咒教派像源血之柱一样把它破坏。'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '魔枢',
                    'description' => '位于北风苔原西北部的考达拉高地的中心，也是蓝龙军团的老巢。'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '维德瓦堡垒',
                    'description' => '位于峡湾北部被冰雪覆盖的地区，这里的农民为联盟军队提供补给。'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '无畏要塞',
                    'description' => '一座港口城市，它位于土地的南端，是联盟进攻巫妖王的第一个支点。'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '新阿加曼德',
                    'description' => '阿加曼德家族曾是提瑞斯法林地中最富有的家族。投靠天灾军团之后来到了诺森德，这里就是他们新的驻地。'
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '源血之柱',
                    'description' => '原来保护盆地远离亡灵天灾的威胁，然而因为诅咒教徒的破坏，使天灾进入了盆地。'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '造物者圣台',
                    'description' => '造物主圣台位于风暴峭壁北部中心区域，托里姆手下的土灵守卫和洛肯手下的铁矮人们进行着不断的战斗。'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '征服堡',
                    'description' => '部落的领地，知名征服斗兽场就位于此处。'
                ),
            ),
            5 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '半山',
                    'description' => '四风谷最热闹的地方，是一个大型的农民市场。熊猫人的农夫组成了「阡陌客」来进行社交和贸易，每天都会有不同的农夫来市集做生意。'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '格尔桑平台',
                    'description' => '在魔古帝国还存在的时候，一位叫格尔桑的魔古军阀在这里建立了营地，抵抗螳螂妖的某次百年轮回的进攻。'
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '郭莱古厅',
                    'description' => '魔古帝国在锦绣谷的藏宝库，里面藏有数不清的珍宝。不过随着时代变迁，这里已经成为了一片废墟。'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '卡拉克西维斯',
                    'description' => '卡拉克西议会的所在地，这是由螳螂妖长者组成的著名议会，负责确保王权交接的有序进行和螳螂妖社会的稳定发展，在塑造和保护螳螂妖文化方面起着关键作用。'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '白虎寺',
                    'description' => '白虎寺，供奉着至尊天神中的“白虎”雪怒，他代表着北方的力量。'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '坡东村',
                    'description' => '翡翠林最南端的酿酒小镇，村民用本地产的苹果花酿酒。在迷雾散去后，联盟帮助蜜露村村民解决了部落带来的困扰，作为回报，他们接纳了联盟并协助他们建立了落脚点。'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '恐惧之心',
                    'description' => '原本是螳螂妖女皇临朝听政的地方，曾经富丽堂皇的宫殿所在，但随着惧之煞已经腐化了螳螂妖的大女皇，使她日渐疯狂。'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '蜜露村',
                    'description' => '翡翠林最北部的一座熊猫人村庄，以出产蜜酒而闻名。在迷雾散去后，部落帮助蜜露村村民解决了联盟带来的困扰，作为回报，他们接纳了部落并协助他们建立了落脚点。'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '魔古山宫殿',
                    'description' => '魔古山宝库的入口，一座宏伟的宝库中珍藏着关于魔古族伟大成就的冗长纪要和神秘泰坦遗产。'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '蟠龙脊',
                    'description' => '在雷电之王在位时期，为了保护自己的国土不受螳螂妖侵犯，他召集了全国的奴隶建造了这个横跨整个潘达利亚的巨大城墙，使自己的领地和螳螂妖一分为二。'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '朱鹤寺',
                    'description' => '在熊猫人心目中，朱鹤赤精一直是希望的象征。赤精的追随者不惧艰险前往这里，接受着赤精的教导。'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '扎尼维斯',
                    'description' => '在这场螳螂妖内部的灾难中极少数没被污染的琥珀树。在联盟和部落的支援下，卡拉克西占领了这里，把这里作为光复种族的新家园。'
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '雄狮港',
                    'description' => '在迷雾散去的两个月后，联盟的主力部队在瓦里安国王的亲自率领下抵达了卡桑琅东南部以片适宜建港的深水区，并在这里建立了雄狮港，以此为根据地在潘达利亚展开外交攻势，并向当地的部落部队发起攻击。'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '山泽岛',
                    'description' => '原本荒无人烟，是野生云端翔龙的栖息地。在迷雾散去后，山泽氏族的魔古人带着他们的林精爪牙占领了这里，奴役了云端翔龙并进行残忍的实验。'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '青龙寺',
                    'description' => '一座耸立在潘达利亚东海岸上的寺院，是为纪念传说中的熊猫人皇帝少昊于数千年前大败疑之煞而建立的神圣古迹。'
                ),
            ),
            6 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '基尔加丹王座',
                    'description' => '基尔加丹王座坐落于索尔玛北方，在开启黑暗之门之前，古尔丹招集了部落的各个部族，在此喝下玛诺洛斯之血，让他们永远臣服在燃烧军团之下。'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '黑暗之门',
                    'description' => '一扇跨越时空的大门，也是艾泽拉斯历史上三次兽人战争的根源，是整个人兽战争史的见证。'
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '黑暗神殿',
                    'description' => '前身叫做卡拉伯神殿，之后，一支兽人氏族迅速崛起，并开始屠杀这里的德莱尼人。而现在，惨败于阿尔萨斯手下之后的伊利丹成了这片被众神遗弃之地的新主人，'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '长青林',
                    'description' => '塞纳里奥远征军在刀锋山的营地。'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '奥蕾莉亚要塞',
                    'description' => '一个混合了高等精灵和联盟风格的要塞，甚至连其中的领导者也是血精灵上尉。'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '蛮锤要塞',
                    'description' => '由著名的暴风城英雄谷五名英雄雕像之一，矮人英雄库德兰·蛮锤领导的蛮锤部族所建立的联盟要塞。'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '灵魂平原',
                    'description' => '位于纳格兰西南面，中央是沃舒古，这里分布着大量的掉落暗影微粒的空灵爪牙，十分适合旅行者们收集材料。'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '雷神要塞',
                    'description' => '还记得在凄凉之地的雷克萨和他的米莎么？这位兽人和食人魔混血的部落勇士带着米萨来到了外域的刀锋山，在这雷神要塞追溯着自己的身世。'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '基尔索罗堡垒',
                    'description' => '基尔索罗堡垒位于纳格兰的东南方。是暗影议会在纳格兰所建立的堡垒，燃烧军团旗下的暗影议会以此为据点，在沃舒古进行黑暗的仪式，将兽人先祖灵魂的力量转化为虚空行者，为燃烧军团效力。'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '荣耀堡',
                    'description' => '荣耀堡是联盟游客跨越黑暗之门后的第一站，这座前哨基地坐落在地狱火半岛上，由第一批深入德拉诺的联盟精英部队“洛萨之子”的残余力量坚守。'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '萨布拉金',
                    'description' => '由巨魔创立的沼泽城镇。藤蔓和木板支撑的吊桥，使用植物覆盖的简易帐篷，保持着这个种族惯有的部族气息。'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '塞纳里奥庇护所',
                    'description' => '塞纳里奥议会派遣出了一支研究外域生态的队伍。当黑暗之门打开后，这个队伍迅速的增长，并最终取得了自治权。'
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '沙塔斯',
                    'description' => '曾是德拉诺的德莱尼人的都城。在燃烧军团挑动兽人向德莱尼发起战争后，整个城市沦为一片废墟，直到沙塔尔来到这里。'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '斯克提斯',
                    'description' => '阿拉卡鸦人的首都，只能从空中进入，也因此巧妙地躲过了其他种族的注意。以黑风湖为中心，阿拉卡人在这里建立了他们的都市，而阿拉卡人也运用他们的魔法技术创造出许多魔法生物守护着这个地方。'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '中央生态圆顶',
                    'description' => '生态圆顶下的是绿色的森林和缓缓流淌的溪水,让人恍若隔世。'
                ),
            ),



        );
        $data['map_arr'] = $map_arr;


        $this->load->view('index', $data);
	}

    //生成图片并纪录数据
    public function recordpic(){

        $result = array();

        //分享标题
        $title = urldecode('＃艾泽拉斯旅游局＃给“小王爷”选的路线一定要让他不虚此行，我已经选择了一条最具艾泽拉斯风情的路线出来，不过也许少了些“刺激”？你有更好的路线推荐么？让我们带着“小王爷”走一圈？http://v.youku.com/v_show/id_XODE5NjkwMzU2.html');

        //生成文件名
        $file_name = $this->input->post('pic_group_1') . '-' . $this->input->post('pic_name_1') . '-' . $this->input->post('pic_group_2') . '-' . $this->input->post('pic_name_2') . '-' . $this->input->post('pic_group_3') . '-' . $this->input->post('pic_name_3') . '-' . $this->input->post('pic_group_4') . '-' . $this->input->post('pic_name_4') . '.jpg';


        //纪录每张图片选择的数量
        $this -> load -> model('pichot_model');
        $this -> pichot_model -> addnum($this->input->post('pic_group_1'), $this->input->post('pic_name_1'));
        $this -> pichot_model -> addnum($this->input->post('pic_group_2'), $this->input->post('pic_name_2'));
        $this -> pichot_model -> addnum($this->input->post('pic_group_3'), $this->input->post('pic_name_3'));
        $this -> pichot_model -> addnum($this->input->post('pic_group_4'), $this->input->post('pic_name_4'));

        //纪录每个地区选择数
        $this -> load -> model('groupnum_model');
        $this -> groupnum_model -> addnum($this->input->post('pic_group_1'));
        $this -> groupnum_model -> addnum($this->input->post('pic_group_2'));
        $this -> groupnum_model -> addnum($this->input->post('pic_group_3'));
        $this -> groupnum_model -> addnum($this->input->post('pic_group_4'));


        //检测文件是否存在，如存在则无需创建
        if(file_exists('./upload/' . $file_name)){

            $result['state'] = 'success';
            $result['path'] = urldecode($this->config->base_url() . 'upload/' . $file_name);
            $result['sinaurl'] = 'http://service.weibo.com/share/share.php?url=&appkey=186754806&language=zh_cn&title=' . $title . '&source=&sourceUrl=&ralateUid=&message=&uids=&pic=' . $result['path'] . '&searchPic=false&content=';

            echo json_encode($result);
            return;

        }




        //创建大画布
        $img = imagecreatetruecolor(1024, 3072);
        //分别获取4张图片$this->config->base_url()/static/place/1/2-b.jpg
        $form_img1 = imagecreatefromjpeg($this->config->base_url() . '/static/place2/' . $this->input->post('pic_group_1') . '/' . $this->input->post('pic_name_1') . '.jpg');
        $form_img2 = imagecreatefromjpeg($this->config->base_url() . '/static/place2/' . $this->input->post('pic_group_2') . '/' . $this->input->post('pic_name_2') . '.jpg');
        $form_img3 = imagecreatefromjpeg($this->config->base_url() . '/static/place2/' . $this->input->post('pic_group_3') . '/' . $this->input->post('pic_name_3') . '.jpg');
        $form_img4 = imagecreatefromjpeg($this->config->base_url() . '/static/place2/' . $this->input->post('pic_group_4') . '/' . $this->input->post('pic_name_4') . '.jpg');

        //合并图片
        imagecopy($img, $form_img1, 0, 0, 0, 0, 1366, 768);
        imagecopy($img, $form_img2, 0, 768, 0, 0, 1366, 768);
        imagecopy($img, $form_img3, 0, 1536, 0, 0, 1366, 768);
        imagecopy($img, $form_img4, 0, 2304, 0, 0, 1366, 768);


        //生成图片
        if(imagejpeg($img, './upload/' . $file_name)){

            $result['state'] = 'success';
            $result['path'] = urldecode($this->config->base_url() . 'upload/' . $file_name);
            $result['sinaurl'] = 'http://service.weibo.com/share/share.php?url=&appkey=186754806&language=zh_cn&title=' . $title . '&source=&sourceUrl=&ralateUid=&message=&uids=&pic=' . $result['path'] . '&searchPic=false&content=';

        }else{
            $result['state'] = 'error';
            $result['message'] = '系统错误，请稍后再试！';
        }

        imagedestroy($img);


        echo json_encode($result);
        return;

    }

    //读取地图
    public function checkmap(){

        $map_arr = array(
            1 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '阿兰卡峰林',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '阿兰卡峰林',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '阿兰卡峰林',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '戈尔德隆',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '戈尔德隆',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '戈尔德隆',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '霜火岭',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '霜火岭',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '霜火岭',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '塔拉多',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '塔拉多',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '塔拉多',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '影月谷',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '影月谷',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '影月谷',
                    'description' => '神秘而美丽的德拉诺等待你的探索！'
                ),
            ),
            2 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '安多哈尔',
                    'description' => '在第三次战争中阿尔萨斯将这个小镇从亡灵的威胁下拯救了出来。但是后来当阿尔萨斯成为天灾的爪牙后，他又毁灭了这里。'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '暴风城',
                    'description' => '联盟五大主城之一，是人类的主城。高等精灵，矮人还有一些来自于西部的神秘的暗夜精灵都居住于此，但总而言之，暴风城是一个人类城市。'
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '藏宝海湾',
                    'description' => '位于东部王国大陆的最南部，这里的繁荣来自于荆棘谷钓鱼大赛，以及发达的地精工程。在这里可以乘坐交通工具少女之爱号去棘齿城。'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '达拉然巨坑',
                    'description' => '达拉然被摧毁后，由罗宁等人修复并为了与天灾对抗，肯瑞托利用魔法将达拉然移往诺森德而形成。'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '腐烂森林',
                    'description' => '这片地区覆盖着浓厚的、污秽的薄雾，这足以使任何胆敢接近的愚蠢的凡人窒息。'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '格雷迈恩之墙',
                    'description' => '吉尔尼斯为了保护人民不受外部的威胁所建立的城墙，并使国家有效地避免来自世界的小冲突。'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '黑曜石森林',
                    'description' => '曾经是红龙的一个营地，但是现在已经被破坏了。之后红龙女王试图重新让这块地方焕发活力，结果还不可知。'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '激流堡',
                    'description' => '艾泽拉斯历史上人族的古都，由阿拉希的军阀建立的巨大要塞 ，大陆各处的人类曾在激流城定居。'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '铁炉堡',
                    'description' => '铁炉堡位于丹莫罗的北部，是铜须矮人的首都，是一座开凿在山腹之中的宏伟之城。'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '乌鸦岭',
                    'description' => '这座鬼镇曾经以殡仪为傲。这里有所殡仪学院，艾泽拉斯最优秀的尸体防腐处理师均毕业于此。遗憾的是，亡灵毁掉了这里。'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '血色修道院',
                    'description' => '原本是洛丹伦王国的骄傲，宗教的朝圣之地，然而在战后成为了疯狂血色十字军信徒出没的地方。'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '阳光树林',
                    'description' => '夜色镇西侧的阳光树林如她的名字一样曾经是一片土壤肥沃、环境优美的度假胜地，现在这里只有令人压抑的幽暗深林和受到诅咒的可怕生物。'
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '银月城',
                    'description' => '奎尔萨拉斯的首都，曾经的高等精灵的家园，坐落在富饶的永歌森林北部，由逐日者王朝领导。'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '幽暗城',
                    'description' => '曾经被圣光所庇护的地方，位于原洛丹伦王国的地下深处，那些皇家陵寝已经被改造成了亡灵的基地。'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '止水湖',
                    'description' => '一个大而深的湖泊，湖畔镇就是沿着它的岸边建起的。'
                ),
            ),
            3 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '埃索达',
                    'description' => '它是将德莱尼人带至艾泽拉斯大陆的纳鲁飞船。虽然现在被困在了蓝秘岛，它仍然是那高贵的种族的家园。'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '艾西娜神殿',
                    'description' => '为了祭奠荒野之灵艾西娜的古老神殿，位于灰谷心脏部位一片林间空地的中间。
                    '
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '奥格瑞玛',
                    'description' => '兽人的主城，位于卡利姆多的北部。为了纪念传奇英雄奥格瑞姆·毁灭之锤，萨尔带领兽人们建立了这座被命名为奥格瑞玛的城市。'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '拉穆卡恒',
                    'description' => '拉穆卡恒的喵形子民是奥丹姆守护者托维尔一族的后裔。尽管他们失去了石头的身体，但保护泰坦秘密的使命仍然留在了他们一成不变的传统中。'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '拉文凯斯雕像',
                    'description' => '为了纪念拉文凯斯——暗夜精灵早期对抗燃烧军团的部队指挥官和领导者所建立的雕像。'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '雷霆崖',
                    'description' => '坐落在莫高雷地区青翠草场的台地上。一度过着游牧生活的牛头人最近建立了这座城市。'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '莫高雷巨门',
                    'description' => '因为联盟的的入侵，牛头人大酋长贝恩下令建立莫高雷巨门，以抵御任何来自联盟的进攻。'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '暮光壁垒',
                    'description' => '囚禁了很多囚犯。还曾囚禁恐怖图腾部落的首领——玛加萨·恐怖图腾，暮光之锤教徒企图得到这位强大萨满的支持。'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '萨格隆',
                    'description' => '原本是卡多雷在上古时期祭祀月亮之神艾露恩的神圣场所，然而现在这片遗迹已经被邪恶的萨特所占领。'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '塞拉摩岛',
                    'description' => '由女法师吉安娜·普罗德摩尔在先知麦迪文的指引之下带领着洛丹伦的逃亡者在卡利姆多东岸建立起来的一座城市，但是被加尔鲁什·地狱咆哮用蓝龙一族的神器所破坏'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '闪光深渊',
                    'description' => '曾经的闪光平原，以地精的沙漠赛道著称,在永恒之井爆炸前曾是一个巨大山谷的一部分，但是在大灾变中被淹没成为一片汪洋'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '泰达希尔',
                    'description' => '达纳苏斯是暗夜精灵最伟大的城市，居住着德鲁伊和艾露恩信徒双方的领袖。虽然暗夜精灵天性平和，但哨兵、古树保护者和战争古树的严密把守令人望而生畏。 '
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '旋云之巅',
                    'description' => '这里不仅仅是一处令人屏息的建筑奇观，更成了军队的据点。风元素领主奥拉基尔的副官和奴仆们在这里集结，意图进攻艾泽拉斯。'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '主宰之剑',
                    'description' => '泰坦的造物——石巨人曾在这里斩杀了上古之神的仆从——滑行者索格斯，不过也有传言主宰之剑钉死的是一位上古之神。'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '坠星村',
                    'description' => '位于冬泉谷西北部的暗夜精灵村庄。'
                ),
            ),
            4 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '冰冠堡垒',
                    'description' => '位于诺森德大陆，坐落在艾泽拉斯世界上最大的冰川—冰冠冰川之上。巫妖王阿尔萨斯就坐在这个冰隙中央的王座上，用他的大脑控制着整个诺森德的天灾军团。'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '达拉然',
                    'description' => '被修复后的达拉然，被移到了晶歌森林上空。在被阿尔萨斯召唤阿克蒙德毁灭之前，紫罗兰城堡一直是整个人类历史上魔法和奥术研究的中心。'
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '丹厄古尔',
                    'description' => '位于灰熊丘陵地图东南,这里可是完成灰熊丘陵全任务的关键地点。'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '夺日者指挥站',
                    'description' => '在大法师艾萨斯·夺日者的努力下，一贯被达拉然拒之门外的部落也获准进入这座城市。他的追随者保卫着以他的名字命名的夺日者圣殿。其首领为艾萨斯·夺日者。'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '风暴神殿',
                    'description' => '风暴神殿在风暴峭壁，这座神殿坐落在几乎最高的山峰上面，这是泰坦制造的地方，仰视这座神殿，偶尔会发现闪电在穹顶闪烁，并不落下。'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '乌特加德城堡',
                    'description' => '乌特加德城堡矗立在嚎风峡湾的考杜斯湖畔。野蛮而又神秘的维库人占据着这座固若金汤的堡垒。这座古代城堡深入地下，因此没有一个联盟或部落的探子能够活着探索出它深处的秘密。'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '复仇港',
                    'description' => '前往幽暗城的港口。复仇港驻扎着由希尔瓦娜斯女王派遣的被遗忘者势力复仇之手。他们想要在诺森德散播最新研制成功的瘟疫病菌来向阿尔萨斯复仇。'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '光芒之柱',
                    'description' => '芙蕾雅的化身正在寻求旅行者的帮助，来防止诅咒教派像源血之柱一样把它破坏。'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '魔枢',
                    'description' => '位于北风苔原西北部的考达拉高地的中心，也是蓝龙军团的老巢。'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '维德瓦堡垒',
                    'description' => '位于峡湾北部被冰雪覆盖的地区，这里的农民为联盟军队提供补给。'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '无畏要塞',
                    'description' => '一座港口城市，它位于土地的南端，是联盟进攻巫妖王的第一个支点。'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '新阿加曼德',
                    'description' => '阿加曼德家族曾是提瑞斯法林地中最富有的家族。投靠天灾军团之后来到了诺森德，这里就是他们新的驻地。'
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '源血之柱',
                    'description' => '原来保护盆地远离亡灵天灾的威胁，然而因为诅咒教徒的破坏，使天灾进入了盆地。'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '造物者圣台',
                    'description' => '造物主圣台位于风暴峭壁北部中心区域，托里姆手下的土灵守卫和洛肯手下的铁矮人们进行着不断的战斗。'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '征服堡',
                    'description' => '部落的领地，知名征服斗兽场就位于此处。'
                ),
            ),
            5 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '半山',
                    'description' => '四风谷最热闹的地方，是一个大型的农民市场。熊猫人的农夫组成了「阡陌客」来进行社交和贸易，每天都会有不同的农夫来市集做生意。'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '格尔桑平台',
                    'description' => '在魔古帝国还存在的时候，一位叫格尔桑的魔古军阀在这里建立了营地，抵抗螳螂妖的某次百年轮回的进攻。'
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '郭莱古厅',
                    'description' => '魔古帝国在锦绣谷的藏宝库，里面藏有数不清的珍宝。不过随着时代变迁，这里已经成为了一片废墟。'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '卡拉克西维斯',
                    'description' => '卡拉克西议会的所在地，这是由螳螂妖长者组成的著名议会，负责确保王权交接的有序进行和螳螂妖社会的稳定发展，在塑造和保护螳螂妖文化方面起着关键作用。'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '白虎寺',
                    'description' => '白虎寺，供奉着至尊天神中的“白虎”雪怒，他代表着北方的力量。'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '坡东村',
                    'description' => '翡翠林最南端的酿酒小镇，村民用本地产的苹果花酿酒。在迷雾散去后，联盟帮助蜜露村村民解决了部落带来的困扰，作为回报，他们接纳了联盟并协助他们建立了落脚点。'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '恐惧之心',
                    'description' => '原本是螳螂妖女皇临朝听政的地方，曾经富丽堂皇的宫殿所在，但随着惧之煞已经腐化了螳螂妖的大女皇，使她日渐疯狂。'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '蜜露村',
                    'description' => '翡翠林最北部的一座熊猫人村庄，以出产蜜酒而闻名。在迷雾散去后，部落帮助蜜露村村民解决了联盟带来的困扰，作为回报，他们接纳了部落并协助他们建立了落脚点。'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '魔古山宫殿',
                    'description' => '魔古山宝库的入口，一座宏伟的宝库中珍藏着关于魔古族伟大成就的冗长纪要和神秘泰坦遗产。'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '蟠龙脊',
                    'description' => '在雷电之王在位时期，为了保护自己的国土不受螳螂妖侵犯，他召集了全国的奴隶建造了这个横跨整个潘达利亚的巨大城墙，使自己的领地和螳螂妖一分为二。'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '朱鹤寺',
                    'description' => '在熊猫人心目中，朱鹤赤精一直是希望的象征。赤精的追随者不惧艰险前往这里，接受着赤精的教导。'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '扎尼维斯',
                    'description' => '在这场螳螂妖内部的灾难中极少数没被污染的琥珀树。在联盟和部落的支援下，卡拉克西占领了这里，把这里作为光复种族的新家园。'
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '雄狮港',
                    'description' => '在迷雾散去的两个月后，联盟的主力部队在瓦里安国王的亲自率领下抵达了卡桑琅东南部以片适宜建港的深水区，并在这里建立了雄狮港，以此为根据地在潘达利亚展开外交攻势，并向当地的部落部队发起攻击。'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '山泽岛',
                    'description' => '原本荒无人烟，是野生云端翔龙的栖息地。在迷雾散去后，山泽氏族的魔古人带着他们的林精爪牙占领了这里，奴役了云端翔龙并进行残忍的实验。'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '青龙寺',
                    'description' => '一座耸立在潘达利亚东海岸上的寺院，是为纪念传说中的熊猫人皇帝少昊于数千年前大败疑之煞而建立的神圣古迹。'
                ),
            ),
            6 => array(
                1 => array(
                    'pic' => '1',
                    'name' => '基尔加丹王座',
                    'description' => '基尔加丹王座坐落于索尔玛北方，在开启黑暗之门之前，古尔丹招集了部落的各个部族，在此喝下玛诺洛斯之血，让他们永远臣服在燃烧军团之下。'
                ),
                2 => array(
                    'pic' => '2',
                    'name' => '黑暗之门',
                    'description' => '一扇跨越时空的大门，也是艾泽拉斯历史上三次兽人战争的根源，是整个人兽战争史的见证。'
                ),
                3 => array(
                    'pic' => '3',
                    'name' => '黑暗神殿',
                    'description' => '前身叫做卡拉伯神殿，之后，一支兽人氏族迅速崛起，并开始屠杀这里的德莱尼人。而现在，惨败于阿尔萨斯手下之后的伊利丹成了这片被众神遗弃之地的新主人，'
                ),
                4 => array(
                    'pic' => '4',
                    'name' => '长青林',
                    'description' => '塞纳里奥远征军在刀锋山的营地。'
                ),
                5 => array(
                    'pic' => '5',
                    'name' => '奥蕾莉亚要塞',
                    'description' => '一个混合了高等精灵和联盟风格的要塞，甚至连其中的领导者也是血精灵上尉。'
                ),
                6 => array(
                    'pic' => '6',
                    'name' => '蛮锤要塞',
                    'description' => '由著名的暴风城英雄谷五名英雄雕像之一，矮人英雄库德兰·蛮锤领导的蛮锤部族所建立的联盟要塞。'
                ),
                7 => array(
                    'pic' => '7',
                    'name' => '灵魂平原',
                    'description' => '位于纳格兰西南面，中央是沃舒古，这里分布着大量的掉落暗影微粒的空灵爪牙，十分适合旅行者们收集材料。'
                ),
                8 => array(
                    'pic' => '8',
                    'name' => '雷神要塞',
                    'description' => '还记得在凄凉之地的雷克萨和他的米莎么？这位兽人和食人魔混血的部落勇士带着米萨来到了外域的刀锋山，在这雷神要塞追溯着自己的身世。'
                ),
                9 => array(
                    'pic' => '9',
                    'name' => '基尔索罗堡垒',
                    'description' => '基尔索罗堡垒位于纳格兰的东南方。是暗影议会在纳格兰所建立的堡垒，燃烧军团旗下的暗影议会以此为据点，在沃舒古进行黑暗的仪式，将兽人先祖灵魂的力量转化为虚空行者，为燃烧军团效力。'
                ),
                10 => array(
                    'pic' => '10',
                    'name' => '荣耀堡',
                    'description' => '荣耀堡是联盟游客跨越黑暗之门后的第一站，这座前哨基地坐落在地狱火半岛上，由第一批深入德拉诺的联盟精英部队“洛萨之子”的残余力量坚守。'
                ),
                11 => array(
                    'pic' => '11',
                    'name' => '萨布拉金',
                    'description' => '由巨魔创立的沼泽城镇。藤蔓和木板支撑的吊桥，使用植物覆盖的简易帐篷，保持着这个种族惯有的部族气息。'
                ),
                12 => array(
                    'pic' => '12',
                    'name' => '塞纳里奥庇护所',
                    'description' => '塞纳里奥议会派遣出了一支研究外域生态的队伍。当黑暗之门打开后，这个队伍迅速的增长，并最终取得了自治权。'
                ),
                13 => array(
                    'pic' => '13',
                    'name' => '沙塔斯',
                    'description' => '曾是德拉诺的德莱尼人的都城。在燃烧军团挑动兽人向德莱尼发起战争后，整个城市沦为一片废墟，直到沙塔尔来到这里。'
                ),
                14 => array(
                    'pic' => '14',
                    'name' => '斯克提斯',
                    'description' => '阿拉卡鸦人的首都，只能从空中进入，也因此巧妙地躲过了其他种族的注意。以黑风湖为中心，阿拉卡人在这里建立了他们的都市，而阿拉卡人也运用他们的魔法技术创造出许多魔法生物守护着这个地方。'
                ),
                15 => array(
                    'pic' => '15',
                    'name' => '中央生态圆顶',
                    'description' => '生态圆顶下的是绿色的森林和缓缓流淌的溪水,让人恍若隔世。'
                ),
            ),



        );

        $value = $this->input->post('value');

        echo json_encode($map_arr[$value]);

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */