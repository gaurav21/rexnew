<script type="text/javascript">
    $(function () {
        $('.mon_menu').each(function () {
            $(this).removeClass('active');
        });
        $('.menu_newtask').addClass('active');
    });
    //save user password


</script>
<div class="row signup-content">
    <div class="col-md-12">
        <div class="signup-content-headings">
            <h1>Create Task</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-md-offset-3">
                <?php $this->renderPartial('_form', array('model'=>$model, 'make' => $make, 'city' => $city, 'company' => $company)); ?>
            </div>
        </div>
    </div>
</div>    
