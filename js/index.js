/**
 * haiifeng.com
 * author: haiifeng
 * des:this is my blog
 * link:haiifeng.com
 * email:haiifenger@gmail.com
 */

//欢迎访问haiifeng.com
console.log("\n %c haiifeng-Cute4U\ | welcome to http://haiifeng.com:7001/ %c \n\n %c😊Something that stays in your mind will someday spring up in your life. \n", "font-family:\'Microsoft YaHei\',\'SF Pro Display\',Roboto,Noto,Arial,\'PingFang SC\',sans-serif;color:#fff;background: linear-gradient(to right , #7A88FF, #d27aff);padding:5px;border-radius: 10px;", "background:#fff;", "background:#fff;");

var Cute4u = function () {
    this.themeName = 'cute4u';
    this.aPlayer = null;

    this.init = function () {
        this.aPlayer = this.music();
        this.back2Top();
        return this;
    };

    this.log = function () {
        console.log(...arguments);
    };

    //初始化播放器
    this.music = function () {
        var app = new APlayer({
            container: document.getElementById('aplayer'),
            mini: true,
            autoplay: false,
            theme: '#FADFA3',
            loop: 'all',
            order: 'random',
            preload: 'auto',
            volume: 0.7,
            mutex: true,
            listFolded: true,
            listMaxHeight: 90,
            lrcType: 3,
            fixed: true,
            audio: [{
                    name: '卡哇伊',
                    artist: '卡哇伊',
                    url: 'http://qfz8p0qur.hb-bkt.clouddn.com/%E3%81%8B%E3%82%8F%E3%81%84%E3%81%84%E3%81%B2%E3%81%A8-CHAI.mp3',
                    cover: 'http://qfz8p0qur.hb-bkt.clouddn.com/withyou.png',
                    lrc: 'http://qfz8p0qur.hb-bkt.clouddn.com/%E3%81%8B%E3%82%8F%E3%81%84%E3%81%84%E3%81%B2%E3%81%A8-CHAI.lrc',
                    theme: 'orange'
                },
                {
                    name: '医生',
                    artist: '许嵩',
                    url: 'http://qfz8p0qur.hb-bkt.clouddn.com/%E5%8C%BB%E7%94%9F.mp3',
                    cover: 'http://qfz8p0qur.hb-bkt.clouddn.com/gintoki.gif',
                    lrc: 'http://qfz8p0qur.hb-bkt.clouddn.com/%E5%8C%BB%E7%94%9F.lrc',
                    theme: '#46718b'
                }
            ]
        });
        app.lrc.hide();
        return app;
    };

    this.back2Top = function () {
        var toTop = document.querySelector('#toTop');
        document.addEventListener('scroll', function () {
            if (utils.getScrollPosition().y > 600) {
                toTop.style.display = 'flex'
            } else {
                toTop.style.display = 'none'
            }
        });
        toTop.addEventListener('click', function () {
            utils.scrollToTop();
        });
    };

    return this;
};

var cute4u = new Cute4u().init();;