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
                       <li class="breadcrumb-item active">List of All Transactions</li>
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
                           <h3 class="card-title">Balance: ${{ $user->balance }}</h3>
                       </div>
                       <div class="card-body">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>ID</th>
                                       <th>Type</th>
                                       <th>Amount</th>
                                       <th>Date</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($transactions as $transaction)
                                   <tr>
                                       <td>{{ $transaction->id }}</td>
                                       <td>{{ $transaction->transaction_type }}</td>
                                       <td>{{ $transaction->amount }}</td>
                                       <td>{{ $transaction->date }}</td>
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
