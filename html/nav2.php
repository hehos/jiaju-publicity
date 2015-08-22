<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/my.css"/>

    <script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
    <script>
        var jq = jQuery.noConflict();
    </script>
</head>
<body class="publicity">
<?php include "header.php" ?>

<div class="container">
    <div class="cont-nav">
        <div class="item on">
            <a href="nav1.php">
                <img src="../img/nav-1.png" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="nav2.php">
                <img src="../img/nav-2-on.png" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="nav3.php">
                <img src="../img/nav-3.png" alt=""/>
            </a>
        </div>
    </div>
    <div class="head-form from2">

        <div class="form-cont">
            <p class="current-num">今日已有<em>888</em>业主申请，本月申请人数已达<em>87878</em></p>

            <form action="">
                <input type="text" placeholder="您的称呼"/>
                <input type="text" placeholder="手机号码"/>
                <select name="zxtype">
                    <option value="新房装修" selected="">新房装修</option>
                    <option value="旧房翻新">旧房翻新</option>
                    <option value="办公室装修">办公室装修</option>
                    <option value="店铺装修">店铺装修</option>
                    <option value="餐厅装修">餐厅装修</option>
                    <option value="酒店装修">酒店装修</option>
                    <option value="其他类型">其他类型</option>
                </select>
                <textarea name="" rows="4"></textarea>
                <button type="submit">免费申请</button>
            </form>

            <p class="call-hintTxt">拨打热线，快速了解九正家居装修</p>

            <p class="call"><img src="../img/call.png" alt=""/>400-6464-001</p>
        </div>
    </div>

    <img src="../img/2-pk.png" alt=""/>

    <div class="new-apply">
        <div>
            <div class="title">
                <h2>最新申请装修服务</h2>
                <span class="type-tabs"><a href="" class="tab">家装</a><a href="" class="tab">工装</a></span>
            </div>
            <table class="publicity-table">
                <tr>
                    <th class="col1">项目类型</th>
                    <th class="col1">装修预算</th>
                    <th class="col1">建筑面积</th>
                    <th class="col1">装修类型</th>
                    <th class="col5">装修情况</th>
                    <th class="col6">发布时间</th>
                </tr>
            </table>
            <div id="scrolldiv" style="overflow: hidden;height: 310px;position:relative;">
                <div id="scrolldiv1">
                    <table class="publicity-table">
                        <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">130㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4266363.html" target="_blank">成都市成华区九龙仓御园住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">8-12万</td>
                            <td class="col1">108㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4265968.html" target="_blank">成都市成华区优品道上东区住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">88㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4240368.html" target="_blank">成都市高新区中建.桐梓林壹号住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">89㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4225048.html" target="_blank">成都市成华区优品尚东住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">89㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4223760.html" target="_blank">成都市成华区优品尚东住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">120㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4164305.html" target="_blank">成都市高新区保利百合花园住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">18-25万</td>
                            <td class="col1">210㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4244621.html" target="_blank">成都市高新区司南住宅公寓装修</a> <!--<b>(急)</b>--></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">69㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4249259.html" target="_blank">成都市高新区成都外国语学校附近住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">99㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4260880.html" target="_blank">成都市双流县北京城建龙越湾住宅公寓装修</a> <!--<b>(急)</b>--></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3万以下</td>
                            <td class="col1">80㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4262271.html" target="_blank">成都市金堂县上岛住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">5-8万</td>
                            <td class="col1">93㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4262179.html" target="_blank">成都市龙泉驿区凯德卓锦万黛住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">5-8万</td>
                            <td class="col1">94㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4262877.html" target="_blank">成都市龙泉驿区凯德卓锦万黛住宅公寓装修</a> <!--<b>(急)</b>--></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">90㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4131865.html" target="_blank">成都市龙泉驿区世茂城住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3万以下</td>
                            <td class="col1">41㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4259886.html" target="_blank">成都市双流县空港星品地住宅公寓装修</a> <!--<b>(急)</b>--></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">126㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v3722552.html" target="_blank">成都市郫县郫县中铁奥维尔住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">5-8万</td>
                            <td class="col1">120㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v3696850.html" target="_blank">成都市邛崃市羊安镇安置小区住宅公寓装修</a> <!--<b>(急)</b>--></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">专卖展示店</td>
                            <td class="col1">3万以下</td>
                            <td class="col1">16㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v3694645.html" target="_blank">成都市武侯区专卖展示店装修</a> <!--<b>(急)</b>--></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">8-12万</td>
                            <td class="col1">104㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v3726316.html" target="_blank">成都市成华区金科天籁城住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">109㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v3866683.html" target="_blank">成都市成华区中铁玛塞城住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">5-8万</td>
                            <td class="col1">117㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v3826935.html" target="_blank">成都市温江区大华水映岛住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">5-8万</td>
                            <td class="col1">80㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v3912427.html" target="_blank">成都市郫县新巢商务中心住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">140㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4261607.html" target="_blank">成都市温江区国色天乡住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">100㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4258769.html" target="_blank">成都市成华区新华公园住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">休闲健身</td>
                            <td class="col1">8-12万</td>
                            <td class="col1">290㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4260518.html" target="_blank">成都市武侯区休闲健身装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">别墅</td>
                            <td class="col1">5-8万</td>
                            <td class="col1">297㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4257483.html" target="_blank">成都市新都区保利198公园别墅装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">办公楼</td>
                            <td class="col1">25-30万</td>
                            <td class="col1">500㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4258545.html" target="_blank">成都市武侯区办公楼装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">119㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4207193.html" target="_blank">成都市郫县五彩城住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">3万以下</td>
                            <td class="col1">94㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4098886.html" target="_blank">成都市高新区红树湾二期住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">住宅公寓</td>
                            <td class="col1">5-8万</td>
                            <td class="col1">150㎡</td>
                            <td class="col1">全包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4258440.html" target="_blank">成都市龙泉驿区柏合镇佳美路附近住宅公寓装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>  <tr>
                            <td class="col1">专卖展示店</td>
                            <td class="col1">3-5万</td>
                            <td class="col1">34㎡</td>
                            <td class="col1">半包</td>
                            <td class="col5"><span><a href="http://cd.to8to.com/zb/v4258087.html" target="_blank">成都市新都区专卖展示店装修</a></span></td>
                            <td class="col6">08月27日</td>
                        </tr>      </table>
                </div>
                <div id="scrolldiv2"></div>
            </div>
        </div>
    </div>




    <script src="../js/sjbj_index.js" type="text/javascript"></script>

    <script type="text/javascript">
        freeDesign.init();
    </script>


    <img src="../img/2-shangmen.png" alt=""/>

    <img src="../img/2-more-pk.png" alt=""/>

    <img src="../img/2-duibi.png" alt=""/>

</div>

<?php include "footer.php" ?>
</body>
</html>