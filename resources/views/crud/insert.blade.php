@extends('layouts.app')
@section('content3')
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="container">
                    @if (\Session::has('status'))
                        <div class="alert alert-primary">
                            {!! \Session::get('status') !!}
                        </div>
                    @endif
                    <form class="well form-horizontal" action="{{url('crud/insertdata')}}" method="post">
                        @csrf
                        <fieldset>

                            <!-- Form Name -->
                            <legend class="bg-primary rounded"><center><h2><b>Data Insert</b></h2></center></legend><br>

                            <!-- Text input-->

                            <div class="col-md-11 m-auto">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class=" control-label">Name  :</label>
                                        </div>
                                        <div class="col-md-9 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="name" placeholder="First Name" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-2">
                                            <label class=" control-label">Email  :</label>
                                        </div>
                                        <div class="col-md-9 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="email" placeholder="email" class="form-control"  type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-2">
                                            <label class=" control-label">Phone  :</label>
                                        </div>
                                        <div class="col-md-9 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="phone" placeholder="phone number" class="form-control"  type="number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-2">
                                            <label class=" control-label">City  :</label>
                                        </div>
                                        <div class="col-md-9 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="city" placeholder="city" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4 float-right"><br>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspInsert <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                                </div>
                            </div>

                            </div>

                            <!-- Select Basic -->



                        </fieldset>
                    </form>
                </div>
        </div>
    </div>
@endsection
