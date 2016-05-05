@extends('main')

@section('title')
Lịch sử giao dịch
@endsection

@section('content')
	<?php
	$orders = App\Order::where('user_id','=',Auth::user()->id)->get();
	?>
	<table class="table table-hover table-bordered" id="orders-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Level</th>
                <th>Source Address</th>
                <th>Destination Address</th>
                <th>Distance</th>
                <th>Status</th>
                <th>Created at</th>
            </tr>
        </thead>
    </table>
@endsection

<script>
$(function() {
    $('#orders-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('history.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'type', name: 'type' },
            { data: 'level', name: 'level' },
            { data: 'sourceAddress', name: 'sourceAddress' },
            { data: 'destinationAddress', name: 'destinationAddress' },
            { data: 'distance', name: 'distance' },
            { data: 'status', name: 'status' },
            { data: 'created_at', name: 'created_at' }
        ]
    });
});
</script>
