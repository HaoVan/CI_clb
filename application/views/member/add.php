<?php
$this->load->view('admin/vwHeader');
?>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>Add new Student</h1>
            <ol class="breadcrumb">
                <li><a href="Users"><i class="icon-dashboard"></i> Users</a></li>
                <li class="active"><i class="icon-file-alt"></i> Users</li>


                <a href="/student/index/add" class="btn btn-primary" type="button" style="float:right;">Add New Student</a>
                <div style="clear: both;"></div>
            </ol>
        </div>
    </div><!-- /.row -->



    <div class="table-responsive">
        <form class="form" action="confirm_add" method="post">
            <label for="full_name">Full name</label>
            <input name="full_name" class="form-control" value=""/>
            
            <label for="email">Email</label>
            <input name="email" class="form-control" value=""/>
            
            <label for="mobile_phone">Mobile phone</label>
            <input name="mobile_phone" class="form-control" value=""/>
            
            <label for="home_number">Home number</label>
            <input name="home_number" class="form-control" value=""/>
            
            <label for="address">Address</label>
            <input name="address" class="form-control" value=""/>
            
            <label for="social">Social</label>
            <input name="social" class="form-control" value=""/>
            
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="3">Temporary</option>
                <option value="2">Off</option>
                <option value="1">On</option>
            </select>   
            <div>&nbsp</div>
            <input type="submit" value="Register" class="btn btn-primary"/>  
            <p class="p_error"><?php if(isset($error_login)) { echo $error_login;} ?></p>      
        </form>
    </div>

</div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>
