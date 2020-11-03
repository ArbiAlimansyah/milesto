  <p class='sidebar-title text-danger produk-title'> Login Users</p> 

            <div class='alert alert-info'>Masukkan username dan password pada form berikut untuk login,...</div>
            <br>
            <?php 
                echo $this->session->flashdata('message'); 
                $this->session->unset_userdata('message');
            ?>
            <div class="logincontainer">
                <form method="post" action="<?php echo base_url(); ?>auth/login" role="form" id='formku'>
                    <div class="form-group">
                        <label for="inputEmail">Username</label>
                        <input type="text" name="a" class="required form-control" placeholder="Masukkan Username" autofocus=""  minlength='5' onkeyup="nospaces(this)" required>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="b" class="form-control required" placeholder="Masukkan Password" autocomplete="off" required>
                    </div>

                    <div align="center">
                        <input name='login' type="submit" class="btn btn-primary" value="Login"> <a href="#" class="btn btn-default" data-toggle='modal' data-target='#lupass'>Lupa Password?</a> <br><br> Anda Belum Punya akun? <a href="<?php echo base_url(); ?>auth/register" title="Mari gabung bersama Kami" class="link">Daftar Disini.</a>
                    </div>
                    <center><a href='<?php echo base_url(); ?>reseller'>Login Reseller</a><center>
                </form>
            </div>

<div class="modal fade" id="lupass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h5 class="modal-title" id="myModalLabel">Lupa Password Login?</h5>
    </div><center>
    <div class="modal-body">
    <?php 
        $attributes = array('class'=>'form-horizontal');
        echo form_open('auth/lupass',$attributes); 
    ?>
    <div class="form-group">
        <center style='color:red'>Masukkan Email yang terkait dengan akun!</center><br>
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div style='background:#fff;' class="input-group col-sm-8">
            <span class="input-group-addon"><i class='fa fa-envelope fa-fw'></i></span>
            <input style='text-transform:lowercase;' type="email" class="required form-control" name="a">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3">
            <button type="submit" name='lupa' class="btn btn-primary btn-sm">Kirimkan Permintaan</button>
            &nbsp; &nbsp; &nbsp;<a data-dismiss="modal" aria-hidden="true" data-toggle='modal' href='#login' data-target='#login' title="Lupa Password Members">Kembali Login?</a>
        </div>
    </div>
    </form><div style='clear:both'></div>
    </div>
    </center>
</div>
</div>
</div>