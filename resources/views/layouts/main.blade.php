<div class=" ">
  <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
<form action="{{ route('create') }}" method="get" class="mb-5 mt-0.5">
@csrf
<button class="bg-blue-500 text-white px-4 py-2 rounded-md ">Add new Student</button>
</form>


<table class="w-[70%] mx-auto border border-gray-300">
  <thead class="bg-gray-100">
    <tr>
      <th class="px-4 py-2 border-b">Name</th>
      <th class="px-4 py-2 border-b">Email</th>
      <th class="px-4 py-2 border-b">Phone</th>
      <th class="px-4 py-2 border-b">Groupe</th>
      <th class="px-4 py-2 border-b">Filiere</th>
      <th class="px-4 py-2 border-b">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
        <td class="px-4 py-2 border-b text-center">{{ $student->name }}</td>
        <td class="px-4 py-2 border-b text-center">{{ $student->email }}</td>
        <td class="px-4 py-2 border-b text-center">{{ $student->phone }}</td>
        <td class="px-4 py-2 border-b text-center">{{ $student->groupe }}</td>
        <td class="px-4 py-2 border-b text-center">{{ $student->filiere }}</td>
        <td class="px-4 py-2 border-b text-center">
         <a href="{{route('edit',$student->id)}}" class="text-blue-500 hover:text-blue-700">Edit</a> |
         <form action={{route('destroy' ,$student->id)}} method="POST" style="display:inline;">
             @csrf
             @method('DELETE')
             <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
         </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
    
  </div></div>
