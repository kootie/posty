@extends('layouts.app')


@section('content')

    <div class="flex justify-center">
        
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div>

                    <label for="firstname" class="sr-only">FirstName</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Your FirstName"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-2 @error('firstname') border-red-500 @enderror" value="{{ old('firstname') }}">
                    @error('firstname')
                        <div class="text-red-500 nt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror              
                </div>

                <div>

                    <label for="lastname" class="sr-only">LastName</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Your LastName"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-2 @error('lastname') border-red-500 @enderror" value="{{ old('lastname') }}">
                    @error('lastname')
                        <div class="text-red-500 nt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>

                    <label for="idnumber" class="sr-only">IDNumber</label>
                    <input type="text" name="idnumber" id="idnumber" placeholder="Your ID Number"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-2 @error('idnumber') border-red-500 @enderror" value="{{ old('idnumber') }}">
                    @error('idnumber')
                        <div class="text-red-500 nt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>

                    <label for="mobile" class="sr-only">Mobile</label>
                    <input type="text" name="mobile" id="mobile" placeholder="Your Mobile"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-2 @error('mobile') border-red-500 @enderror" value="{{ old('mobile') }}">
                    @error('mobile')
                        <div class="text-red-500 nt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>

                    <label for="county" class="sr-only">County</label>
                    <input type="text" name="county" id="county" placeholder="Your County"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-2 @error('county') border-red-500 @enderror" value="{{ old('county') }}">
                    @error('county')
                        <div class="text-red-500 nt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>

                    <label for="nationality" class="sr-only">Nationality</label>
                    <input type="text" name="nationality" id="nationality" placeholder="Your Nationality"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-2 @error('nationality') border-red-500 @enderror" value="{{ old('nationality') }}">
                    @error('nationality')
                        <div class="text-red-500 nt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>

                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-2 @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500 nt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>

                    <label for="username" class="sr-only">UserName</label>
                    <input type="text" name="username" id="username" placeholder="Your UserName"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-2 @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                    @error('username')
                        <div class="text-red-500 nt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>

                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-2 @error('password') border-red-500 @enderror" value="">
                    @error('password')
                        <div class="text-red-500 nt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>

                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password_confirmation" name="password_confirmation" id="password" placeholder="Repeat Your Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-2" value="">

                </div>
                <button types="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medum w-full">Register</button>
            </form>
        </div>

    </div>


@endsection 
