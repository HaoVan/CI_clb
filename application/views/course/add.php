<?php
$this->load->view('admin/vwHeader');
?>
    <div class="table-responsive">
        <form class="form" method="post" action="/admin/add/index">
            <label for="name">Class name</label>
            <input name="name" class="form-control" value="<?php echo set_value('name')?>"/>
            <p class="error"><?php echo form_error('name')?></p>
            
            <label for="day">Days</label>
            <input name="day" class="form-control" value="<?php echo set_value('day')?>"/>
            <p class="error"><?php echo form_error('day')?></p>
            
            <label for="time">Time </label>
            <input name="time" class="form-control" value="<?php echo set_value('time')?>"/>
            <p class="error"><?php echo form_error('time')?></p>
            
            <label for="level">Level</label>
            <input name="level" class="form-control" value="<?php echo set_value('level')?>"/>
            <p class="error"><?php echo form_error('level')?></p>
            
            <label for="opened_date">Open Date</label>
            <input name="opened_date" class="form-control" value="<?php echo set_value('opened_date')?>"/>
            <p class="error"><?php echo form_error('open_date')?></p>
            
            <label for="teacher">Teacher</label>
            <select name="teacher_id" class="form-control">
                <option value="0">Select teacher</option>
                <option value="0" <?php if(set_value('block')==0){ echo "selected";}?>>On</option>
            </select>
            <p class="error"><?php echo form_error('teacher_id')?></p>
            
            <label for="status">status</label>
            <select name="status" class="form-control">
                <option value="0">Open</option>
                <option value="1">Close</option>
            </select>
            <p class="error"><?php echo form_error('status')?></p>
            
            <button type="reset" class="btn btn-default">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php
$this->load->view('admin/vwFooter');
?>
