@extends('layouts.app')
@section('content2')
<div class="container">
    <div class="row">
        <div class="col-md-12 header pb-3">
            <div class="row">
                @if (\Session::has('delete'))
                    <div class="alert alert-primary">
                        {!! \Session::get('delete') !!}
                    </div>
                @endif
                <div class="col-md-10">
                    <h3>Crud Operation</h3>
                </div>
                <div class="col-md-1">
                <a href="{{url('crud/insert')}}" class="btn btn-success">Insert</a>
                </div>
            </div>

        </div>
        <div class="col-md-12 crudtable">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">S.l</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">City</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $index => $customer)


                  <tr>
                    <th scope="col">{{++$index}}</th>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->city}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{url('customer/delete',$customer->id)}}" class="btn btn-danger">Delete</a>
                            <a href="{{url('customer/edit',$customer->id)}}" class="btn btn-primary">edit</a>
                        </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection

