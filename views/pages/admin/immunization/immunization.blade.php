<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">Immunization</h1>
            <hr>

            <div class="my-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4 flex items-center">
                <div class="sm:col-span-1 flex justify-end">
                    <div class="p-4 shadow-lg rounded-lg bg-gray-100">
                        <h1 class="mb-3">LEGENDS</h1>
                        <ul>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-yellow-300 mr-3"></div>
                                BCG
                            </li>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-blue-500 mr-3"></div>
                                Hepatitis B
                            </li>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-amber-500 mr-3"></div>
                                DPT 1
                            </li>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-green-500 mr-3"></div>
                                DPT 2
                            </li>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-gray-500 mr-3"></div>
                                DPT 3
                            </li>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-purple-500 mr-3"></div>
                                Polio
                            </li>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-red-500 mr-3"></div>
                                Measles 1
                            </li>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-pink-500 mr-3"></div>
                                Measles 2
                            </li>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-orange-500 mr-3"></div>
                                Tetanus Toxiod
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <div class="h-96 overflow-hidden p-4 flex justify-start">
                        <canvas class="p-10" id="chartPie"></canvas>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-4">
                {{-- search user input group --}}
                <div class="col-span-2">
                    <label for="search-user" class="block text-sm font-medium text-gray-700">Search User</label>
                    <form action="{{route('family-planning-search')}}" method="post" class="mt-1 flex rounded-md shadow-sm">
                        @csrf
                        <input type="text" value="{{$q ?? ''}}" name="q" id="q" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-l-md sm:text-sm border-gray-300" placeholder="Search user">
                        <button class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-r-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:z-10 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
    
                <div class="overflow-hidden mt-3 w-full shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                      <thead class="bg-gray-50">
                        <tr>
                          <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">No.</th>
                          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Name</th>
                          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Age</th>
                          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Sex</th>
                          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">4PS/NHTS</th>
                          <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 text-right">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white">
                        <!-- Odd row -->
                        @foreach ($patients as $patient)
                            <tr class="{{ $loop->iteration % 2 != 0 ? 'bg-white' : 'bg-gray-50' }}">
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $loop->iteration }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$patient->name}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$patient->age}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 uppercase">{{substr($patient->gender, 0, 1)}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$patient->is_4ps ? "4PS" : "NHTS"}}</td>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <a href="immunization-form/{{$patient->id}}" class="text-indigo-600 hover:text-indigo-900 uppercase">select</a>
                                </td>
                             </tr>
                        @endforeach
          
                        <!-- More people... -->
                      </tbody>
    
                        @if ($patients->hasPages())
                            <tfoot class="text-xs text-slate-400 bg-slate-50 rounded-sm">
                                <tr>
                                    <td colspan="6" class="p-2">
                                        {{ $patients->links() }}
                                    </td>
                                </tr>
                            </tfoot>
                        @endif
                    </table>
                  </div>
              </div>
  
  
                {{-- display success --}}
                  @if (session('success'))
                      <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">Success!</strong>
                          <span class="block sm:inline">{{ session('success') }}</span>
                      </div>
                  @endif


                    <div class="overflow-auto shadow ring-1 ring-black ring-opacity-5 md:rounded-lg mt-10">
                      <div class="p-2">
                          <h1 class="font-bold">Immunization Records</h1>
                          {{-- filter by from date to date --}}
                          {{-- <form action="{{route('family-planning-filter')}}" method="post" class="flex flex-col md:flex-row justify-between items-center">
                              @csrf
                              <div class="flex flex-col md:flex-row justify-between items-center">
                                  <div class="flex flex-col md:flex-row justify-between items-center">
                                      <label for="from" class="block text-sm font-medium text-gray-700 mr-2">From</label>
                                      <input type="date" name="from" value="{{$from ?? ''}}" id="from" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                  </div>
                                  <div class="flex flex-col md:flex-row justify-between items-center">
                                      <label for="to" class="block text-sm font-medium text-gray-700 mx-2">To</label>
                                      <input type="date" name="to" id="to" value="{{$to ?? ''}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                  </div>
                                  <button type="submit" class="ml-2 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 md:mt-0">
                                      Filter
                                  </button>
                              </div>
                          </form> --}}
                      </div>
                      
                      <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">No.</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Name</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date & Time</th>
                            {{-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Type</th> --}}
                            {{-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Method</th> --}}
                            {{-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Reason</th> --}}
                            {{-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Assessments</th> --}}
                            {{-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Age</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Sex</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">4PS/NHTS</th> --}}
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 text-right">
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                          <!-- Odd row -->
                          @foreach ($immunizations as $immunization)
                              <tr class="{{ $loop->iteration % 2 != 0 ? 'bg-white' : 'bg-gray-50' }}">
                                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $loop->iteration }}</td>
                                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($immunization->patient->name) }}</td>
                                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($immunization->created_at)->format('l, d F Y H:i:s A') }}</td>
                                  {{-- <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$patient->age}}</td> --}}
                                  {{-- <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 uppercase">{{substr($patient->gender, 0, 1)}}</td> --}}
                                  {{-- <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($immunization->type_of_patient) }}</td> --}}
                                  {{-- <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($immunization->method) }}</td>
                                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($immunization->reason) }}</td> --}}
                                  {{-- <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"> --}}
                                      {{-- @foreach ($immunization->assessments as $assessment)
                                      <div class="items-center p-3 rounded-lg text-xs font-medium bg-green-100 text-green-800 my-2">
                                          <p class="">
                                              {{ ucfirst($assessment->findings) }}
                                          </p>
                                          <p>
  
                                              <small>
                                                  {{ ucfirst($assessment->date_of_visit) }}
                                              </small>
                                          </p>
                                      </div>
                                      @endforeach --}}
                                  {{-- </td> --}}
                                  <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <a href="immunization-view/{{$immunization->id}}" class="mr-2 text-indigo-600 hover:text-indigo-900">
                                      {{-- fontawesome view icon --}}
                                      <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="immunization-edit/{{$immunization->id}}" class="mr-2 text-blue-600 hover:text-blue-900">
                                      {{-- fontawesome edit icon --}}
                                      <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="immunization-delete/{{$immunization->id}}" class="text-red-600 hover:text-red-900">
                                      {{-- fontawesome edit icon --}}
                                      <i class="fas fa-trash"></i>
                                    </a>  
                                  </td>
                               </tr>
                          @endforeach
            
                          <!-- More people... -->
                        </tbody>
      
                        @if ($immunizations->hasPages())
                              <tfoot class="text-xs text-slate-400 bg-slate-50 rounded-sm">
                                  <tr>
                                      <td colspan="6" class="p-2">
                                          {{ $patients->links() }}
                                      </td>
                                  </tr>
                              </tfoot>
                          @endif
                      </table>
                    </div>

          </div>
      </div>
  
      <!-- Required chart.js -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart pie -->
        <script>
          const dataPie = {
              labels: [
                  "BCG",
                  "Hepatitis B",
                  "DPT 1",
                  "DPT 2",
                  "DPT 3",
                  "Polio",
                  "Measles 1",
                  "Measles 2",
                  "Tetanus Toxiod",
              ],
              datasets: [
              {
                  label: "Immunized",
                  data: [
                      "{{$vaccine_count['bcg']}}", 
                      "{{$vaccine_count['hepatitis_b']}}",
                      "{{$vaccine_count['dpt1']}}",
                      "{{$vaccine_count['dpt2']}}",
                      "{{$vaccine_count['dpt3']}}",
                      "{{$vaccine_count['polio_1']}}",
                      "{{$vaccine_count['measles_mcv1']}}",
                      "{{$vaccine_count['measles_mcv2']}}",
                      "{{$vaccine_count['tetanus_toxoid']}}",
                  ],
                  backgroundColor: [
                  "#FFE600",
                  "#007aff",
                  "#FFA500",
                  "#22C55E",
                  "#6B7280",
                  "#A855F7",
                  "#EF4444",
                  "#EC4899",
                  "#F97316",
                  ],
                  hoverOffset: 4,
              },
              ],
          };
  
          const configPie = {
              type: "pie",
              data: dataPie,
              options: {
                  plugins: {
                      legend: false,
                  },
              }
          };
  
          var chartBar = new Chart(document.getElementById("chartPie"), configPie);
      </script>

  
      <script>
      const today = new Date();
      // var yesterday = new Date(today.getTime() - 24 * 60 * 60 * 1000);
      const maxDate = today.toISOString().split('T')[0];
      const maxDate2 = today.toISOString().split('T')[0];
      document.getElementById("from").setAttribute("max", maxDate);
      document.getElementById("to").setAttribute("max", maxDate);
    </script>
</x-app-layout>
