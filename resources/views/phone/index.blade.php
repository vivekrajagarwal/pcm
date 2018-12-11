@extends('layout.app')
@section('content')
        <br>
<!----------------------- --------------------------->
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <img alt="" src="/img/big/{{$data[0]['image']}}" />
                    </div>
                    <div class="col-md-8">
                        <h2>
                                {{$data[0]['phone_name']}}
                        </h2>
                        <p>
                                {{$data[0]['phone_description']}}
                        </p>
                        
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                 <a class="nav-link btn btn-success" href="#">&#8377; {{$data[0]['phone_price']}}</a>
                            </li>
                            &nbsp;
                            <?php
                            if($data[0]['phone_availability'] == 'Instock')
                            { 
                            echo '<li class="nav-item">
                                    <a class="nav-link btn btn-success" href="#">'.$data[0]['phone_availability'].'</a>
                            </li>';
                            
                            }
                            else{    
                            echo '<li class="nav-item">
                                    <a class="nav-link btn btn-danger" href="#">'.$data[0]['phone_availability'].'</a>
                            </li>';
                            }
                            ?>                    
                        </ul>
                    </div>
                </div>
                <div class="tabbable" id="tabs-310288">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="#tab1" data-toggle="tab">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab2" data-toggle="tab">Features</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panel-322522">
                                
                        </div>
                        <div class="tab-pane active show" id="tab1">
                                <p> <?php echo html_entity_decode($data[0]['phone_long_description']); ?></p>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <p>
                                <table class="table table-striped">
                                        <tr>
                                            <th scope="row">Phone Name</th><td>{{$data[0]['phone_name']}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Phone Brand</th><td>{{$data[0]['phone_brand']}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Phone Price</th><td>{{$data[0]['phone_price']}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Phone Description</th><td>{{$data[0]['phone_description']}} </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Phone Image</td><th><img src="/img/{{$data[0]['image']}}" height="32px" width="32px"/> </td>
                                        </tr>
                                    </table>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection