<?php $page="notification";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper cardhead">
    <div class="content container-fluid">
				
        @component('components.pageheader')                
			@slot('title') Notification @endslot
			@slot('li_1') Dashboard @endslot
            @slot('li_2') Notification @endslot
		@endcomponent
        <div class="row">
        
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Alert</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert" class="btn btn-primary waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Confirm</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert-confirm" class="btn btn-primary waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Prompt</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert-prompt" class="btn btn-primary waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Success Alert</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert-success" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Error Alert</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert-error" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
            <!-- Alert -->
            <div class="col-md-4">	
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Warnng Alert</div>
                    </div>
                    <div class="card-body">
                            <a href="javascript: void(0);"  id="alert-warning" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
                    </div>
                </div>
            </div>
            <!-- /Alert -->
            
        </div>
    
    </div>				
</div>
@endsection