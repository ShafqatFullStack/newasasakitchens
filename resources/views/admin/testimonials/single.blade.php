<div class="card-datatable table-responsive">
    <table id="technicians" class="datatables-demo table table-striped table-bordered">
        <tbody>
        <tr>
            <th>Name</th>
            <td>{{$testimonial->name}}</td>
        </tr>
        <tr>
            <th>Designation</th>
            <td>{{$testimonial->designation}}</td>
        </tr>
        <tr>
            <th>Comment</th>
            <td>{{$testimonial->comment}}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td><img src="{{asset("uploads/testimonials/$testimonial->image")}}" alt=""></td>
        </tr>
        </tbody>
    </table>
</div>
