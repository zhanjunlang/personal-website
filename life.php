<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>生活</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="js/echarts.min.js"></script>
    <script src="js/vintage.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="icon" href="pictures/icon.png">
    <link rel="stylesheet" href="css/style.css" />
</head>
<style>
* {
    font-family: "Microsoft YaHei";
}

div#header h2 {
    text-align: center;
}

div#navi ul li a {
    font-family: "Microsoft YaHei";
    font-size: 15px;
    color: black;
    padding: 5px 12px 5px 12px;
    text-decoration: none;
}

div#navi ul li a:hover {
    color: rgb(185, 176, 180);
}
</style>

<body>
    <div id="header">
        <h2 style=";"><img src="pictures/icon.png" style="height: 30px;padding-bottom: 5px;padding-right: 10px"><a href="zhan.html" style="text-decoration: none;color:rgba(66, 52, 58, 0.28);font-family:'Microsoft YaHei';">Long Mr.Zhan的个人空间</a></h2>
    </div>
    <div id="navi" class="container">
        <ul class="nav nav-tabs nav-justified">
            <li><a href="project.html">项目</a></li>
            <li><a href="note.html">技术笔记</a></li>
            <li><a href="game.html">游戏评测</a></li>
            <li><a href="movie.html">电影</a></li>
            <li><a href="life.php">生活</a></li>
            <li><a href="download.html">资源</a></li>
        </ul>
    </div>
    <div style="height: 300px;margin:10px 140px 10px 140px;border-radius: 10px;background-color: rgba(30, 30, 33, 0.75);color: #CEAAAA">
        <img src="pictures/avatar.jpg" class="img-rounded" style="height: 150px;float: left;margin:50px 20px 10px 10%">
        <div style="height: 150px;width:450px;margin:50px 10px 10px 10px;float: left;">
            <p style="font-size: 30px;border-bottom-style: solid;">站主简介</p>
            詹俊朗，1995年生人，上海交通大学信息工程专业在读研究生，游戏动漫爱好者，目前专注于机器学习领域，对前端技术亦非常感兴趣。
            <ul style="margin-top: 20px;">
                <li>NBA主队：骑士，灰熊</li>
                <li>英超主队：热刺</li>
                <li>喜欢明星：广末凉子，桥本奈奈未，梁朝伟，陈奕迅</li>
            </ul>
        </div>
        <div style="float: left;border-left-style: solid;height: 300px">
            <p style="margin: 10px 10px 10px 40%;text-align: center;font-size: 20px">我的技能</p>
            <div id="main" style="width:260px;height:240px;margin:0px 10px 10px 20%;"></div>
        </div>
    </div>
    <div style="margin:10px 140px 10px 140px;">
        <h2 style="color:#565658">动态</h2>
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #565658;color: #CEAAAA;">
                发表于2017/7/23
            </div>
            <div class="panel-body" style="overflow: auto;">
                新装备昨天到手了，神舟战神z7-kp7gt，正式成为船员。15.6寸，i7 7700HQ，GTX1060 6G，128SSD+1T，8G内存，1080P ips屏，6999的价格应该是同配置中最便宜的了。到手以后真的蛮满意，巫师特效全开无压力，尼尔小姐姐在安装中。散热也很强劲。当然缺点就是风扇声音过大了，好在电脑本身有控制风扇的驱动，实际使用中觉得128ssd还是不够，好在还有升级的空间。一向被诟病的颜值意外地很令我满意，红黑主题，背面很有线条感，低调而不失奢华。可变色的背光键盘很炫酷，外形很有厚重感，估计整机有4kg。配套装备也在到位中。电脑底下的5风扇散热器是保持低温的好伙伴，键盘膜，电脑包还在配送之中。
                <br> PS:键盘膜和背包已到，好评
                <div class="row">
                    <div class="col-sm-6 col-md-2">
                        <a href="pictures/z71.jpg" class="thumbnail" target="_blank">
                            <img src="pictures/z71.jpg"
                            alt="通用的占位符缩略图">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="pictures/z72.jpg" class="thumbnail" target="_blank">
                            <img src="pictures/z72.jpg"
                            alt="通用的占位符缩略图">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="pictures/z73.jpg" class="thumbnail" target="_blank">
                            <img src="pictures/z73.jpg"
                            alt="通用的占位符缩略图">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="pictures/z74.jpg" class="thumbnail" target="_blank">
                            <img src="pictures/z74.jpg"
                            alt="通用的占位符缩略图">
                        </a>
                    </div>
                </div>
                <?php 
                $file=fopen("php/comment.csv", "r");
                while($data=fgetcsv($file)){
                    $id=$data[0];
                    if($id==1){
                        echo "<p style=\"font-style: italic;\">" . $data[2] . "----------来自" . $data[1] . "的评论</p>";
                    }
                }
                 ?>
                <button class="comment">我要评论</button>
                <div class="comment-text" id="1" style="height:100px;margin-top: 10px;">
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nickname">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="comment"></textarea>
                        </div>
                    </form>
                    <button class="send" style="margin-bottom: 5px;">发表</button>
                    <button class="cancel" style="margin-bottom: 5px;">取消</button>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #565658;color: #CEAAAA;">
                发表于2017/09/02
            </div>
            <div class="panel-body" style="overflow: auto;">
                Bonjour paris. Nouvelle vie. Vas-y!
                <div class="row">
                    <div class="col-sm-6 col-md-2">
                        <a href="pictures/fr1.jpg" class="thumbnail" target="_blank">
                            <img src="pictures/fr1.jpg"
                            alt="通用的占位符缩略图">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="pictures/fr2.jpg" class="thumbnail" target="_blank">
                            <img src="pictures/fr2.jpg"
                            alt="通用的占位符缩略图">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="pictures/fr3.jpg" class="thumbnail" target="_blank">
                            <img src="pictures/fr3.jpg"
                            alt="通用的占位符缩略图">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="pictures/fr4.jpg" class="thumbnail" target="_blank">
                            <img src="pictures/fr4.jpg"
                            alt="通用的占位符缩略图">
                        </a>
                    </div>
                </div>
                <?php 
                $file=fopen("php/comment.csv", "r");
                while($data=fgetcsv($file)){
                    $id=$data[0];
                    if($id==2){
                        echo "<p style=\"font-style: italic;\">" . $data[2] . "----------来自" . $data[1] . "的评论</p>";
                    }
                }
                 ?>
                <button class="comment">我要评论</button>
                <div class="comment-text" id="2" style="height:100px;margin-top: 10px;">
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nickname">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="comment"></textarea>
                        </div>
                    </form>
                    <button class="send" style="margin-bottom: 5px;">发表</button>
                    <button class="cancel" style="margin-bottom: 5px;">取消</button>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: rgba(30, 30, 33, 0.75);width:100%;height:90px;bottom: 0px;">
        <p style="color:#D6B9B9;text-align: center;padding-top: 20px">邮箱：zhanjunlang@sina.com</p>
    </div>
</body>
<script>
$(document).ready(function() {
    $('input.form-control').focus(function(event) {
        if ($(this).val() == '请输入您的昵称') {
            $(this).val('');
        }
    });
    $('textarea').focus(function(event) {
        if($(this).val()=="请输入您的评论"){
            $(this).val("");
        }
    });
    $('div.comment-text').hide();
    $('button.comment').click(function(event) {
        $(this).next().show();
        $(this).next().find('input.form-control').val('请输入您的昵称')
        $(this).next().find('textarea.form-control').val('请输入您的评论');
    });
    $('button.send').click(function(event) {
        $(this).parent().hide();
        var comment = $(this).prev().find('textarea.form-control').val();
        var nickname = $(this).prev().find('input').val();
        var insert = '<p style="font-style: italic;">' + comment + '----------来自' + nickname + '的评论' + '</p>';
        var id = $(this).parent().attr("id");
        $(this).parent().prev().before(insert);
        $.ajax({
            url: 'php/update.php',
            type: 'POST',
            data: {id:id,
                    nickname:nickname,
                    comment:comment
                },
        })
        .done(function() {
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
    });

    $('button.cancel').click(function(event) {
        $(this).parent().hide();
    });
});
</script>
<script>
var myChart = echarts.init(document.getElementById('main'), 'vintage');
var option = {
    tooltip: {},

    radar: {
        radius: '60%',
        splitNumber: 8,
        axisLine: {
            lineStyle: {
                color: '#fff', //项目字体
                opacity: .2
            }
        },
        splitLine: {
            lineStyle: {
                color: '#fff',
                opacity: .2
            }
        },
        splitArea: {
            areaStyle: {
                color: 'rgba(127,95,132,.3)', //雷达板颜色
                opacity: 1,
                shadowBlur: 45,
                shadowColor: 'rgba(0,0,0,.5)',
                shadowOffsetX: 0,
                shadowOffsetY: 15,
            }
        },
        indicator: [{
            name: '法语',
            max: 10
        }, {
            name: '机器学习',
            max: 10
        }, {
            name: 'VBA',
            max: 10
        }, {
            name: 'Python',
            max: 10
        }, {
            name: '前端',
            max: 10
        }, {
            name: '可视化',
            max: 10
        }]
    },
    series: [{
        name: '能力',
        type: 'radar',
        symbolSize: 0,
        areaStyle: {
            normal: {
                shadowBlur: 13,
                shadowColor: 'rgba(0,0,0,.2)',
                shadowOffsetX: 0,
                shadowOffsetY: 10,
                opacity: 0.5
            }
        },
        data: [{
            value: [6.5, 6, 7, 6.5, 3, 3],
            name: 'Ability',
        }]
    }],
    color: ['#ef4b4c'], //雷达颜色
    backgroundColor: {
        type: 'radial',
        x: 0.4,
        y: 0.4,
        r: 0.35,
        colorStops: [{
            offset: 0,
            color: 'rgb(139, 179, 110)' // 0% 处的颜色
        }, {
            offset: .4,
            color: 'rgb(139, 179, 120)' // 100% 处的颜色
        }, {
            offset: 1,
            color: 'rgb(139, 179, 150)' // 100% 处的颜色
        }],
        globalCoord: false // 缺省为 false
    }
};
myChart.setOption(option);
</script>

</html>