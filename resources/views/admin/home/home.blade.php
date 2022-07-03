@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
  <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
      <div class="count">{{$total_user}}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Transactions</span>
      <div class="count">{{$total_trans}}</div>
    </div>
  </div>
@endsection
