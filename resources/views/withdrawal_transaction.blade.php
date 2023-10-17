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
                       <li class="breadcrumb-item active">List of Deposits</li>
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
                           <h3 class="card-title">List of Deposits</h3>
                           <a href="{{ route('deposit.create') }}" class="btn btn-primary float-right">Add Deposit</a>
                       </div>
                       <div class="card-body">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>ID</th>
                                       <th>Amount</th>
                                       <th>Date</th>
                                       <!-- Add more table headers as needed -->
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($deposits as $deposit)
                                   <tr>
                                       <td>{{ $deposit->id }}</td>
                                       <td>{{ $deposit->amount }}</td>
                                       <td>{{ $deposit->date }}</td>
                                       <!-- Add more table data cells as needed -->
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
