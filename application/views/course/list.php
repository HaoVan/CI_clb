<?php
$this->load->view('admin/vwHeader');
?>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Level</td>
                    <td>Day</td>
                    <td>Time</td>
                    <td>Price</td>
                    <td>Open date</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($list as $item){?>
                    <tr>
                        <td><?php echo $item->name ?></td>
                        <td><?php echo $item->level ?></td>
                        <td><?php echo $item->day ?></td>
                        <td><?php echo $item->time ?></td>
                        <td><?php echo $item->price ?></td>
                        <td><?php echo $item->open_date ?></td>
                        <td><?php echo $item->status ?></td>
                        <td><a href="<?php echo "/course/index/edit/$item->id"?>">Edit</a></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

<?php
$this->load->view('admin/vwFooter');
?>
