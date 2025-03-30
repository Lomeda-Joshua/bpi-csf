@extends('super_admin.layouts.layout')

@section('contents')

<style>
    .btn-warning{
      background-color: #D22B2B !important;
    }
</style>

<a href="{{ route('super.control.number') }}" class="btn btn-danger">Back</a>

<div class="card">
    <div class="card-body">
    <h3><b>Create new Office</b></h3><br>
      <form method="post" action="{{ route('super.store-control.number') }}">
        @csrf
        @method('post')

        <div class="mb-3">    
          <label for="section_office" class="form-label">Choose the section to set:</label>
            <select id="section_office" name="section_office" class="form-control" style="padding:10px;" required>
                <option selected disabled>-- Section to set control number --</option>
                @foreach( $selectOffice as $item )
                <option value="{{$item->id}}">{{ $item->office_name }}</option>
                @endforeach
            </select>
            <br>

           <h5 class="form-label">Set control number</h5>

           <label for="control_number_year" class="form-label">Set control number year : </label>
           <input type="number" maxlength="10" class="form-control" id="control_number_year" name="control_number_year" aria-describedby="control_number" required min="0" max="9999" placeholder="0000" step="00000" />

           <label for="control_number_month" class="form-label">Set control number month : </label>
          <input type="number" class="form-control" id="control_number_month" name="control_number_month" aria-describedby="control_number" required min="0" max="12" placeholder="00" step="00000" />

           <label for="control_number_count" class="form-label">Set control number count : </label>
           <input type="number" class="form-control" id="control_number_count" name="control_number_count" aria-describedby="control_number" required min="0" max="99999" placeholder="control format count" step="00000" />


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