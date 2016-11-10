<section class="content-header">
    <h1>
        {!! $title !!}
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-body">
            <?php if(!empty($message)){
                $messageType = empty($messageType) ? $messageType : 'info';
                ?>
                <div class="alert alert-{!! $messageType !!} alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {!! $message !!}
               </div>
            <?php } ?>

            <form class="form-horizontal" method="post">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-xs-2">
                                <label class="control-label">{!! $label !!}:</label>
                            </div>
                            <div class="col-xs-10">
                                <textarea name="sources" class="form-control" rows="20"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-xs-12 text-right">
                        <button class="btn btn-primary" type="submit">
                            Submit
                        </button>
                    </div>
                </div>

                {!! csrf_field() !!}
            </form>
        </div>
    </div>
</section>
