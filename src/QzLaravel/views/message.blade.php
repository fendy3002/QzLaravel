@extends('shared.master')

<?php
    $state = !empty($state) ? $state : 'solid';
    $redirectMessage = !empty($redirectMessage) ? $redirectMessage :
        'Click here if your browser does not automatically redirect you';
?>

@section('title')
<?php if(!empty($title)){ ?>
    {{ $title }}
<?php } else{ ?>
    @parent
<?php } ?>
@overwrite

@section('header')
<?php if(!empty($redirect)){ ?>
    <meta http-equiv="refresh" content="5; url={!! $redirect !!}"></noscript>
<?php }?>
@overwrite

@section('content')
    <section class="content-header">
        <?php
            if(!empty($header)){
        ?>
            <h1>
                <b>{!! $header !!}</b>
            </h1>
        <?php } ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-{{ $state }}">
            <div class="box-body">
                {!! $message !!}
            </div>
        </div>
        <?php if(!empty($redirect)){ ?>
            <div class="box box-solid">
                <div class="box-body text-center">
                    <p><a href="{!! $redirect !!}">{!! $redirectMessage !!}</a></p>
                </div>
            </div>
        <?php }?>
    </section>
@overwrite
