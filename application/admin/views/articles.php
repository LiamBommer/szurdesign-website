<main>
<div>

<div class="container">
<?php
foreach($query->result() as $row)
{
    echo "<div class='divider'></div>
        <div class='section'>";
    echo "<img class='responsive-img' src='upload_img/".$row->cover_name."' />";
    echo "<h5>".$row->title."</h5>";
    echo "<a class=\"btn\" href=\""; 
    echo site_url("article/preview/$row->id");
    echo "\">预览<i class=\"material-icons right\">airplay</i></a>";
    echo "<a class=\"btn blue\" href=\""; 
    echo site_url("edit/view/$row->id");
    echo "\">编辑<i class=\"material-icons right\">edit</i></a>";
    echo "<a class=\"btn red\" href=\""; 
    echo site_url("article/delete/$row->id");
    echo "\">删除<i class=\"material-icons right\">delete</i></a>";
    echo "</div>";
} 
?>
</div>

</div>
</main>
