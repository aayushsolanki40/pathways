@extends('admin.layouts.app')
@section('title', 'Dealerz List')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users List <small>Users</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sr.</th>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th>Website</th>
                          <th>Facebook</th>
                          <th>Twitter</th>
                          <th>Descord</th>
                          <th>Telegram</th>
                          <th>Instagram</th>
                          <th>Joined On</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $key =>  $user)
                        <tr>
                          <td>{{++$key}}</td>
                          <td>{{$user->firstName.' '.$user->lastName}}</td>
                          <td>{{$user->phone}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->website}}</td>
                          <td>{{$user->facebook}}</td>
                          <td>{{$user->twitter}}</td>
                          <td>{{$user->descord}}</td>
                          <td>{{$user->telegram}}</td>
                          <td>{{$user->instagram}}</td>
                          <td>{{date('d M, Y', strtotime($user->created_at))}}</td>
                        </tr>
                        @endforeach
                         </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
        </div>
    </div>
</div>
@endsection
