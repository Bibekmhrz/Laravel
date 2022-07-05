@extends('welcome')
@section('main_content')


 <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Simple Full Width Table</h3>

                <div class="card-tools">
                  <a href= "{{ route('students.create') }}" class="btn btn-primary btn-small">
                    CREATE
</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <td>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($students as $student)
                   <tr>
                    <td>{{ $student->id}}</td>
                    <td>{{ $student->name }} </td>
                    <td>{{ $student->email}} </td>
                    <td>{{ $student->mobile}} </td>
                    <td>
                      <button class="btn btn-sm btn-danger">
                        DELETE
</button> 
<button class="btn btn-sm btn-warning">
                        EDIT
</button> 
</td>
</tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              </div>
            <!-- /.card -->
          
@endsection          

