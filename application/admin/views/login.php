<div class="container row">
    <?php echo validation_errors(); ?>

    <!-- form action undefined -->
    <?php $attr = array('class' => 'col s6 offset-s3');
        echo form_open('login/check', $attr);
    ?>
    <!-- <form class="col s6 offset-s3" action=""> -->
        <h5>家姐，快滴登录睇下啦！</h5>
        <div class="input-field">
            <input id="email" type="email" name="email"  class="validate">
            <label for="email">Email</label>
        </div>

        <div class="input-field">
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Password</label>
        </div>

        <div class="right-align">
            <button class="btn waves-effect waves-light" type="submit">Login
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
