<?php
$this->load->view('admin/vwHeader');
?>
    <div class="table-responsive">
        <table class="col-md-12">
            <thead>
                <tr>
                    <td class="col-md-2">Name</td>
                    <td class="col-md-2">Level</td>
                    <td class="col-md-1">Day</td>
                    <td class="col-md-2">Time</td>
                    <td class="col-md-1">Price</td>
                    <td class="col-md-2">Open date</td>
                    <td class="col-md-1">Status</td>
                    <td class="col-md-1">Action</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($list as $item){?>
                    <tr>
                        <td class="col-md-2" ><?php echo $item['name'] ?></td>
                        <td class="col-md-2" ><?php echo $item['level'] ?></td>
                        <td class="col-md-1" ><?php echo $item['day'] ?></td>
                        <td class="col-md-2" ><?php echo $item['time'] ?></td>
                        <td class="col-md-1" ><?php echo $item['price'] ?></td>
                        <td class="col-md-2" ><?php echo $item['opened_date'] ?></td>
                        <td class="col-md-1" ><?php if($item['status']== 0){ echo 'On'; }else { echo 'Off'; } ?></td>
                        <td class="col-md-1" ><a href="/course/index/edit/<?php echo $item['id']?>">Edit</a></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

<?php
$this->load->view('admin/vwFooter');
?>
