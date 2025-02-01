@extends('layouts.main')
@section('title', 'Admin Page')
@section('content-title', 'Instructor Management')
@section('content')
  <button class="bg-green-600 text-white w-fit px-2 py-3 rounded-lg mt-4 font-semibold text-sm flex items-center">
    <a href="/create-instructor" class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
      </svg>
      Tambah Data 
        </a>
      </button>
<div class="container py-3">
        <table class="w-full border-gray-300 rounded-lg shadow-md">
      <thead class="bg-textColorLight border-b-2 border-white">
        <tr class="">
          <th class="p-3 text-sm font-semibold tracking-wide text-center text-white">No.</th>
          <th class="p-3 text-sm font-semibold tracking-wide text-center text-white">Name</th>
          <th class="p-3 text-sm font-semibold tracking-wide text-center text-white">Email</th>
          <th class="p-3 text-sm font-semibold tracking-wide text-center text-white">Phone</th>
          <th class="p-3 text-sm font-semibold tracking-wide text-center text-white">Created-At</th>
          <th class="p-3 text-sm font-semibold tracking-wide text-center text-white">Updated-At</th>
          <th class="p-3 text-sm font-semibold tracking-wide text-center text-white">Actions</th>
        </tr>
      </thead>
      <tbody id="table-body">       
      </tbody>
    </table>
  </div>
</div>

<script>
const apiUrl = 'http://localhost:3000/api/instructors';
  // LIbrary Untuk Penghitungan Waktu
  function timeAgo(date){
    return moment(date).fromNow();
  }


  fetch(apiUrl)
  .then(response => {
    if(!response.ok){
      throw new Errror('Not Ok');
    }
    return response.json();
  })
  .then(responseData => {
    const data = responseData.data;
    const tableBody = document.getElementById('table-body');
    tableBody.innerHTML = '';
    data.forEach(instructors =>{
      const row = document.createElement('tr');
      if(instructors.id % 2 == 0){
        row.className = 'bg-gray-100 hover:bg-blue-50';
      }else{
        row.className = 'bg-white hover:bg-blue-50';
      }
      row.innerHTML = 
      `<td class="py-5 px-6 text-sm text-gray-700">${instructors.id}</td>
      <td class="py-5 px-6 text-sm text-gray-700">${instructors.firstname} ${instructors.lastname}</td>
      <td class="py-5 px-6 text-sm text-gray-700">${instructors.email}</td>
      <td class="py-5 px-6 text-sm text-gray-700">${instructors.phone_number}</td>
      <td class="py-5 px-6 text-sm text-gray-700">${timeAgo(instructors.created_at)}</td>
      <td class="py-5 px-6 text-sm text-gray-700">${timeAgo(instructors.updated_at)}</td>
      <td class="py-5 px-6 text-sm text-gray-700">
        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" >Edit</button>
        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 ml-2" onClick="deleteData(${instructors.id})">Delete</button>`;

      tableBody.appendChild(row);
    })
  })
  .catch(error => console.log('Error:', error));

  function deleteData(id){
    fetch(`${apiUrl}/${id}`, {
      method: 'DELETE'
    })
    .then(response => {
      if(!response.ok){
        throw new Error('Not Ok');
      }
      return response.json();
    })
    .then(responseData => {
      console.log(responseData);
      window.location.reload();
    })
    .catch(error => console.log('Error:', error));
  }
</script>
@endsection