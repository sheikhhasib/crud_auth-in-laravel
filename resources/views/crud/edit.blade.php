@extends('layouts.app')
@section('content4')
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="container">
                    @if (\Session::has('update'))
                        <div class="alert alert-primary">
                            {!! \Session::get('update') !!}
                        </div>
                    @endif
                    <form class="well form-horizontal" action="{{url('customer/update')}}" method="post">
                        @csrf
                        <fieldset>
                            <input type="hidden" name="id" value="{{$customers->id}}">
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
                                                <input  name="name" value="{{$customers->name}}" placeholder="First Name" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-2">
                                            <label class=" control-label">Email  :</label>
                                        </div>
                                        <div class="col-md-9 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="email" value="{{$customers->email}}" placeholder="email" class="form-control"  type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-2">
                                            <label class=" control-label">Phone  :</label>
                                        </div>
                                        <div class="col-md-9 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="phone" value="{{$customers->phone}}" placeholder="phone number" class="form-control"  type="number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-2">
                                            <label class=" control-label">City  :</label>
                                        </div>
                                        <div class="col-md-9 inputGroupContainer">
                                            <div class="input-group">
                                                <input  name="city" placeholder="city" value="{{$customers->city}}" class="form-control"  type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4 float-right"><br>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUpdate <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
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
