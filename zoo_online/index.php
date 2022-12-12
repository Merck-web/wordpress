<?php get_header() ?>
<?php include 'blocks/about/head.php' ?>
<?php include 'blocks/about/how.php' ?>
<?php get_footer() ?>



<!-- Button trigger modal -->
<div class="modal fade abt" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal_about">
        <div class="modal-content">
            <div class="modal-body">
                <?php include 'blocks/about/donatWindow.php' ?>
            </div>
        </div>
    </div>
</div>
