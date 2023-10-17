@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/withdrawal') }}">Withdrawal</a></li>
                            <li class="breadcrumb-item active">Create Supplier</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Make Withdrawak</h3>
                                </div>
                        <form action="{{ route('withdrawal.store') }}" method="post">
                            @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="amount">Withdraw Amount*</label>
                                            <input type="number" name="amount" id="amount" class="amount form-control" placeholder="Amount" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="date">Date*</label>
                                            <input type="date" name="date" id="date" class="date form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Create Withdrawal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
@endsection
