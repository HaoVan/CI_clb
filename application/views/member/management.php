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
                <th class="header">Signup Date<i class="fa fa-sort"></i></th>
                <th class="header">Note<i class="fa fa-sort"></i></th>
                <th class="header">Status<i class="fa fa-sort"></i></th>
                <th class="header">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($list)){?>
                <?php foreach($list as $item){?>
                    <tr>
                        <th class="header"><a href="/member/index/detail/<?php echo $item['id'] ?>"><?php echo $item['full_name'] ?></a></th>
                        <th class="header"><?php echo $item['mobile_phone'] ?></th>
                        <th class="header"><?php echo $item['signup_date'] ?></i></th>
                        <th class="header"><p><?php echo $item['note'] ?></p></th>
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
                        <th class="header"><a alt="Edit" href="/member/index/edit/<?php echo $item['id'] ?>">Edit</a></th>
                    </tr>
                <?php }?>    
            <?php }?>
        </tbody>
    </table>
</div>
<?php 
    echo $paging;
?>

<?php
$this->load->view('admin/vwFooter');
?>