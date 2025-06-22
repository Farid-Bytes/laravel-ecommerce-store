<x-layout>
  <div>
<h1>All Brands</h1>
<p>
    <a href="/admin/add-brand" style="float: right; margin-right: 30px;">
        Add New Brand
    </a>
</p>
</div>
<table class="zigzag">
  <thead>
    <tr>
      <th class="header">Brands</th>
      <th class="header">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($brands as $brand )
    <tr>
      <td>{{$brand->name}}</td>
      <td>
        <a href="/admin/brand/edit/{{$brand->id}}">Edit</a> /
        <a href="/admin/brand/{{$brand->id}}">Delete</a>
      </td>
      
    </tr>      
    @endforeach
  
  </tbody>
</table>
</x-layout>