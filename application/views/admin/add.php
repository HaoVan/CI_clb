<?php
$this->load->view('admin/vwHeader');
?>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>Add New Admin</h1>
        </div>
    </div>

    <div class="table-responsive">
        <form class="form" method="post" action="/admin/add">
            <label for="username">Full name</label>
            <input name="username" class="form-control" value="<?php echo set_value('username')?>"/>
            <?php echo form_error('username')?>
            
            <label for="email">Email</label>
            <input name="email" class="form-control" value="<?php echo set_value('email')?>"/>
            <?php echo form_error('Email')?>
            
            <label for="mobile_phone">Mobile phone</label>
            <input name="mobile_phone" class="form-control" value="<?php echo set_value('mobile_phone')?>"/>
            <?php echo form_error('Mobile_phone')?>
            
            <label for="password">Password</label>
            <input name="password" class="form-control" value="<?php echo set_value('password')?>"/>
            <?php echo form_error('Password')?>
            
            <label for="re-password">Re-Password</label>
            <input name="re-password" class="form-control" value="<?php echo set_value('re-password')?>"/>
            <?php echo form_error('Re-password')?>
            
            <label for="address">Address</label>
            <input name="address" class="form-control" value="<?php echo set_value('address')?>"/>
            <?php echo form_error('Address')?>
            
            <label for="status">Status</label>
            <select name="block" class="form-control">
                <option value="1">Off</option>
                <option value="0" selected>On</option>
            </select>
            <?php echo form_error('Block')?>
            
            <label for="user_type">Type</label>
            <select name="user_type" class="form-control">
                <option value="A">Admin</option>
                <option value="SA">Super Admin</option>
            </select>
            <?php echo form_error('User_type')?>
            
            <button type="reset" class="btn btn-default">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>
