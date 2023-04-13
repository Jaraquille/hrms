<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">Print records</h1>
            <hr>


            <div class="select-service mt-10 flex justify-between">
                <form action="{{route('print-filter')}}" method="post" class="flex flex-col md:flex-row justify-between items-center">
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
                </form>

                <div class="">
                    <select name="service" id="service" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option value="familyplanning">Family Planning</option>
                        <option value="prenatal">Pre-natal</option>
                        <option value="immunization">Immunization</option>
                    </select>
    
                    {{-- print button --}}
                    <button id="btn-screenshot" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-2 rounded">
                        <i class="fas fa-print"></i>
                        Print
                    </button>
                </div>
            </div>
            

            <div class="family-planning mt-5" id="family-planning">
                <div class="overflow-auto flex justify-between mt-4 pb-3">
                  <table class="min-w-full divide-y divide-gray-300 border-2 border-gray-500" id="table-to-print">
                    <thead class="">
                        <tr>
                            <th class="w-40">
                                <img src="{{asset('images/logo.jpg')}}" class="h-24 w-24 p-2 mx-auto" alt="">
                            </th>
                            <th scope="col" colspan="3">
                                <small>
                                    FHSIS REPORT
                                    <br>
                                    Name of Municipality/City: Cagayan de Oro City
                                    <br>
                                    Name of Barangay: Gusa
                                    <br>
                                    Pojected Population: 
                                    <br>
                                    For submission to CHO
                                </small>
                            </th>
                            <th class="w-40">
                                <h1 class="text-5xl">
                                    M1
                                </h1>
                            </th>
                        </tr>
                      <tr class="bg-gray-50">
                        {{-- <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">A2. Use of FP Method</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Cureent User</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Acceptors</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Drop-outs</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Current Users</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">New Acceptors</th> --}}

                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Patient Types</th>
                        <th scope="col" class="text-right px-3 py-3.5 text-left text-sm font-semibold text-gray-900">10-14</th>
                        <th scope="col" class="text-right px-3 py-3.5 text-left text-sm font-semibold text-gray-900">15-19</th>
                        <th scope="col" class="text-right px-3 py-3.5 text-left text-sm font-semibold text-gray-900">20-45</th>
                        <th scope="col" class="text-right px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Total</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white">
                      <!-- Odd row -->
                      {{-- <tr class="{{ $loop->iteration % 2 != 0 ? 'bg-white' : 'bg-gray-50' }}"> --}}
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Acceptors</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_age['1'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_age['2'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_age['3'] }}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            {{$patient_count['acceptor']}}
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Dropouts</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_age['4'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_age['5'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_age['6'] }}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            {{$patient_count['dropout']}}
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Current Users</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_age['7'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_age['8'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_age['9'] }}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            {{$patient_count['user']}}
                        </td>
                    </tr>
                      {{-- @foreach ($assessments as $assessment)
                          <tr class="{{ $loop->iteration % 2 != 0 ? 'bg-white' : 'bg-gray-50' }}">
                              <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $loop->iteration }}</td>
                              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($assessment->date_of_visit)->format('l, d F Y') }}</td>
                              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($assessment->findings) }}</td>
                              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($assessment->method) }}</td>
                              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($assessment->date_of_follow_up)->format('l, d F Y') }}</td>
                              @if (Auth::user()->user_type == 4)
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                      <a href="/assessment-edit/{{$assessment->id}}" class="mr-2 text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-edit"></i>
                                      </a>
                                      <a href="/assessment-delete/{{$assessment->id}}" class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash"></i>
                                      </a>  
                                    </td>
                                </tr>
                              @endif
                        @endforeach --}}
        
                      <!-- More people... -->
                    </tbody>
  
                    {{-- @if ($familyplannings->hasPages())
                          <tfoot class="text-xs text-slate-400 bg-slate-50 rounded-sm">
                              <tr>
                                  <td colspan="6" class="p-2">
                                      {{ $patients->links() }}
                                  </td>
                              </tr>
                          </tfoot>
                      @endif --}}
                  </table>
                </div>
            </div>


            <div class="prenatal mt-5 hidden" id="prenatal">
                <div class="overflow-auto flex justify-between mt-4 pb-3">
                  <table class="min-w-full divide-y divide-gray-300 border-2 border-gray-500" id="table-to-print2">
                    <thead class="">
                        <tr>
                            <th class="w-40">
                                <img src="{{asset('images/logo.jpg')}}" class="h-24 w-24 p-2 mx-auto" alt="">
                            </th>
                            <th scope="col" colspan="3">
                                <small>
                                    FHSIS REPORT
                                    <br>
                                    Name of Municipality/City: Cagayan de Oro City
                                    <br>
                                    Name of Barangay: Gusa
                                    <br>
                                    Pojected Population: 
                                    <br>
                                    For submission to CHO
                                </small>
                            </th>
                            <th class="w-40">
                                <h1 class="text-5xl">
                                    M1
                                </h1>
                            </th>
                        </tr>
                      <tr class="bg-gray-50">
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Patient Types</th>
                        <th scope="col" class="text-right px-3 py-3.5 text-left text-sm font-semibold text-gray-900">10-14</th>
                        <th scope="col" class="text-right px-3 py-3.5 text-left text-sm font-semibold text-gray-900">15-19</th>
                        <th scope="col" class="text-right px-3 py-3.5 text-left text-sm font-semibold text-gray-900">20-45</th>
                        <th scope="col" class="text-right px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Total</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white">
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Employed</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_employment_status['1'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_employment_status['2'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_employment_status['3'] }}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            {{$patient_count2['employed']}}
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Unemployed</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_employment_status['4'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_employment_status['5'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_employment_status['6'] }}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            {{$patient_count2['unemployed']}}
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Student</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_employment_status['7'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_employment_status['8'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_employment_status['9'] }}</td>
                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                            {{$patient_count2['student']}}
                        </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
            </div>

            <div class="immunization mt-5 hidden" id="immunization">
                <div class="overflow-auto flex justify-between mt-4 pb-3">
                  <table class="min-w-full divide-y divide-gray-300 border-2 border-gray-500" id="table-to-print3">
                    <thead class="">
                        <tr>
                            <th class="w-40">
                                <img src="{{asset('images/logo.jpg')}}" class="h-24 w-24 p-2 mx-auto" alt="">
                            </th>
                            <th scope="col" colspan="3">
                                <small>
                                    FHSIS REPORT
                                    <br>
                                    Name of Municipality/City: Cagayan de Oro City
                                    <br>
                                    Name of Barangay: Gusa
                                    <br>
                                    Pojected Population: 
                                    <br>
                                    For submission to CHO
                                </small>
                            </th>
                            <th class="w-40">
                                <h1 class="text-5xl">
                                    M1
                                </h1>
                            </th>
                        </tr>
                      <tr class="bg-gray-50">
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Immunization - Vaccine</th>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6"></th>
                      </tr>
                    </thead>
                    <tbody class="bg-white">
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">BCG</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_vaccine_type['1'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{" "}}</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Hepatitis B</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_vaccine_type['2'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{" "}}</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">DPT1</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_vaccine_type['3'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{" "}}</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">DPT2</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_vaccine_type['4'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{" "}}</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">DPT3</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_vaccine_type['5'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{" "}}</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Polio</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_vaccine_type['6'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{" "}}</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Measles 1</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_vaccine_type['7'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{" "}}</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Measles 2</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_vaccine_type['8'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{" "}}</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">Tetanus Toxiod</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{ $patient_vaccine_type['9'] }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-right">{{" "}}</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>
        
        <script>
        let service_type = "familyplanning";
          document.getElementById('btn-screenshot').addEventListener("click", function() {
              
            if(service_type == "familyplanning"){
                scrollTableIntoView();
                html2canvas(document.getElementById('table-to-print')).then(function(canvas) {
                    // document.body.appendChild(canvas);
                    var newWindow = window.open();
                    newWindow.document.body.appendChild(canvas);
                    newWindow.print();
                    setTimeout(() => {
                        newWindow.close();
                    }, 100);
                });
            }
            
            if(service_type == "prenatal"){
                scrollTableIntoView2();
                html2canvas(document.getElementById('table-to-print2')).then(function(canvas) {
                    // document.body.appendChild(canvas);
                    var newWindow = window.open();
                    newWindow.document.body.appendChild(canvas);
                    newWindow.print();
                    setTimeout(() => {
                        newWindow.close();
                    }, 100);
                });
            }

            if(service_type == "immunization"){
                scrollTableIntoView3();
                html2canvas(document.getElementById('table-to-print3')).then(function(canvas) {
                    // document.body.appendChild(canvas);
                    var newWindow = window.open();
                    newWindow.document.body.appendChild(canvas);
                    newWindow.print();
                    setTimeout(() => {
                        newWindow.close();
                    }, 100);
                });
            }
          });
        

          function scrollTableIntoView() {
            var table = document.getElementById("table-to-print");
            table.scrollIntoView();
          }

          function scrollTableIntoView2() {
            var table = document.getElementById("table-to-print2");
            table.scrollIntoView();
          }

          function scrollTableIntoView3() {
            var table = document.getElementById("table-to-print3");
            table.scrollIntoView();
          }
      </script>
      <script>
        const today = new Date();
        // var yesterday = new Date(today.getTime() - 24 * 60 * 60 * 1000);
        const maxDate = today.toISOString().split('T')[0];
        const maxDate2 = today.toISOString().split('T')[0];
        document.getElementById("from").setAttribute("max", maxDate);
        document.getElementById("to").setAttribute("max", maxDate);
      </script>

      {{-- Script for hiding and showing div without jquery using dropdown changes --}}
        <script>
            function showDiv(val){
                service_type = val;
             if(val == "familyplanning"){
                document.getElementById('family-planning').style.display = "block";
                document.getElementById('prenatal').style.display = "none";
                document.getElementById('immunization').style.display = "none";
             }

             if(val == "prenatal"){
                document.getElementById('prenatal').style.display = "block";
                document.getElementById('family-planning').style.display = "none";
                document.getElementById('immunization').style.display = "none";
             }

             if(val == "immunization"){
                document.getElementById('immunization').style.display = "block";
                document.getElementById('family-planning').style.display = "none";
                document.getElementById('prenatal').style.display = "none";
             }

            }

            // listen to dropdown changes with id service
            document.getElementById('service').addEventListener('change', function() {
                showDiv(this.value);
            });
        </script>
      
    </div>
</x-app-layout>
