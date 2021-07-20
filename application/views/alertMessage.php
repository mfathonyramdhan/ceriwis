<?php if ($this->session->has_userdata('msg')) { ?>


    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-check" style="padding-right: 50px;"></i> <?php echo $this->session->flashdata('msg'); ?> </h4>
    </div>
<?php } ?>