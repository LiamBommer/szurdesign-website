<ul id="slide-out" class="side-nav fixed">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="images/concrete_seamless.png" alt="conc">
            </div>
            <img class="circle" src="images/logo-black.png" alt="logo">
            <!-- insert name from session here -->
            <span class="black-text name"><?php echo "boss" ?></span>
            <!-- insert email from session here -->
            <span class="black-text email"><?php echo $session_email ?></span>
        </div>
    </li>
    <li><a href="<?php echo site_url('article/view/articles'); ?>">文章!</a></li>
    <li><a href="<?php echo site_url('article/view/create'); ?>">新建一篇</a></li>
    <div class="divider"></div>
    <li><a href="<?php echo site_url('announ/view/announcements'); ?>">公告!</a></li>
    <li><a href="<?php echo site_url('announ/view/create_announ'); ?>">新建一篇</a></li>
</ul>
<a data-activates="slide-out" class="button-collapse" href="#"><i class="material-icons">menu</i></a>
