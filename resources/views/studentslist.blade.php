

<div class="card mb-3">
  <img class="card-img-top" src="https://images.pexels.com/photos/5088191/pexels-photo-5088191.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">List Of Students</h5>
    <p class="card-text">You can find here all the informations about students in the system.</p>
    
  
    <table class="table ">
        <thead class="thead-light">
          <tr>
            <th scope="col">CNE</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            <th scope="col">Oerations</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
          <tr>
            
            <td>{{ $student->cne }}</td>
            <td>{{ $student->firstName }}</td>
            <td>{{ $student->lastName }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->speciality }}</td>
            
            <td>
             
             <a href="{{ url('/edit/'.$student->id ) }}" class="btn btn-sm  btn-warning">Edit</a>
             
            </td>
            
          </tr>
          @endforeach
        </tbody>
    </table>
    </div>
  </div>
  
