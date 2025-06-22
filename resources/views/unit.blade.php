<x-layout>
<div>
<h1>All Units</h1>
<p>
    <a href="/admin/add-unit" style="float: right; margin-right: 30px;">
        Add New Unit
    </a>
</p>
</div>

<table class="zigzag">
  <thead>
    <tr>
      <th class="header">Units</th>
      <th class="header">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($units as $unit)
    <tr>
      <td>{{$unit->name}}</td>
      <td><a href="/admin/unit/edit/{{$unit->id}}">Edit</a> / 
      <a href="/admin/unit/{{$unit->id}}">Delete</a></td>
    </tr> 
    @endforeach
  
  </tbody>
</table>
</x-layout>