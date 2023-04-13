<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">Patient information record</h1>
            <hr>

            
            <div class="mt-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4 flex items-center">
                <div class="sm:col-span-1 flex justify-end">
                    <div class="p-4 shadow-lg rounded-lg bg-gray-100">
                        <h1 class="mb-3">LEGENDS</h1>
                        <ul>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-yellow-300 mr-3"></div>
                                10 to 14 years old
                            </li>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-blue-500 mr-3"></div>
                                15 to 19 years old
                            </li>
                            <li class="flex items-center">
                                <div class="w-4 h-4 bg-amber-500 mr-3"></div>
                                20 to 49 years old
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



            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
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
                                <a href="/edit-patient/{{$patient->id}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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
  
  
  
              <a href="{{route('new-patient')}}" class="fixed bottom-5 flex items-center right-5 p-3 bg-primary z-full bg-emerald-600 text-white rounded-full shadow-lg">
                   {{-- plus icon fontawesome --}}
                  <i class="fas fa-plus h-8 w-8 pt-2 text-center"></i>
              </a>
            </div>
        </div>
    </div>



    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart pie -->
    <script>
        const dataPie = {
            labels: [
                "10 to 14 years old",
                "15 to 19 years old",
                "20 to 49 years old",
            ],
            datasets: [
            {
                label: "Patients",
                data: [
                    "{{$patient_count['a10_14']}}", 
                    "{{$patient_count['a15_19']}}",
                    "{{$patient_count['a20_49']}}",
                ],
                backgroundColor: [
                "#FFE600",
                "#007aff",
                "#FFA500",
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
</x-app-layout>
