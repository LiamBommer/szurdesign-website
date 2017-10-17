<main>

<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

<div class="container">
    <?php echo form_open_multipart('announ/create'); ?>
        <h5>公告标题</h5>
        <div class="input-field">
            <textarea id="title-area" class="materialize-textarea" name="title-area" cols="30" rows="10"></textarea>
            <label for="title-area">title</label>
        </div>
        <br/>
        <h5>公告内容</h5>
        <textarea id="content-area" name="content-area">
            Say your vow, my lord
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
