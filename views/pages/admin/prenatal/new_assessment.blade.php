<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">new prenatal assessment</h1>
            <hr>
            
            <form action="{{route('create-assessment2')}}" method="post">
                @csrf
                {{-- hidden input for prenatal id --}}
                <input type="hidden" name="prenatal_id" value="{{$prenatal->id}}">
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                    <div class="sm:col-span-2">
                      <label for="date_of_visit" class="block text-sm font-medium text-gray-700">Date of Visit</label>
                      <div class="mt-1">
                        <input type="date" required value="{{old('date_of_visit')}}" name="date_of_visit" id="date_of_visit" autocomplete="date_of_visit" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="date_of_follow_up" class="block text-sm font-medium text-gray-700">Date of Follow-up Visit</label>
                      <div class="mt-1">
                        <input type="date" required value="{{old('date_of_follow_up')}}" name="date_of_follow_up" id="date_of_follow_up" autocomplete="date_of_follow_up" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                </div>
                <h1 class="mt-10 mb-2">Subjective/Objective</h1>
                <hr>
                {{-- 6 column --}}
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-5">
                    {{-- 2nd column --}}
                    <div class="sm:col-span-1">
                    <label for="wt" class="block text-sm font-medium text-gray-700">WT:</label>
                    <div class="mt-1">
                        <input type="text" name="wt" value="{{old('wt')}}" id="wt" autocomplete="wt" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    {{-- 3rd column --}}
                    <div class="sm:col-span-1">
                    <label for="temp" class="block text-sm font-medium text-gray-700">TEMP:</label>
                    <div class="mt-1">
                        <input type="text" name="temp" value="{{old('temp')}}" id="temp" autocomplete="temp" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    {{-- 4th column --}}
                    <div class="sm:col-span-1">
                    <label for="pr" class="block text-sm font-medium text-gray-700">PR:</label>
                    <div class="mt-1">
                        <input type="text" name="pr" value="{{old('pr')}}" id="pr" autocomplete="pr" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    {{-- 5th column --}}
                    <div class="sm:col-span-1">
                    <label for="rr" class="block text-sm font-medium text-gray-700">RR:</label>
                    <div class="mt-1">
                        <input type="text" name="rr" value="{{old('rr')}}" id="rr" autocomplete="rr" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    </div>
                    
                    {{-- 6th column --}}
                    <div class="sm:col-span-1">
                    <label for="bp" class="block text-sm font-medium text-gray-700">BP:</label>
                    <div class="mt-1">
                        <input type="text" name="bp" value="{{old('bp')}}" id="bp" autocomplete="bp" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    </div>  
                </div>  
                <h1 class="mt-10 mb-2">Assessment/Diagnosis</h1>
                <hr>
                {{-- 6 column --}}
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                    {{-- 1st column --}}
                    <div class="sm:col-span-1">
                    <label for="aog" class="block text-sm font-medium text-gray-700">AOG:</label>
                    <div class="mt-1">
                        <input type="text" name="aog" value="{{old('aog')}}" id="aog" autocomplete="aog" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    </div>
                    {{-- 2nd column --}}
                    <div class="sm:col-span-1">
                    <label for="fh" class="block text-sm font-medium text-gray-700">FH:</label>
                    <div class="mt-1">
                        <input type="text" name="fh" value="{{old('fh')}}" id="fh" autocomplete="fh" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    {{-- 3rd column --}}
                    <div class="sm:col-span-1">
                    <label for="fhb" class="block text-sm font-medium text-gray-700">FHB:</label>
                    <div class="mt-1">
                        <input type="text" name="fhb" value="{{old('fhb')}}" id="fhb" autocomplete="fhb" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    {{-- 4th column --}}
                    <div class="sm:col-span-1">
                    <label for="press" class="block text-sm font-medium text-gray-700">PRES:</label>
                    <div class="mt-1">
                        <input type="text" name="press" value="{{old('press')}}" id="press" autocomplete="press" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    </div>
                </div>

                  
                <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols">
                    <div class="sm:col-span">
                      <label for="recommendation" class="block text-sm font-medium text-gray-700">Plans/Recommendation</label>
                      <div class="mt-1">
                        <textarea id="recommendation" name="recommendation" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md">{{old('recommendation')}}</textarea>
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
