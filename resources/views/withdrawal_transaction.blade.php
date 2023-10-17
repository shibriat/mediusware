@extends('layouts.app')
@section('content')
<div class="content-wrapper">
   <section class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                       <li class="breadcrumb-item active">List of Withdrawals</li>
                   </ol>
               </div>
           </div>
       </div>
   </section>
   <section class="content">
       <div class="container-fluid">
           <div class="row">
               <div class="col-12">
                   <div class="card">
                       <div class="card-header">
                           <h3 class="card-title">List of Withdrawals</h3>
                           <a href="{{ route('withdrawal.create') }}" class="btn btn-primary float-right">Add Withdrawal</a>
                       </div>
                       <div class="card-body">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>ID</th>
                                       <th>Amount</th>
                                       <th>Date</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($withdrawals as $withdrawal)
                                   <tr>
                                       <td>{{ $withdrawal->id }}</td>
                                       <td>{{ $withdrawal->amount }}</td>
                                       <td>{{ $withdrawal->date }}</td>
                                   </tr>
                                   @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
</div>
@endsection
