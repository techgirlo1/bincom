<html>
<head>
    <title>Results</title>

    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>

@vite(['resources/js/app.js'])

</head>
<body>




<div class="row">
<div class="col-lg-8 py-3">
@if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="card" style=" background-color:white">
        <div class="card-header">
            <h4 class="card-title">ALL POLLING UNIT RESULT</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md table table-dark table-striped">
                    <thead>
                        <tr>
                            
                            
                            <th><strong>Result_id </strong></th>
                            <th><strong>Polling_unit_uniqueid</strong></th>
                            <th><strong>Party_abbreviation</strong></th>
                            <th><strong>Party_score</strong></th>
                           
                        
                        </tr>
                    </thead>
                    <tbody style="color:black">
                        
                        @foreach($pollingunit as $pollingunits)
                        <tr>
                          
                            <td>{{ $pollingunits->result_id   }}</td>
                            <td>{{ $pollingunits->polling_unit_uniqueid  }}</td>
                            <td>{{ $pollingunits->party_abbreviation  }}</td>
                            <td>{{ $pollingunits->party_score  }}</td>
                           
                        </tr>
                        @endforeach
                       
                    </tbody>
                    
                </table>
                {{ $pollingunit->links('pagination::bootstrap-5') }}
            </div>
        </div>
        
    </div>
</div>


<div class='col-md-4 py-3'>
        <div class="card">
        <div class='card-header'>Add New PU Result</div>
         <div class='card-body'>
         
        <form action="{{route('add_result')}}" method="POST">
        @csrf 
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Polling_unit_uniqueid</label>
    <input type="text" class="form-control" name="polling_unit_uniqueid">
    
    
             @error('polling_unit_uniqueid')
               <span class="text-danger">{{$message}}</span>
             @enderror
          
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Party</label>
    <input type="text" class="form-control" name="party_abbreviation">
    
    
             @error('party_abbreviation')
               <span class="text-danger">{{$message}}</span>
             @enderror
          
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Party Score</label>
    <input type="number" class="form-control" name="party_score">
    
    
             @error('party_score')
               <span class="text-danger">{{$message}}</span>
             @enderror
          
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter By User</label>
    <input type="text" class="form-control" name="entered_by_user">
    
    
             @error('entered_by_user')
               <span class="text-danger">{{$message}}</span>
             @enderror
          
  </div>
 
  
  <button type="submit" class="btn btn-primary">Add New PU</button>
</form>
</div>
       </div>
       </div>
       
    
    
    </div>
       </div>

       
    
</body>
</html>