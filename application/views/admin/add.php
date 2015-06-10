<?php
$this->load->view('admin/vwHeader');
?>
    <div class="table-responsive">
        <form class="form" method="post" action="/admin/add/index">
            <label for="username">Full name</label>
            <input name="username" class="form-control" value="<?php echo set_value('username')?>"/>
            <p class="error"><?php echo form_error('username')?></p>
            
            <label for="email">Email</label>
            <input name="email" class="form-control" value="<?php echo set_value('email')?>"/>
            <p class="error"><?php echo form_error('email')?></p>
            
            <label for="mobile_phone">Mobile phone</label>
            <input name="mobile_phone" class="form-control" value="<?php echo set_value('mobile_phone')?>"/>
            <p class="error"><?php echo form_error('mobile_phone')?></p>
            
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" value="<?php echo set_value('password')?>"/>
            <p class="error"><?php echo form_error('password')?></p>
            
            <label for="re-password">Re-Password</label>
            <input name="re_password" type="password" class="form-control" value="<?php echo set_value('re_password')?>"/>
            <p class="error"><?php echo form_error('re_password')?></p>
            
            <label for="address">Address</label>
            <input name="address" class="form-control" value="<?php echo set_value('address')?>"/>
            <p class="error"><?php echo form_error('address')?></p>
            
            <label for="status">Status</label>
            <select name="block" class="form-control">
                <option value="1">Off</option>
                <option value="0" <?php if(set_value('block')==0){ echo "selected";}?>>On</option>
            </select>
            <p class="error"><?php echo form_error('block')?></p>
            
            <label for="user_type">Type</label>
            <select name="user_type" class="form-control">
                <option value="A">Admin</option>
                <option value="SA" <?php if(set_value('user_type')=="SA"){ echo "selected";}?>>Super Admin</option>
            </select>
            <p class="error"><?php echo form_error('user_type')?></p>
            
            <button type="reset" class="btn btn-default">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php
$this->load->view('admin/vwFooter');
?>
