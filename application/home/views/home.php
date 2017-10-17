<div class="home-content">
    <div class="introduce">
        <div class="introduce-section row right-align">
            <div id="up-div" class="col m5 s12" >
                <ul class="scroll-ul">
                    <li class="invisible"><h4>UR Design</h4></li>
                    <li class="invisible"><p><span class="p-subtitle">亦为 'Your' Design</span> <br/>
                        以你为主，一切的设计均由你的生活展开</p></li>
                </ul>
            </div>
        </div>
        <div class="introduce-section row">
            <div id="down-div" class="col m7 offset-m5 s12" >
                <ul class="scroll-ul">
                    <li class="invisible"><span class="p-subtitle">UR优势</span> 不在出图的速度或者是跟市场去打价格战; <br/>体力不贵，画图不难,
    但我们坚持不将设计模式化，常规化;<br /><br /></li>

    <li class="invisible"><span class="p-subtitle">UR擅长</span> 让每个经我们手的空间，都有我们灌注的生活情怀与温度;<br /><br /></li>

    <li class="invisible"><span class="p-subtitle">UR相信</span> 沟通想法，再通过能力和技巧，从而解决客户的问题;<br /><br /></li>

    <li class="invisible"><span class="p-subtitle">UR追求</span> 不辜负每个对生活有态度，对空间有追求的你。<br /><br /></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="exhibition">
        <div class="row">
            <div class="col m9 s12">
                <div class="left-align">
                    <span class="desc-title">最新项目</span>
                </div>
                <?php
                    foreach($query->result() as $row)
                    {
                        echo "
                            <section class='z-depth-1'>
                                <div class='cover-image'>
                                    <img class='responsive-img' src='upload_img/".$row->cover_name.
                                    "' alt='' />
                                </div>
                                <div class='desc-content'>
                                    <span class='desc-title'>".$row->title.
                                "</span>
                                </div>
                            </section>
                            <div class='divider'></div>
                        ";
                    }
                ?>
                <div class="colum-bottom">
                    <a href="#"><span class="view-all">查看所有</span></a>
                </div>
            </div>
            <div class="col m3 s12">
                <div class="left-align">
                    <span class="desc-title">公告</span>
                </div>
                <?php
                    foreach($query_announ->result() as $row)
                    {
                        echo "
                            <section class='z-depth-1'>
                                <div class='announ-title left-align'>
                                    <span class='desc-title'>
                                    ".$row->title."
                                    </span>
                                </div>
                                <div class='divider'></div>
                                <div class='announ-content left-align'>
                                    ".$row->content."
                                </div>
                            </section>
                        ";
                    }
                ?>
                <div class="colum-bottom">
                    <a href="#"><span class="view-all">查看所有</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
