<div>
@include('livewire.create')
@include('livewire.update')

 <section>
   <div class="container">
    <div class="row">
    @if(session()->has('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
      <div class="card">
        <div class="card-header">
        <div class="container">
  <h2>Modal Example
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
  <!-- Trigger the modal with a button -->
        </div>
        
<!-- Modal -->

        <div class="card-body">
        <table class="table table-striped">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <td>{{$student->firstname}}</td>
      <td>{{$student->lastname}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->phone}}</td>
      <td>
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addstudentmodal1" wire:click.prevent="edit({{$student->id}})">Edit</button>
      <button type="button" class="btn btn-danger"  wire:click.prevent="delete({{$student->id}})">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        
        </div>
      </div>
    </div>
  </div> 
</section>
</div>
</body>