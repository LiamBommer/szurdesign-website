<main>

<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

<div class="container">

    <?php echo form_open_multipart('article/create'); ?>
        <h5>封面图片</h5>
        <div class="file-field input-field">
            <div class="btn">
                <span>浏览</span>
                <input type="file" name="coverImg" />
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" name="cover-path">
            </div>
            <p>暂时设定只能上传gif, jpg, png格式，最大5M，如有其他需求跟我说哈</p>
        </div>
        <br/>
        <h5>文章标题</h5>
        <div class="input-field">
            <textarea id="title-area" class="materialize-textarea" name="title-area" cols="30" rows="10"></textarea>
            <label for="title-area">title</label>
        </div>
        <br/>
        <h5>文章内容</h5>
        <textarea id="content-area" name="content-area">
            Write something, BOSS!
        </textarea>
        <script type="text/javascript">
            CKEDITOR.replace('content-area', {
                height: 350,
            });
        </script>
        <br/>
        <div class="right-align">
            <button class="btn waves-effect waves-light" type="submit">提交
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>

</main>
