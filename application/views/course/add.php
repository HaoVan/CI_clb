<?php
$this->load->view('admin/vwHeader');
?>
<link rel="stylesheet" href="<?php echo HTTP_CSS_PATH; ?>jquery.ui.timepicker.css" />
<script src="<?php echo HTTP_JS_PATH; ?>jquery.ui.timepicker.js"></script>
<script type="text/javascript">
    $(document).on('focus','.time',function(){
        $(this).timepicker({
            onSelect: function(time, inst) {
                    $('.time').html( time);
                }
        })
    })
</script>    
    <div class="table-responsive">
        <form class="form" method="post" action="/course/index/add">
            <label for="name">Class name</label>
            <input name="name" class="form-control" value="<?php echo set_value('name')?>"/>
            <p class="error"><?php echo form_error('name')?></p>
            
            <label for="day">Days</label>
            <input name="day" class="form-control" value="<?php echo set_value('day')?>"/>
            <p class="error"><?php echo form_error('day')?></p>
            
            <div class="row">
                <div class="col-lg-6">
                    <label for="start_time">Start Time </label>
                    <input name="start_time" class="form-control time" value="<?php echo set_value('start_time')?>"/>
                    <p class="error"><?php echo form_error('start_time')?></p>
                </div>
                <div class="col-lg-6">
                    <label for="end_time">End Time </label>
                    <input name="end_time" class="form-control time" value="<?php echo set_value('end_time')?>"/>
                    <p class="error"><?php echo form_error('end_time')?></p>
                </div>    
            </div>
            <label for="level">Level</label>
            <input name="level" class="form-control" value="<?php echo set_value('level')?>"/>
            <p class="error"><?php echo form_error('level')?></p>
            
            <label for="price">Price</label>
            <input name="price" class="form-control" value="<?php echo set_value('price')?>"/>
            <p class="error"><?php echo form_error('price')?></p>
            
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
