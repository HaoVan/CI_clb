<?php
$this->load->view('admin/vwHeader');
?>
<div class="table-responsive">
    <form class="form" action="/member/index/confirm" method="post">
        <label for="full_name">Full name</label>
        <input name="full_name" class="form-control" value="<?php echo $member['full_name']?>"/>

        <label for="email">Email</label>
        <input name="email" class="form-control" value="<?php echo $member['email']?>"/>

        <label for="mobile_phone">Mobile phone</label>
        <input name="mobile_phone" class="form-control" value="<?php echo $member['mobile_phone']?>"/>

        <label for="home_number">Home number</label>
        <input name="home_number" class="form-control" value="<?php echo $member['home_number']?>"/>

        <label for="address">Address</label>
        <input name="address" class="form-control" value="<?php echo $member['address']?>"/>

        <label for="social">Social</label>
        <input name="social" class="form-control" value="<?php echo $member['social']?>"/>
        
        <label for="signup_date">Sign Up Date</label>
        <input name="signup_date" class="form-control" id="datepicker" value="<?php echo $member['signup_date'] ?>"/>

        <label for="status">Status</label>
        <select name="status" class="form-control">
            <option value="3">Temporary</option>
            <option value="2" <?php if($member['status']==2){echo "selected";}?> >Off</option>
            <option value="1" <?php if($member['status']==1){echo "selected";}?>>On</option>
        </select>
        
        <label for="type">Type</label>
        <select name="type" class="form-control">
            <option value="1">Student</option>
            <option value="2" <?php if($member['type']==1){echo "selected";}?>>Teacher</option>
        </select>
        
        <label for="status">Note</label>
        <textarea name="note" class="form-control" value="<?php echo $member['note']?>" cols="50" rows="5"></textarea>
        
        <div>&nbsp</div>
        <input type="submit" value="Register" class="btn btn-primary"/>  
        <p class="p_error"><?php if (isset($error_login)) {
    echo $error_login;
} ?></p>      
    </form>
</div>

<?php
$this->load->view('admin/vwFooter');
?>
