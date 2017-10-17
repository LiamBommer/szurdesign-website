<main>
    <div class="container">

        <div class="section">
            <a class="left" href="<?php echo site_url('home/view/index'); ?>"><i class="material-icons">arrow_back</i></a>
        </div>
        <div class="divider"></div>
        <div class="section">
            <?php
                if(isset($row))
                {
                    echo "<h4>".$row->title."</h4>";
                    echo "<div class='section'>".$row->content."</div>";
                } else
                {
                    die("error: no article found. ");
                }
            ?>
        </div>

    </div>
</main>
