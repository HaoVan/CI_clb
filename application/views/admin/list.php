<?php 
$this->load->view('admin/vwHeader');
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($list as $index => $item)?>
            <tr>
                <th><?php echo $index?></th>
                <th><?php echo $item->username?></th>
                <th><?php echo $item->mobile_phone?></th>
                <th><?php echo $item->email?></th>
                <th><?php echo $item->address?></th>
                <th>Edit</th>
            </tr>
        <?php ?>
    </tbody>
</table>
<?php 
$this->load->view('admin/vwFooter');
?>