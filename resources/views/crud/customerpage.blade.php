@extends('layouts.app')
@section('content5')
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

                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection

