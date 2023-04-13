<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">new immunization assessment</h1>
            <hr>
            
            <form action="{{route('create-assessment3')}}" method="post">
                @csrf

                <input type="hidden" name="immunization_id" value="{{$immunization->id}}">
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                    <div class="sm:col-span-2">
                      <label for="date_of_visit" class="block text-sm font-medium text-gray-700">Date of Visit</label>
                      <div class="mt-1">
                        <input type="date" required name="date_of_visit" id="date_of_visit" autocomplete="date_of_visit" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="date_of_follow_up" class="block text-sm font-medium text-gray-700">Date of Follow-up Visit</label>
                      <div class="mt-1">
                        <input type="date" required name="date_of_follow_up" id="date_of_follow_up" autocomplete="date_of_follow_up" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
