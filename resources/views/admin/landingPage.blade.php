@extends('admin/dashboard')

@section('content')
    <div class="content">
        <h1 class="text-primary-emphasis" style="margin-top: 75px">Dashboard</h1>
        <div class="d-flex flex-wrap justify-content-between align-items-center me-3">
            @foreach ($card as $item)
                <div class="card" style="width: 18rem">
                    <div class="card-body">
                        <div class="row inline g-3">
                            <div class="col-4 p-0">
                                <img src="img/{{ $item['images'] }}" class="border rounded w-100">
                            </div>
                            <div class="col-auto pt-3">
                                <p>{{ $item['card_title'] }}</p>
                                @if ($item['card_title']==='Ticket Sale Today' || $item['card_title']==='Ticket Sale')
                                    <p>{{ $item['value'] }} PCS</p>
                                @elseif($item['card_title']==='Income Today' || $item['card_title']==='Income Total')
                                    <p>Rp. {{ number_format($item['value'],0,',') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <form action="" class="border border-2 mt-5 me-3 rounded ">
            <p class="fs-1 ps-3">User</p>
            <div style="padding: 0px 10px">
                <table id="tabelData" class="table table-hover" style="padding: 0px 10px;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>Create Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($table_value as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['email'] }}</td>
                            <td>{{ $item['no_telp'] }}</td>
                            <td>{{ $item['create_date'] }}</td>
                            <td><button class="btn btn-danger" type="button">Delete</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
    </div>
@endsection