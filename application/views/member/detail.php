<?php
$this->load->view('admin/vwHeader');
?>

<div class="table-responsive">
    <ul class="list-group">
    <li class="list-group-item">
        <strong>Full name: </strong> <?php echo $member->full_name ?>
    </li>
    <li class="list-group-item">
        <strong>Email: </strong> <?php echo $member->email ?>
    </li>
    <li class="list-group-item">
        <div for="mobile_phone">Mobile phone: </strong> <?php echo $member->mobile_phone ?>
    </li>
    <li class="list-group-item">
        <div for="home_number">Home number:<?php echo $member->home_number ?>
    </li>
    <li class="list-group-item">
        <div for="address">Address: </strong> <?php echo $member->address ?>
    </li>
    <li class="list-group-item">
        <div for="social">Social: </strong> <?php echo $member->social ?>
    </li>
    <li class="list-group-item">
        <div for="signup_date">Sign Up Date: </strong> <?php echo $member->signup_date ?>
    </li>
    <li class="list-group-item">
        <div for="status">Status: </strong> <?php
            if ($member->status == 1) {
                echo "ON";
            } elseif ($member->status == 2) {
                echo "OFF";
            } else {
                echo "Temporary";
            }
            ?>
    </li>
    <li class="list-group-item">

        <Strong>Note:</strong>
            <textarea readonly="readonly" name="note" class="form-control" value="<?php echo $member->note ?>" cols="50" rows="5"></textarea>
        
    </li>
    </ul>
</div>
<?php
$this->load->view('admin/vwFooter');
?>
