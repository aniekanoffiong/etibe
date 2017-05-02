@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">        
            <div class="col-lg-8 col-lg-offset-10">
                <a href="#" class="btn btn-info" role="button"><span class="glyphicon glyphicon-plus"> create group</span></a><br><br>
            </div>
        </div>
    </div>
            
                <div class="container-fluid">          
                    <div class="col-md-8 col-md-offset-6">
                        <h5>Current Groups</h5><br><br>
                    </div>
                        <div class="row">
                            <div class="panel">
                                <div class="panel body">
                                    <div class="col-md-4 ">
                                        <div class="thumbnail" href="#">
                                            <img src="../public/img/sample.jpg" alt=""/>
                                            <div class="caption">
                                                <center><h4>Richie</h4></center>
                                            </div>
                                        </div>
                                    </div>
                        
                                        <div class="col-md-4">
                                            <div class="thumbnail" href="#">
                                                <div class="">
                                                    <img src="../img/image">
                                                </div>
                                                <div class="caption">
                                                    <center><h4>Young</h4></center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" href="#">
                                            <div class="thumbnail">
                                                <img src="..img/etibe.jpeg">
                                                <div class="caption">
                                                    <center><h4>Emmanuel</h4></center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
@endsection
