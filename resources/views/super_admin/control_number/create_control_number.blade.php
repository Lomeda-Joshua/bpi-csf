@extends('super_admin.layouts.layout')

@section('contents')

<div class="card">
    <div class="card-body">
    <h3><b>Create new Office</b></h3><br>
      <form method="post" action="{{ route('store-control.number') }}">
        @csrf
        @method('post')

        <div class="mb-3">    
          <label for="control_number" class="form-label">Choose the section to set:</label>
            <select id="section_set" name="section_set" class="form-control" style="padding:10px;" required>
                <option selected disabled>-- Select section to set control number --</option>
                @foreach( $selectOffice as $item )
                <option value="{{$item->id}}">{{ $item->office_name }}</option>
                @endforeach
            </select>
            <br>

           <label for="control_number" class="form-label">Set control number</label>
           <input type="number" class="form-control" id="control_number" name="control_number" aria-describedby="control_number" required disabled  min="00000" max="99999" value="00000" placeholder="control format 00000" step="00000" />
            @error('control_number')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            
        </div>
        <button type="submit" class="btn btn-primary">Set control number</button>
      </form>

    </div>
  </div>

  <script>
    $("document").ready(function(){
        
        $("#section_set").on("change",function(){
            $("#control_number").removeAttr("disabled");
        });    


    });
  </script>

@endsection