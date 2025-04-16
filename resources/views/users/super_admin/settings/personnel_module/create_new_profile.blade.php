@extends('users.super_admin.layouts.layout')

@section('contents')

<a href="{{ route('super.personnel') }}" class="btn btn-danger">Return</a>
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Authorized Personnel</h5>


        <form method="POST" action="{{ route('super.admin-store.new.user') }}">
            @csrf
    
        
            <!-- first Name -->
          
            <div class="mt-4">
                    <x-input-label for="first_name" :value="__('First name')" />
                    <input class="block mt-1 w-full form-control" id="first_name" name="first_name" type="text" :value="old('first_name')" required autofocus autocomplete="firstname" />                    
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>
            

            <!-- last Name -->
            
            <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last name')" />
                    <input class="block mt-1 w-full form-control" id="last_name" name="last_name" type="text" :value="old('last_name')" required autofocus autocomplete="lastname" />                    
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                  </div>
            
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <input id="email" class="block mt-1 w-full form-control" type="email" name="email" required autofocus autocomplete="email" />                    
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            

            <!-- Office assignment -->

            @if( empty(count($office)) )
            
            <br>
                <a href="{{ route('super.office') }}" class="btn btn-primary">To create a new office</a>
                
            @else
                <br>
                <div>  
                    <x-input-label for="office_id" :value="__('Office assignment')" />                
                    <select class="block mt-1 w-full form-control" name="office_id" required>
                        <option>-- Select office to be assigned --</option>
                            @foreach( $office as $item )
                                <option value="{{$item->id}}">{{ $item->office_name }}</option>
                            @endforeach
                    </select>

                    <x-input-error :messages="$errors->get('office_id')" class="mt-2" />
                </div>
               

            @endif

           
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autofocus autocomplete="new-password" />                    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" :value="old('password_confirmation')" required autofocus autocomplete="new-password" />                    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            
    
            <div class="flex items-center justify-end mt-4"> 
                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
            </div>
        </form>

    </div>
</div>


@endsection