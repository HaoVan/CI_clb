<?php
$this->load->view('admin/vwHeader');
?>

<div class="table-responsive">
    <form class="form" action="/member/index/add" method="post">
        <label for="full_name">Full name</label>
        <input name="full_name" class="form-control" value="<?php echo set_value('full_name')?>"/>

        <label for="email">Email</label>
        <input name="email" class="form-control" value="<?php echo set_value('email')?>"/>

        <label for="mobile_phone">Mobile phone</label>
        <input name="mobile_phone" class="form-control" value="<?php echo set_value('mobile_phone')?>"/>

        <label for="home_number">Home number</label>
        <input name="home_number" class="form-control" value="<?php echo set_value('home_number')?>"/>

        <label for="address">Address</label>
        <input name="address" class="form-control" value="<?php echo set_value('address')?>"/>

        <label for="social">Social</label>
        <input name="social" class="form-control" value="<?php echo set_value('social')?>"/>
        
        <label for="signup_date">Sign Up Date</label>
        <input name="signup_date" class="form-control" id="datepicker" value="<?php echo set_value('signup_date')?>"/>
        <p class="error"><?php echo form_error('signup_date')?></p>
        
        <label for="status">Status</label>
        <select name="status" class="form-control">
            <option value="3">Temporary</option>
            <option value="2" <?php if(set_value('status')==2){echo "selected"; }?>>Off</option>
            <option value="1" <?php if(set_value('status')==1){echo "selected"; }?>>On</option>
        </select>
        
        <label for="status">Type</label>
        <select name="type" class="form-control">
            <option value="1">Student</option>
            <option value="2" <?php if(set_value('type')==2){echo "selected";}?>>Teacher</option>
        </select>   
        
        <label for="status">Note</label>
        <textarea name="note" class="form-control" value="<?php echo set_value('note')?>" cols="50" rows="5"></textarea>
        
        <div>&nbsp</div>
        <input type="submit" value="Register" class="btn btn-primary"/>   
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#datepicker").datepicker({
            dateFormat: "yy/mm/dd"
        });
    });
</script>
<?php
$this->load->view('admin/vwFooter');
?>
