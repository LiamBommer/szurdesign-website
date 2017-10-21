<script type="text/javascript" src="js/login.js"></script>

<div id="modal-failure" class="modal">
    <div class="modal-content">
        <h4></h4>
        <p></p>
    </div>
    <div class="modal-footer">
        <a class="modal-action modal-close waves-effect btn-flat" >好！</a>
    </div>
</div>
<div id="modal-success" class="modal">
    <div class="modal-content">
        <h4></h4>
        <p></p>
    </div>
    <div class="modal-footer">
        <a class="modal-action modal-close waves-effect btn-flat" href="sis.php/Article/view">好！</a>
    </div>
</div>

<div class="container row" style="margin-top: 180px;">
    <!-- form action -->
    <?php $attr = array('class' => 'col s6 offset-s3', 
                        'id' => 'login-form');
        echo form_open('login/check', $attr);
    ?>
    <!-- <form class="col s6 offset-s3" action=""> -->
        <h5>家姐，快滴登录睇下啦！</h5>
        <br/>
        <div class="input-field">
            <input id="email" type="email" name="email"  class="validate">
            <label for="email">Email</label>
        </div>

        <div class="input-field">
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Password</label>
        </div>

        <div class="right-align">
            <button id="submit-btn" class="btn waves-effect waves-light" type="submit">Login
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
