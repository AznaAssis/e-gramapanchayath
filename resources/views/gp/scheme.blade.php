@extends('gp.gpindex')
@section('gpindex')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
           <center>
           <h1>Add Schemes</h1>
           </center>
            <form action="/gp/schemeaction" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <label for="" class="form-label">
                            <h6>NAME</h6>
                        </label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Here...">
                    </div>
                    <div class="col-sm-6">
                        <label for="" class="form-label">
                            <h6> Amount</h6>
                        </label>
                        <input type="number" class="form-control" min="5000" max="500000" name="amount" id="" placeholder="Enter Here...">
                    </div>
                </div>
                <br><br>
                <div class=" col-sm-12">
                    <label for="" class="form-label">
                        <h6>About Scheme</h6>
                    </label>
                    <textarea name="about" class="form-control" placeholder="Enter Here..." rows="3"></textarea>
                </div>
                <br><br>
                <div class="row">

                    <div class=" col-sm-6">
                        <label for="" class="form-label">
                            <h6>Apply date</h6>
                        </label>
                        <input type="date" class="form-control" name="adate" id="">
                    </div>
                    <div class=" col-sm-6">
                        <label for="" class="form-label">
                            <h6>End date</h6>
                        </label>
                        <input type="date" class="form-control" name="enddate">
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <input type="submit" value="ADD" class="btn btn-danger btn-block">
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div>
    </div>
    <br><br><br>

    <div class="row">
        <center>
            <label for="" class="form-label">
                <h2>VIEW SCHEME</h2>
            </label>
        </center>
        <div class="col-sm-12">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">

                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">About</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Apply Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($scheme as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->about}}</td>
                                    <td>{{$value->amount}}</td>
                                    <td>{{$value->adate}}</td>
                                    <td>{{$value->enddate}}</td>
                                    <td>{{$value->status}}</td>
                                    <td><a class="btn btn-sm btn-primary" href="/gp/editscheme/{{$value->id}}">Edit</a></td>
                                    <td><a class="btn btn-sm btn-primary" href="/gp/deletescheme/{{$value->id}}">Delete</a></td>
                                    <td><a class="btn btn-sm"  href="/gp/viewscheme/{{$value->id}}">applications</a></td>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection