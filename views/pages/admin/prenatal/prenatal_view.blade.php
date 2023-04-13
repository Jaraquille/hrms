<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">Prenatal view</h1>
            <hr>

            <nav aria-label="Progress" class="mt-10">
              <ol role="list" id="progress" class="flex items-center">
                
              </ol>
              </nav>


                  <div class="p-4 steps" id="step1">
                      <div class="">
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols">
                          <div class="sm:col-span">
                            <label for="name" class="block text-sm font-medium text-gray-700">Patient Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$patient->name}}" autocomplete="name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>   
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                          <div class="sm:col-span-2">
                            <label for="philhealth_id" class="block text-sm font-medium text-gray-700">Philhealth Number</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->philhealth_id}}" readonly name="philhealth_id" id="philhealth_id" autocomplete="philhealth_id" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            {{-- Employment status --}}
                            <label for="employment_status" class="block text-sm font-medium text-gray-700">Employment Status</label>
                            <div class="mt-1">
                              <select id="employment_status" readonly name="employment_status" disabled autocomplete="employment_status" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                {{-- <option value="employed">Employed</option>
                                <option value="unemployed">Unemployed</option>
                                <option value="student">Student</option> --}}

                                {{-- if value == employment_status --}}
                                <option value="employed" {{$prenatal->employment_status == 'employed' ? 'selected' : ''}}>Employed</option>
                                <option value="unemployed" {{$prenatal->employment_status == 'unemployed' ? 'selected' : ''}}>Unemployed</option>
                                <option value="student" {{$prenatal->employment_status == 'student' ? 'selected' : ''}}>Student</option>
                              </select>
                            </div>
                            
                            {{-- <label for="educational_attainment" class="block text-sm font-medium text-gray-700">Educational Attainment</label>
                            <div class="mt-1">
                              <input type="text" readonly name="educational_attainment" id="educational_attainment" autocomplete="educational_attainment" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div> --}}
                          </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                          {{-- Family serial number & 4ps or nhts number --}}
                          <div class="sm:col-span-2">
                            <label for="family_serial_number" class="block text-sm font-medium text-gray-700">Family Serial Number</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->family_serial_number}}" name="family_serial_number" id="family_serial_number" autocomplete="family_serial_number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>

                          <div class="sm:col-span-2">
                            <label for="fourps_nhts_number" class="block text-sm font-medium text-gray-700">4Ps or NHTS Number</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->fourps_nhts_number}}" name="fourps_nhts_number" id="fourps_nhts_number" autocomplete="fourps_nhts_number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <h1 class="mt-10 mb-2">Father's Name</h1>
                        <hr>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                          <div class="sm:col-span-2">
                            <label for="father_sname" class="block text-sm font-medium text-gray-700">Surename</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->father_sname}}" name="father_sname" id="father_sname" autocomplete="father_sname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="father_mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->father_mname}}" name="father_mname" id="father_mname" autocomplete="father_mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="father_fname" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->father_fname}}" name="father_fname" id="father_fname" autocomplete="father_fname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                          {{-- father address --}}
                          <div class="sm:col-span-4">
                            <label for="father_address" class="block text-sm font-medium text-gray-700">Address</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->father_address}}" name="father_address" id="father_address" autocomplete="father_address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <h1 class="mt-10 mb-2">Mother's Name</h1>
                        <hr>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                          <div class="sm:col-span-2">
                            <label for="mother_sname" class="block text-sm font-medium text-gray-700">Surename</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->mother_sname}}" name="mother_sname" id="mother_sname" autocomplete="mother_sname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="mother_mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->mother_mname}}" name="mother_mname" id="mother_mname" autocomplete="mother_mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="mother_fname" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->mother_fname}}" name="mother_fname" id="mother_fname" autocomplete="mother_fname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                          {{-- mother address --}}
                          <div class="sm:col-span-4">
                            <label for="mother_address" class="block text-sm font-medium text-gray-700">Address</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->mother_address}}" name="mother_address" id="mother_address" autocomplete="mother_address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <h1 class="mt-10 mb-2">Landlord/Houseowner</h1>
                        <hr>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                          {{-- house owner full name --}}
                          <div class="sm:col-span-6">
                            <label for="houseowner_name" class="block text-sm font-medium text-gray-700">Name</label>
                            <div class="mt-1">
                              <input type="text" readonly value="{{$prenatal->houseowner_name}}" name="houseowner_name" id="houseowner_name" autocomplete="houseowner_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>
                          

                    </div>
                </div>

                <div class="p-4 steps" id="step2">
                  {{-- 6 column --}}
                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    {{-- 1st column --}}
                    <div class="sm:col-span-1">
                      <label for="ht" class="block text-sm font-medium text-gray-700">HT:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->ht}}" name="ht" id="ht" autocomplete="ht" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    
                    {{-- 2nd column --}}
                    <div class="sm:col-span-1">
                      <label for="wt" class="block text-sm font-medium text-gray-700">WT:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->wt}}" name="wt" id="wt" autocomplete="wt" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 3rd column --}}
                    <div class="sm:col-span-1">
                      <label for="temp" class="block text-sm font-medium text-gray-700">TEMP:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->temp}}" name="temp" id="temp" autocomplete="temp" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 4th column --}}
                    <div class="sm:col-span-1">
                      <label for="pr" class="block text-sm font-medium text-gray-700">PR:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->pr}}" name="pr" id="pr" autocomplete="pr" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 5th column --}}
                    <div class="sm:col-span-1">
                      <label for="rr" class="block text-sm font-medium text-gray-700">RR:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->rr}}" name="rr" id="rr" autocomplete="rr" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    
                    {{-- 6th column --}}
                    <div class="sm:col-span-1">
                      <label for="bp" class="block text-sm font-medium text-gray-700">BP:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->bp}}" name="bp" id="bp" autocomplete="bp" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>  
                  </div>  

                  {{-- 6 column --}}
                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    {{-- 1st column --}}
                    <div class="sm:col-span-1">
                      <label for="menarche" class="block text-sm font-medium text-gray-700">MENARCHE:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->menarche}}" name="menarche" id="menarche" autocomplete="menarche" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    {{-- 2nd column --}}
                    <div class="sm:col-span-1">
                      <label for="lmp" class="block text-sm font-medium text-gray-700">LMP:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->lmp}}" name="lmp" id="lmp" autocomplete="lmp" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 3rd column --}}
                    <div class="sm:col-span-1">
                      <label for="gravida" class="block text-sm font-medium text-gray-700">GRAVIDA:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->gravida}}" name="gravida" id="gravida" autocomplete="gravida" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 4th column --}}
                    <div class="sm:col-span-1">
                      <label for="para" class="block text-sm font-medium text-gray-700">PARA:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->para}}" name="para" id="para" autocomplete="para" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 5th column --}}
                    <div class="sm:col-span-1">
                      <label for="fullterm" class="block text-sm font-medium text-gray-700">FULL TERM:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->fullterm}}" name="fullterm" id="fullterm" autocomplete="fullterm" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 6th column --}}
                    <div class="sm:col-span-1">
                      <label for="preterm" class="block text-sm font-medium text-gray-700">PRE TERM:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->preterm}}" name="preterm" id="preterm" autocomplete="preterm" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                  </div>

                  {{-- 6 column --}}
                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    {{-- 1st column --}}
                    <div class="sm:col-span-1">
                      <label for="abortion" class="block text-sm font-medium text-gray-700">ABORTION:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->abortion}}" name="abortion" id="abortion" autocomplete="abortion" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    {{-- 2nd column --}}
                    <div class="sm:col-span-1">
                      <label for="stillbirth" class="block text-sm font-medium text-gray-700">STILL BIRTH:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->stillbirth}}" name="stillbirth" id="stillbirth" autocomplete="stillbirth" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 3rd column --}}
                    <div class="sm:col-span-1">
                      <label for="labresults" class="block text-sm font-medium text-gray-700">LAB RESULTS:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->labresults}}" name="labresults" id="labresults" autocomplete="labresults" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 4th column --}}
                    <div class="sm:col-span-1">
                      <label for="hgb" class="block text-sm font-medium text-gray-700">Hgb:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->hgb}}" name="hgb" id="hgb" autocomplete="hgb" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 5th column --}}
                    <div class="sm:col-span-1">
                      <label for="u_a" class="block text-sm font-medium text-gray-700">U/A:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->u_a}}" name="u_a" id="u_a" autocomplete="u_a" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 6th column --}}
                    <div class="sm:col-span-1">
                      <label for="bdrl_rpr" class="block text-sm font-medium text-gray-700">BDRL/RPR:</label>
                      <div class="mt-1">
                        <input type="text" readonly value="{{$prenatal->bdrl_rpr}}" name="bdrl_rpr" id="bdrl_rpr" autocomplete="bdrl_rpr" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
                      <a href="/assessmment-new2/{{$prenatal->id}}" type="button" id="addassessment" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-2">
                        Add
                      </a>
                    @endif
                  </div>
                  <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">No.</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date of Visit</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Plans/Recommendation</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date of Follow-up Visit</th>
                        {{-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Reason</th> --}}
                        {{-- <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Age</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Sex</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">4PS/NHTS</th> --}}
                        
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
                              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($assessment->recommendation) }}</td>
                              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($assessment->date_of_follow_up)->format('l, d F Y') }}</td>
                              @if (Auth::user()->user_type == 4)
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                      <a href="/assessment-edit2/{{$assessment->id}}" class="mr-2 text-blue-600 hover:text-blue-900">
                                        <i class="fas fa-edit"></i>
                                      </a>
                                      <a href="/assessment-delete2/{{$assessment->id}}" class="text-red-600 hover:text-red-900">
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
