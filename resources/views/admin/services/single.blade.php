<div class="card-datatable table-responsive">
    <table id="technicians" class="datatables-demo table table-striped table-bordered">
        <tbody>
        <tr>
            <td class="kt-font-info">Title</td>
            <td><?php echo $post->title; ?></td>
        </tr>
        <tr>
            <td class="kt-font-info">Slug</td>
            <td><?php echo $post->slug; ?></td>
        </tr>
        @if($post->author_id)
        <tr>
            <td class="kt-font-info">Author</td>
            <td><?php echo $post->admin->name; ?></td>
        </tr>
        @endif
        <tr>
            <td class="kt-font-info">Content</td>
            <td><?php echo stripslashes(strip_tags($post->content))  ?></td>
        </tr>
        <tr>
            <td class="kt-font-info">Image</td>
            <td> <img src="{{asset('uploads/post/'.$post->featured_image)}}" style=" width:120px;max-width:100%;margin-top:12px" alt="Image is not found." /></td>
        </tr>

        </tbody>
    </table>
</div>
