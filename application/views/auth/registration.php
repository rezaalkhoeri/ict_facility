  <div class="container">

    
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
              <img class="img-responsive animated--grow-in" width="240px" height="70px" src="<?= base_url('assets/img/pdsibaru.jpg');?>">
              </div>
              <form class="user" method="POST" action="<?= base_url('users/registration'); ?>">

                <!-- name -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-user font-weight-bold" 
                  id="name" name="name" placeholder="Full Name" value="<?= set_value('name');?>">
                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <!-- email -->
                <div class="form-group">
                  <input type=text class="form-control form-control-user font-weight-bold" 
                  id="email" name="email" placeholder="Email Address" value="<?= set_value('email');?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <!-- role -->
                <div class="form-group">
                <select class="form-control" name="roleid" id="roleid">
                  <?php foreach ($role as $t) { ?>
                  <option value=<?= $t->id?>><?= $t->role ?></option>
                  <?php }?>
                  </select>
                  <?= form_error('roleid', '<small class="text-danger pl-3">', '</small>');?>
                </div>

                <!-- password -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" id="password1" name="password1" class="form-control form-control-user font-weight-bold" 
                    id="exampleInputPassword" placeholder="Password"> 
                     <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?> 
                  </div>
                  
                  <!-- confirm password -->
                  <div class="col-sm-6">
                    <input type="password" id="password2" name="password2" class="form-control form-control-user font-weight-bold" 
                    id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block font-weight-bold">
                  Register Account
                </button>
              </form>
              <hr>
            </div>
          </div>
        </div>
    

  </div>
