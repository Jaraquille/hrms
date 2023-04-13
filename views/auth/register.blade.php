<x-authentication-layout>
    <div class="w-full text-center mb-10">
        <img src="{{ asset('images/logo.jpg ') }}" class="w-24 mx-auto" alt="">
        <h1 class="mt-2 uppercase">Health Record management system</h1>
    </div>
    <h1 class="text-lg text-slate-800 font-bold mb-6 uppercase text-center">{{ __('Create Account') }}</h1>
    <!-- Form -->
    <form method="POST" action="{{ route('registration') }}">
        @csrf
        {{-- <div class="space-y-4">
            <div>
                <x-jet-label for="name">{{ __('Full Name') }} <span class="text-rose-500">*</span></x-jet-label>
                <x-jet-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="email">{{ __('Email Address') }} <span class="text-rose-500">*</span></x-jet-label>
                <x-jet-input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
        </div>
        <div class="flex items-center justify-end mt-6">
            <x-jet-button>
                {{ __('Sign Up') }}
            </x-jet-button>                
        </div> --}}
        <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="space-y-8 divide-y divide-gray-200">
    <div class="space-y-8 divide-y divide-gray-200">
      <div>
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-2">
              <label for="sname" class="block text-sm font-medium text-gray-700">Surename</label>
              <div class="mt-1">
                <input type="text" required name="sname" id="sname" autocomplete="sname2" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
    
            <div class="sm:col-span-2">
              <label for="mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
              <div class="mt-1">
                <input type="text" required name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
    
            <div class="sm:col-span-2">
              <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
              <div class="mt-1">
                <input type="text" required name="fname" id="fname" autocomplete="fname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
        </div>
        <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
            <div class="sm:col-span-2">
              <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
              <div class="mt-1">
                <input type="date" required name="date_of_birth" id="date_of_birth" autocomplete="date_of_birth" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
            </div>
    
            <div class="sm:col-span-2">
              <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
              <div class="mt-1">
                <input type="number" required name="age" id="age" autocomplete="age" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
            </div>
    
            <div class="sm:col-span-4">
              <label for="relationship_with_family_head" class="block text-sm font-medium text-gray-700">Relationship with Family Head</label>
              <div class="mt-1">
                <input type="text" required name="relationship_with_family_head" id="relationship_with_family_head" autocomplete="relationship_with_family_head" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
        </div>
        <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-2">
              <label for="civil_status" class="block text-sm font-medium text-gray-700">Civil Status</label>
              <div class="mt-1">
                {{-- <input type="text" required name="civil_status" id="civil_status" autocomplete="civil_status" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                <select name="civil_status" id="civil_status" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  <option value="single">Single</option>
                  <option value="married">Married</option>
                  <option value="widowed">Widowed</option>
                  <option value="separated">Separated</option>
                  <option value="divorced">Divorced</option>
                </select>
              </div>
            </div>
    
            <div class="sm:col-span-2">
              <label for="mobile_number" class="block text-sm font-medium text-gray-700">Mobile Number</label>
              <div class="mt-1">
                <input type="text" required name="mobile_number" id="mobile_number" autocomplete="mobile_number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
    
            <div class="sm:col-span-2">
              <label for="is_4ps" class="block text-sm font-medium text-gray-700">Occupation</label>
              <div class="mt-1">
                <input type="text" required name="occupation" id="occupation" autocomplete="occupation" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
        </div>
        <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
            <div class="sm:col-span-2">
              <label for="religion" class="block text-sm font-medium text-gray-700">Religion</label>
              <div class="mt-1">
                <input type="text" required name="religion" id="religion" autocomplete="religion" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
            </div>
    
            <div class="sm:col-span-2">
              <label for="citizenship" class="block text-sm font-medium text-gray-700">Citizenship</label>
              <div class="mt-1">
                <input type="text" required name="citizenship" id="citizenship" autocomplete="citizenship" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
        </div>
        <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-2">
              <label for="household_number" class="block text-sm font-medium text-gray-700">Household Number</label>
              <div class="mt-1">
                <input type="text" required name="household_number" id="household_number" autocomplete="household_number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
                    <option value="{{ $zone }}">Purok {{ $zone }}</option>
                  @endforeach
                </select>
              </div>
            </div>
    
            <div class="sm:col-span-2">
              <label for="is_4ps" class="block text-sm font-medium text-gray-700">4PS Member</label>
              <div class="mt-1">
                <select name="is_4ps" required id="is_4ps" class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="1">YES</option>
                    <option value="0">NO</option>
                  </select>
                {{-- <input type="text" name="is_4ps" id="is_4ps" autocomplete="postal-code" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
              </div>
            </div>
        </div>
        <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols">
            <div class="sm:col-span">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <div class="mt-1">
                <input type="email" required name="email" id="email" autocomplete="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
        {{-- <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
          <div class="sm:col-span-4">
            @if ($errors->any())
              <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">There were some problems with your input.</span>
                <ul class="list-disc list-inside">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
          </div>
        </div> --}}


        <div class="flex items-center justify-center mt-6">
            <x-jet-button>
                {{ __('Sign Up') }}
            </x-jet-button>                
        </div>
      </div>
  
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-6">
                    <label class="flex items-start">
                        <input type="checkbox" class="form-checkbox mt-1" name="terms" id="terms" />
                        <span class="text-sm ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm underline hover:no-underline">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm underline hover:no-underline">'.__('Privacy Policy').'</a>',
                            ]) !!}                        
                        </span>
                    </label>
                </div>
            @endif        
    </form>
    <x-jet-validation-errors class="mt-4" />  
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200 text-center">
        <div class="text-sm">
            {{ __('Have an account?') }} <a class="font-medium text-indigo-500 hover:text-indigo-600" href="{{ route('login') }}">{{ __('Sign In') }}</a>
        </div>
    </div>
</x-authentication-layout>
