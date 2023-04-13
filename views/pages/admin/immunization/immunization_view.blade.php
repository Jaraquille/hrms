<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">Immunization view</h1>
            <hr>

            <nav aria-label="Progress" class="mt-10">
              <ol role="list" id="progress" class="flex items-center">
                
              </ol>
              </nav>


                  <div class="p-4 steps" id="step1">
                      <div class="">
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                          <div class="sm:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">Patient Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$patient->name}}" readonly name="name" id="name" autocomplete="name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>

                          <div class="sm:col-span-2">
                            <label for="vaccine_type" class="block text-sm font-medium text-gray-700">Vaccine</label>
                            <div class="mt-1">
                              <select id="vaccine_type" readonly name="vaccine_type" disabled autocomplete="vaccine_type" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              {{--<option value="bcg">BCG</option>
                                <option value="hepatitis_b">Hepatitis B</option>
                                <option value="dpt1">DPT 1</option>
                                <option value="dpt2">DPT 2</option>
                                <option value="dpt3">DPT 3</option>
                                <option value="polio_1">Polio</option>
                                <option value="measles_mcv1">Measles 1</option>
                                <option value="measles_mcv2">Measles 2</option>
                                <option value="tetanus_toxoid">Tetanus Toxoid</option> --}}

                                <option value="bcg" {{$immunization->vaccine_type == 'bcg' ? 'selected' : ''}}>Bcg</option>
                                <option value="hepatitis_b" {{$immunization->vaccine_type == 'hepatitis_b' ? 'selected' : ''}}>Hepatitis B</option>
                                <option value="dpt1" {{$immunization->vaccine_type == 'dpt1' ? 'selected' : ''}}>Dpt 1</option>
                                <option value="dpt2" {{$immunization->vaccine_type == 'dpt2' ? 'selected' : ''}}>Dpt 2</option>
                                <option value="dpt3" {{$immunization->vaccine_type == 'dpt3' ? 'selected' : ''}}>Dpt 3</option>
                                <option value="polio_1" {{$immunization->vaccine_type == 'polio_1' ? 'selected' : ''}}>Polio</option>
                                <option value="measles_mcv1" {{$immunization->vaccine_type == 'measles_mcv1' ? 'selected' : ''}}>Measles 1</option>
                                <option value="measles_mcv2" {{$immunization->vaccine_type == 'measles_mcv2' ? 'selected' : ''}}>Measles 2</option>
                                <option value="tetanus_toxoid" {{$immunization->vaccine_type == 'tetanus_toxoid' ? 'selected' : ''}}>Tetanus Toxoid</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                            <div class="sm:col-span-2">
                              <label for="immu_gender" class="block text-sm font-medium text-gray-700">Gender</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_gender}}" readonly name="immu_gender" id="immu_gender" autocomplete="immu_gender" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>

                            <div class="sm:col-span-2">
                              <label for="immu_month" class="block text-sm font-medium text-gray-700">Month</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_month}}" readonly name="immu_month" id="immu_month" autocomplete="immu_month" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>

                            <div class="sm:col-span-2">
                              <label for="immu_birth_weight" class="block text-sm font-medium text-gray-700">Birth Weight</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_birth_weight}}" readonly name="immu_birth_weight" id="immu_birth_weight" autocomplete="immu_birth_weight" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>

                            <div class="sm:col-span-2">
                              <label for="immu_height" class="block text-sm font-medium text-gray-700">Birth Height</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_height}}" readonly name="immu_height" id="immu_height" autocomplete="immu_height" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>
                  
                            <div class="sm:col-span-2">
                              <label for="immu_birth_first_seen" class="block text-sm font-medium text-gray-700">Birth First Seen</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_birth_first_seen}}" readonly name="immu_birth_first_seen" id="immu_birth_first_seen" autocomplete="immu_birth_first_seen" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>

                            <div class="sm:col-span-2">
                              <label for="immu_place_of_birth" class="block text-sm font-medium text-gray-700">Place of Birth</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_place_of_birth}}" readonly name="immu_place_of_birth" id="immu_place_of_birth" autocomplete="immu_place_of_birth" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>

                        </div>

                        <h1 class="mt-10 mb-2">Mother's Name</h1>
                        <hr>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                          <div class="sm:col-span-2">
                            <label for="immu_mother_sname" class="block text-sm font-medium text-gray-700">Surename</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$immunization->immu_mother_sname}}" name="immu_mother_sname" id="immu_mother_sname" autocomplete="immu_mother_sname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="immu_mother_mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$immunization->immu_mother_mname}}" name="immu_mother_mname" id="immu_mother_mname" autocomplete="immu_mother_mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="immu_mother_fname" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$immunization->immu_mother_fname}}" name="immu_mother_fname" id="immu_mother_fname" autocomplete="immu_mother_fname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                            <div class="sm:col-span-2">
                              <label for="immu_mother_education_level" class="block text-sm font-medium text-gray-700">Education Level</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_mother_education_level}}" readonly name="immu_mother_education_level" id="immu_mother_education_level" autocomplete="immu_mother_education_level" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>

                            <div class="sm:col-span-2">
                              <label for="immu_mother_occupation" class="block text-sm font-medium text-gray-700">Occupation</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_mother_occupation}}" readonly name="immu_mother_occupation" id="immu_mother_occupation" autocomplete="immu_mother_occupation" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>
                        </div>

                        <h1 class="mt-10 mb-2">Father's Name</h1>
                        <hr>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                          <div class="sm:col-span-2">
                            <label for="immu_father_sname" class="block text-sm font-medium text-gray-700">Surename</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$immunization->immu_father_sname}}" name="immu_father_sname" id="immu_father_sname" autocomplete="immu_father_sname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="immu_father_mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$immunization->immu_father_mname}}" name="immu_father_mname" id="immu_father_mname" autocomplete="immu_father_mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="immu_father_fname" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$immunization->immu_father_fname}}" name="immu_father_fname" id="immu_father_fname" autocomplete="immu_father_fname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                            <div class="sm:col-span-2">
                              <label for="immu_father_education_level" class="block text-sm font-medium text-gray-700">Education Level</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_father_education_level}}" readonly name="immu_father_education_level" id="immu_father_education_level" autocomplete="immu_father_education_level" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>

                            <div class="sm:col-span-2">
                              <label for="immu_father_occupation" class="block text-sm font-medium text-gray-700">Occupation</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_father_occupation}}" readonly name="immu_father_occupation" id="immu_father_occupation" autocomplete="immu_father_occupation" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>
                        </div>

                        <h1 class="mt-10 mb-2"></h1>
                        <hr>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                            <div class="sm:col-span-2">
                              <label for="immu_brothers_sisters" class="block text-sm font-medium text-gray-700">Brother's/Sister's</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_brothers_sisters}}" readonly name="immu_brothers_sisters" id="immu_brothers_sisters" autocomplete="immu_brothers_sisters" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>

                            <div class="sm:col-span-2">
                              <label for="immu_complete_address" class="block text-sm font-medium text-gray-700">Complete Address of Family</label>
                              <div class="mt-1">
                                <input type="text" readonly value="{{$immunization->immu_complete_address}}" readonly name="immu_complete_address" id="immu_complete_address" autocomplete="immu_complete_address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              </div>
                            </div>
                        </div>
                          

                    </div>
                </div>

                <div class="p-4 steps" id="step2">
                    <h1 class="mt-10 mb-2">Date of Immunization</h1>
                    <hr>
                  {{-- 6 column --}}
                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    {{-- 1st column --}}

                    <div class="sm:col-span-1">
                      <label for="bcg" class="block text-sm font-medium text-gray-700">BCG:</label>
                      <div class="mt-1">
                        <input type="date" readonly value="{{$immunization->bcg}}" readonly name="bcg" id="bcg" autocomplete="bcg" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    {{-- 2nd column --}}
                    <div class="sm:col-span-1">
                      <label for="hepatitis_b" class="block text-sm font-medium text-gray-700">HEPATITIS B:</label>
                      <div class="mt-1">
                        <input type="date" readonly value="{{$immunization->hepatitis_b}}" readonly name="hepatitis_b" id="hepatitis_b" autocomplete="hepatitis_b" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 3rd column --}}
                    <div class="sm:col-span-1">
                      <label for="dpt1" class="block text-sm font-medium text-gray-700">DPT1:</label>
                      <div class="mt-1">
                        <input type="date" readonly value="{{$immunization->dpt1}}" readonly name="dpt1" autocomplete="dpt1" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 4th column --}}
                    <div class="sm:col-span-1">
                      <label for="dpt2" class="block text-sm font-medium text-gray-700">DPT2:</label>
                      <div class="mt-1">
                        <input type="date" readonly value="{{$immunization->dpt2}}" readonly name="dpt2" id="dpt2" autocomplete="dpt2" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 5th column --}}
                    <div class="sm:col-span-1">
                      <label for="dpt3" class="block text-sm font-medium text-gray-700">DPT3:</label>
                      <div class="mt-1">
                        <input type="date" readonly value="{{$immunization->dpt3}}" readonly name="dpt3" id="dpt3" autocomplete="dpt3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    
                    {{-- 6th column --}}
                    <div class="sm:col-span-1">
                      <label for="polio_1" class="block text-sm font-medium text-gray-700">Polio(1):</label>
                      <div class="mt-1">
                        <input type="date" readonly value="{{$immunization->polio_1}}" readonly name="polio_1" id="polio_1" autocomplete="polio_1" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>  
                  </div>  

                  {{-- 6 column --}}
                  <h1 class="mt-10 mb-2">Measles</h1>
                    <hr>
                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    {{-- 1st column --}}
                    <div class="sm:col-span-1">
                      <label for="measles_mcv1" class="block text-sm font-medium text-gray-700">MCV1:</label>
                      <div class="mt-1">
                        <input type="date" readonly value="{{$immunization->measles_mcv1}}" readonly name="measles_mcv1" id="measles_mcv1" autocomplete="measles_mcv1" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    {{-- 2nd column --}}
                    <div class="sm:col-span-1">
                      <label for="measles_mcv2" class="block text-sm font-medium text-gray-700">MCV2:</label>
                      <div class="mt-1">
                        <input type="date" readonly value="{{$immunization->measles_mcv2}}" readonly name="measles_mcv2" id="measles_mcv2" autocomplete="measles_mcv2" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                  </div>

                  {{-- 6 column --}}
                  <h1 class="mt-10 mb-2">For Mother</h1>
                    <hr>
                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    {{-- 1st column --}}
                    <div class="sm:col-span-1">
                      <label for="tetanus_toxoid" class="block text-sm font-medium text-gray-700">Tetanus Toxiod:</label>
                      <div class="mt-1">
                        <input type="date" readonly value="{{$immunization->tetanus_toxoid}}" readonly name="tetanus_toxoid" id="tetanus_toxoid" autocomplete="tetanus_toxoid" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                  </div>
                </div>



                {{-- display errors --}}
                <div class="mt-4">
                    <ul class="text-red-500">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

                {{-- next button --}}
                <div class="flex justify-end mt-4">
                    <button type="button" id="privouspage" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                      Previous
                    </button>  
                    <button type="button" id="nextpage" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Next
                    </button>
                </div>





                <div class="overflow-auto shadow ring-1 ring-black ring-opacity-5 md:rounded-lg mt-10">
                  {{-- add button --}}
                  <div class="flex justify-between mt-4 pb-3">
                    <h1 class="m-2 font-bold">Assessments</h1>
                      @if (Auth::user()->user_type == 4)
                      <a href="/assessmment-new3/{{$immunization->id}}" type="button" id="addassessment" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Add
                      </a>
                    @endif
                  </div>
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">No.</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date of Visit</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date of Follow-up Visit</th>
                        
                        @if (Auth::user()->user_type == 4)
                          <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 text-right">
                            Action
                          </th>
                        @endif
                      </tr>
                    </thead>
                    <tbody class="bg-white">
                      <!-- Odd row -->
                      @foreach ($assessments as $assessment)
                          <tr class="{{ $loop->iteration % 2 != 0 ? 'bg-white' : 'bg-gray-50' }}">
                              <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $loop->iteration }}</td>
                              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($assessment->date_of_visit)->format('l, d F Y') }}</td>
                              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($assessment->date_of_follow_up)->format('l, d F Y') }}</td>
                              @if (Auth::user()->user_type == 4)
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                      <a href="/assessment-edit3/{{$assessment->id}}" class="mr-2 text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-edit"></i>
                                      </a>
                                      <a href="/assessment-delete3/{{$assessment->id}}" class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash"></i>
                                      </a>  
                                    </td>
                                </tr>
                              @endif
                        @endforeach
        
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
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let step = 1;
        let steps = 2;
        $('#privouspage').hide();
        $('#submit').hide();
        updateForm();

        $('#nextpage').on('click', function (){
          step++;
          updateForm();
          $('#privouspage').show();

          if(step == steps) {
            $('#nextpage').hide();
          }
        });
        $('#privouspage').on('click', function (){
          step--;
          updateForm();
          $('#nextpage').show();

          if(step == 1) {
            $('#privouspage').hide();
          }
        });

        function updateForm() {
          $('.steps').hide();
          $('#step'+step).show();

          if(step == steps) {
            $('#submit').show();
          } else {
            $('#submit').hide();
          }

          $('#progress').empty();
          for (let index = 1; index <= steps; index++) {
            if(index < step) {
              $('#progress').append('<li class="relative pr-8 sm:pr-20"><div class="absolute inset-0 flex items-center" aria-hidden="true"><div class="h-0.5 w-full bg-indigo-600"></div></div><a href="#" class="relative flex h-8 w-8 items-center justify-center rounded-full bg-indigo-600 hover:bg-indigo-900">  <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />  </svg></a></li>');
            }
            else if(step == steps){
              $('#progress').append('<li class="relative"><div class="absolute inset-0 flex items-center" aria-hidden="true">  <div class="h-0.5 w-full bg-gray-200"></div></div><a href="#" class="relative flex h-8 w-8 items-center justify-center rounded-full border-2 border-indigo-600 bg-white" aria-current="step">  <span class="h-2.5 w-2.5 rounded-full bg-indigo-600" aria-hidden="true"></span></a></li>');
            }
            else if(index == step){
              $('#progress').append('<li class="relative pr-8 sm:pr-20"><div class="absolute inset-0 flex items-center" aria-hidden="true">  <div class="h-0.5 w-full bg-gray-200"></div></div><a href="#" class="relative flex h-8 w-8 items-center justify-center rounded-full border-2 border-indigo-600 bg-white" aria-current="step">  <span class="h-2.5 w-2.5 rounded-full bg-indigo-600" aria-hidden="true"></span></a></li>');
            }
            else if(index == steps){
              $('#progress').append('<li class="relative">    <div class="absolute inset-0 flex items-center" aria-hidden="true">      <div class="h-0.5 w-full bg-gray-200"></div>    </div>    <a href="#" class="group relative flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white hover:border-gray-400">      <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300" aria-hidden="true"></span>    </a>  </li>');
            }
            else{
              $('#progress').append('<li class="relative pr-8 sm:pr-20"><div class="absolute inset-0 flex items-center" aria-hidden="true">  <div class="h-0.5 w-full bg-gray-200"></div></div><a href="#" class="group relative flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white hover:border-gray-400">  <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300" aria-hidden="true"></span></a></li>');
            }
          }
        }
        
    </script>
</x-app-layout>
