<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">new Patient</h1>
            <hr>
            
            <form action="{{route('create-patient')}}" method="post">
                @csrf
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="sname" class="block text-sm font-medium text-gray-700">Surename</label>
                      <div class="mt-1">
                        <input type="text" required name="sname" id="sname" autocomplete="sname" value="{{old('sname')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
                      <div class="mt-1">
                        <input type="text" required name="mname" id="mname" autocomplete="mname" value="{{old('mname')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
                      <div class="mt-1">
                        <input type="text" required name="fname" id="fname" autocomplete="fname" value="{{old('fname')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                </div>
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                    <div class="sm:col-span-2">
                      <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                      <div class="mt-1">
                        <input type="date" required name="date_of_birth" id="date_of_birth" autocomplete="date_of_birth" value="{{old('date_of_birth')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                      <div class="mt-1">
                        <input type="number" required name="age" id="age" autocomplete="age" value="{{old('age')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                </div>
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                      <div class="mt-1">
                          {{-- <input type="date" name="gender" id="gender" autocomplete="birth_date" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                          {{-- dropdown --}}
                          <select name="gender" required id="gender" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="male" {{old('gender') == 'male' ? 'selected' : ''}}>Male</option>
                            <option value="female" {{old('gender') == 'female' ? 'selected' : ''}}>Female</option>
                          </select>
                        </div>
                    </div>
            
                    <div class="sm:col-span-4">
                      <label for="relationship_with_family_head" class="block text-sm font-medium text-gray-700">Relationship with Family Head</label>
                      <div class="mt-1">
                        <input type="text" required name="relationship_with_family_head" id="relationship_with_family_head" autocomplete="relationship_with_family_head" value="{{old('relationship_with_family_head')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                </div>
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="civil_status" class="block text-sm font-medium text-gray-700">Civil Status</label>
                      <div class="mt-1">
                        {{-- <input type="text" required name="civil_status" id="civil_status" autocomplete="civil_status" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                        <select name="civil_status" id="civil_status" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="single" {{old('civil_status') == 'single' ? 'selected' : ''}}>Single</option>
                          <option value="married" {{old('civil_status') == 'married' ? 'selected' : ''}}>Married</option>
                          <option value="widowed" {{old('civil_status') == 'widowed' ? 'selected' : ''}}>Widowed</option>
                          <option value="separated" {{old('civil_status') == 'separated' ? 'selected' : ''}}>Separated</option>
                          <option value="divorced" {{old('civil_status') == 'divorced' ? 'selected' : ''}}>Divorced</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="mobile_number" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                      <div class="mt-1">
                        <input type="text" required name="mobile_number" id="mobile_number" autocomplete="mobile_number" value="{{old('mobile_number')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="is_4ps" class="block text-sm font-medium text-gray-700">Occupation</label>
                      <div class="mt-1">
                        <input type="text" required name="occupation" id="occupation" autocomplete="occupation" value="{{old('occupation')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                </div>
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                    <div class="sm:col-span-2">
                      <label for="religion" class="block text-sm font-medium text-gray-700">Religion</label>
                      <div class="mt-1">
                        <input type="text" required name="religion" id="religion" autocomplete="religion" value="{{old('religion')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="citizenship" class="block text-sm font-medium text-gray-700">Citizenship</label>
                      <div class="mt-1">
                        <input type="text" required name="citizenship" id="citizenship" autocomplete="citizenship" value="{{old('citizenship')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                </div>
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="household_number" class="block text-sm font-medium text-gray-700">Household Number</label>
                      <div class="mt-1">
                        <input type="text" required name="household_number" id="household_number" autocomplete="household_number" value="{{old('household_number')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="zone_purok" class="block text-sm font-medium text-gray-700">Zone/Purok</label>
                      <div class="mt-1">
                        {{-- <input type="text" name="zone_purok" id="zone_purok" autocomplete="zone_purok" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                        <select name="zone_purok" required id="zone_purok" autocomplete="zone_purok" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          @foreach ([
                            "1", 
                            "1a",
                            "2a",
                            "2b",
                            "2c",
                            "3",
                            "3a",
                            "3b",
                            "4",
                            "4a",
                            "4b",
                            "4c",
                            "5",
                            "6",
                            "7",
                            "8",
                            "8a",
                            "9",
                            "10",
                            "11",
                            "12",
                        ] as $zone)
                            <option value="{{$zone}}" {{old('zone_purok') == $zone ? 'selected' : ''}}>{{$zone}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="is_4ps" class="block text-sm font-medium text-gray-700">4PS Member</label>
                      <div class="mt-1">
                        <select name="is_4ps" required id="is_4ps" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="1" {{old('is_4ps') == 1 ? 'selected' : ''}}>Yes</option>
                          <option value="0" {{old('is_4ps') == 0 ? 'selected' : ''}}>No</option>
                        </select>
                        {{-- <input type="text" name="is_4ps" id="is_4ps" autocomplete="postal-code" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                      </div>
                    </div>
                </div>
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols">
                    <div class="sm:col-span">
                      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                      <div class="mt-1">
                        <input type="email" required name="email" id="email" autocomplete="email" value="{{old('email')}}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                </div>
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                  {{-- PAssword --}}
                  <div class="sm:col-span-2">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                      <input type="password" required name="password" id="password" autocomplete="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
                  {{-- Confirm Password --}}
                  <div class="sm:col-span-2">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <div class="mt-1">
                      <input type="password" required name="password_confirmation" id="password_confirmation" autocomplete="password_confirmation" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
                </div>


                {{-- display errors --}}
                @if ($errors->any())
                    <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                            <div class="mt-1">
                                <ul class="list-disc list-inside text-sm text-red-600">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif


                {{-- display success --}}
                @if (session('success'))
                    <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                            <div class="mt-1">
                                <ul class="list-disc list-inside text-sm text-green-600">
                                    <li>{{ session('success') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif


                {{-- submit buttom --}}
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-6">
                        <div class="mt-1 flex justify-end">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</x-app-layout>
