<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Status</th>
      <th scope="col">Update on</th>
      
    </tr>
  </thead>
  <tbody>
@forelse($posts as $key=> $post)
    <tr>
      <th scope="row">{{ $key+1}}</th>
      <td>{{ $post['title'] }}</td>
      <td>{{ 'https://asasakitchens.com/blog/'.$post['slug'] }}</td>
      <td>Published</td>
      <td>{{ date('Y-m-d',strtotime($post['created_at'])) }}</td>
    </tr>
    @empty
@endforelse
  </tbody>
</table>