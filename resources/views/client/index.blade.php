@extends('layout.app')

@section('title', 'Tranasction')

@section('client_active', 'active')

@section('content')
    {{-- <div class="row">
        <div class="col-12">
            <a class="btn btn-success" href="{{ url('client/create') }}" >Create Client</a>
        </div>
    </div> --}}
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">From Bank</th>
                                    <th scope="col">To Bank</th>
                                    <th scope="col">Agent</th>
                                    <th scope="col">Transaction Amount</th>
                                    <th scope="col">Exchange Rate</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>KBZ pay</td>
                                    <td>K Bank</td>
                                    <td>Agent 1</td>
                                    <td>1,000</td>
                                    <td>83</td>
                                    <td><span class="badge badge-success">success</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>AYA pay</td>
                                    <td>Bangkok Bank</td>
                                    <td>Agent 2</td>
                                    <td>5,000</td>
                                    <td>85</td>
                                    <td><span class="badge badge-warning">pending</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>CB pay</td>
                                    <td>Bangkok Bank</td>
                                    <td>Agent 1</td>
                                    <td>1,000</td>
                                    <td>83</td>
                                    <td><span class="badge badge-danger">fail</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>KBZ pay</td>
                                    <td>K Bank</td>
                                    <td>Agent 1</td>
                                    <td>1,000</td>
                                    <td>83</td>
                                    <td><span class="badge badge-success">success</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>KBZ pay</td>
                                    <td>K Bank</td>
                                    <td>Agent 1</td>
                                    <td>1,000</td>
                                    <td>83</td>
                                    <td><span class="badge badge-success">success</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>KBZ pay</td>
                                    <td>K Bank</td>
                                    <td>Agent 1</td>
                                    <td>1,000</td>
                                    <td>83</td>
                                    <td><span class="badge badge-success">success</span></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>KBZ pay</td>
                                    <td>K Bank</td>
                                    <td>Agent 1</td>
                                    <td>1,000</td>
                                    <td>83</td>
                                    <td><span class="badge badge-success">success</span></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>KBZ pay</td>
                                    <td>K Bank</td>
                                    <td>Agent 1</td>
                                    <td>1,000</td>
                                    <td>83</td>
                                    <td><span class="badge badge-success">success</span></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>KBZ pay</td>
                                    <td>K Bank</td>
                                    <td>Agent 1</td>
                                    <td>1,000</td>
                                    <td>83</td>
                                    <td><span class="badge badge-success">success</span></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>KBZ pay</td>
                                    <td>K Bank</td>
                                    <td>Agent 1</td>
                                    <td>1,000</td>
                                    <td>83</td>
                                    <td><span class="badge badge-success">success</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
