<x-layout>
<div><h1>All Categories</h1>
<p>
    <a href="/admin/add-category" style="float: right; margin-right: 30px;">
        Add New Category
    </a>
</p>
</div>
<table class="zigzag">
  <thead>
    <tr>
      <th class="header">Categories</th>
      <th class="header">Action</th>
    </tr>
  </thead>
  <tbody style="background-color: blue;">
  @foreach ($categories as $category)
    <tr>
      <td>{{$category->name}}</td>
      <td>
      <a href="/admin/category/edit/{{ $category->id }}">Edit</a> / 
      <a href="/admin/category/{{$category->id}}">Delete</a></td>
      
    </tr>
    @endforeach

  </tbody>
</table>
</x-layout>