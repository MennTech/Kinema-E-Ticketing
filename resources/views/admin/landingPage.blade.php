@extends('admin/dashboard')

@section('content')
    <style>
        h1{
            margin-top: 6%;
        }
        img{
            width: 80px;
            margin-bottom: 16px;
            padding-top: 6px;
            border-radius: 10px;
        }
        #table-overflow{
            max-height: 500px;
        }
        .tbl-header{
            width:calc(100% - 17px);
            width:-webkit-calc(100% - 17px);
            width:-moz-calc(100% - 17px);
        }
    </style>
    <div class="content">
        <h1 class="text-primary-emphasis">Dashboard</h1>
        <div class="row me-1">
            @foreach ($card as $item)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row inline g-3">
                            <div class="col-auto">
                                <img src="img/{{ $item['images'] }}" alt="" >
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
            </div>
            @endforeach
        </div>
        <form action="" class="border border-2 mt-5 me-3 rounded ">
            <p class="fs-1 ps-3">User</p>
            <div class="table-header">
                <table class="table text-center">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Create Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="overflow-y-scroll" id="table-overflow">
                <table class="table text-center">
                    @foreach ($table_value as $item)
                        <tr>
                        <th scope="row">{{ $item['name'] }}</th>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['create_date'] }}</td>
                        <td><button class="btn btn-danger" type="button">Delete</button></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </form>
    </div>
@endsection