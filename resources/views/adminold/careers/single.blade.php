<div class="card-datatable table-responsive">
    <table id="technicians" class="datatables-demo table table-striped table-bordered">
        <tbody>
        <tr>
            <th>Title</th>
            <td>{{$career->title}}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{$career->description}}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td><img width="300" src="{{asset("uploads/works/$career->image")}}" alt=""></td>
        </tr>
        </tbody>
    </table>
</div>
