<?php
$this->load->view('admin/vwHeader');
?>

<a href="/member/index/add" class="btn btn-primary" type="button">Add New Student</a>

<div class="table-responsive">
    <table class="table table-hover tablesorter">
        <thead>
            <tr>
                <th class="header">Full name <i class="fa fa-sort"></i></th>
                <th class="header">Phone<i class="fa fa-sort"></i></th>
                <th class="header">Address<i class="fa fa-sort"></i></th>
                <th class="header">Signup Date<i class="fa fa-sort"></i></th>
                <th class="header">Status<i class="fa fa-sort"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($list)){?>
                <?php foreach($list as $item){?>
                    <tr>
                        <th class="header"><?php echo $item['full_name'] ?></th>
                        <th class="header"><?php echo $item['mobile_phone'] ?></th>
                        <th class="header"><p><?php echo $item['address'] ?></p></th>
                        <th class="header"><?php echo $item['signup_date'] ?></i></th>
                        <th class="header">
                            <?php 
                                switch ($item['status']){
                                    case 1:
                                        echo "ON";break;
                                    case 2:
                                        echo "OFF"; break;
                                    case 3:
                                        echo "Temporary";break;
                                }
                        ?></th>
                    </tr>
                <?php }?>    
            <?php }?>
        </tbody>
    </table>
</div>

<ul class="pagination pagination-sm">
    <li class="disabled"><a href="#"><<</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">>></a></li>
</ul>

<?php
$this->load->view('admin/vwFooter');
?>