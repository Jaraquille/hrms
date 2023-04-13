<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">edit family planning assessment</h1>
            <hr>
            
            <form action="{{route('update-assessment')}}" method="post">
                @csrf
                {{-- hidden input for plan id --}}
                <input type="hidden" name="id" value="{{$assessment->id}}">
                <input type="hidden" name="plan_id" value="{{$assessment->family_planning_id}}">
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="date_of_visit" class="block text-sm font-medium text-gray-700">Date of Visit</label>
                      <div class="mt-1">
                        <input type="date" value="{{$assessment->date_of_visit}}" required name="date_of_visit" id="date_of_visit" autocomplete="date_of_visit" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="method" class="block text-sm font-medium text-gray-700">Method</label>
                      <div class="mt-1">
                        {{-- <input type="text" required name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                        <select name="method" id="method" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option {{$assessment->method == 'n/a' ? 'selected' : ''}} value="n/a">N/A</option>
                            <option {{$assessment->method == 'condom' ? 'selected' : ''}} value="condom">Condom</option>
                            <option {{$assessment->method == 'pills' ? 'selected' : ''}} value="pills">Pills</option>
                            <option {{$assessment->method == 'iud' ? 'selected' : ''}} value="iud">IUD</option>
                            <option {{$assessment->method == 'implant' ? 'selected' : ''}} value="implant">Implant</option>
                            <option {{$assessment->method == 'injection' ? 'selected' : ''}} value="injection">Injection</option>
                            <option {{$assessment->method == 'vaginal ring' ? 'selected' : ''}} value="vaginal ring">Vaginal Ring</option>
                            <option {{$assessment->method == 'vaginal sponge' ? 'selected' : ''}} value="vaginal sponge">Vaginal Sponge</option>
                            <option {{$assessment->method == 'diaphragm' ? 'selected' : ''}} value="diaphragm">Diaphragm</option>
                            <option {{$assessment->method == 'withdrawal' ? 'selected' : ''}} value="withdrawal">Withdrawal</option>
                            <option {{$assessment->method == 'abstinence' ? 'selected' : ''}} value="abstinence">Abstinence</option>
                            <option {{$assessment->method == 'other' ? 'selected' : ''}} value="other">Other</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="date_of_follow_up" class="block text-sm font-medium text-gray-700">Date of Follow-up Visit</label>
                      <div class="mt-1">
                        <input type="date" value="{{$assessment->date_of_follow_up}}" required name="date_of_follow_up" id="date_of_follow_up" autocomplete="date_of_follow_up" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                </div>
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols">
                    <div class="sm:col-span">
                      <label for="findings" class="block text-sm font-medium text-gray-700">Findings</label>
                      <div class="mt-1">
                        <input type="text" value="{{$assessment->findings}}" required name="findings" id="findings" autocomplete="findings" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</x-app-layout>
