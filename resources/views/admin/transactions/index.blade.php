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
                    <h2>Transactions List <small>Transactions</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sr.</th>
                          <th>Trans. Id</th>
                          <th>Trans. By</th>
                          <th>Order</th>
                          <th>Status</th>
                          <th>Amount</th>
                          <th>Payer Name</th>
                          <th>Payer Email</th>
                          <th>Currency Code</th>
                          {{-- <th>Message</th> --}}
                          <th>Created On</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($transactions as $key =>  $transaction)
                        <tr>
                          <td>{{++$key}}</td>
                          <td>{{$transaction->transaction_id}}</td>
                          <td>{{$transaction->user->firstName.' '.$transaction->user->lastName}}</td>
                          <td>{{$transaction->invoice_no}}</td>
                          <td>{{$transaction->ack}}</td>
                          <td>${{$transaction->amt}}</td>
                          <td>{{$transaction->payer_firtsname.' '.$transaction->payer_lastname}}</td>
                          <td>{{$transaction->payer_email}}</td>
                          <td>{{$transaction->country_code}}</td>
                          {{-- <td>{{$transaction->long_msg}}</td> --}}
                          <td>{{date('d M, Y', strtotime($transaction->created_at))}}</td>
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
