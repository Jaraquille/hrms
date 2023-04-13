<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">Prenatal form</h1>
            <hr>

            <nav aria-label="Progress" class="mt-10">
              <ol role="list" id="progress" class="flex items-center">
                
              </ol>
              </nav>




              <form action="{{route('prenatal-form-create')}}" method="post" class="">
                  @csrf
                  <input type="text" class="hidden" id="patient_id" name="patient_id"  value="{{$patient->id}}">
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
                              <input type="text" required name="philhealth_id" value="{{old('philhealth_id')}}" id="philhealth_id" autocomplete="philhealth_id" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            {{-- Employment status --}}
                            <label for="employment_status" class="block text-sm font-medium text-gray-700">Employment Status</label>
                            <div class="mt-1">
                              <select id="employment_status" name="employment_status" autocomplete="employment_status" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="employed" {{old('employment_status') == "employed" ? 'selected' : ''}}>Employed</option>
                                <option value="unemployed" {{old('employment_status') == "unemployed" ? 'selected' : ''}}>Unemployed</option>
                                <option value="student" {{old('employment_status') == "student" ? 'selected' : ''}}>Student</option>
                              </select>
                            </div>
                            
                            {{-- <label for="educational_attainment" class="block text-sm font-medium text-gray-700">Educational Attainment</label>
                            <div class="mt-1">
                              <input type="text" required name="educational_attainment" id="educational_attainment" autocomplete="educational_attainment" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div> --}}
                          </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                          {{-- Family serial number & 4ps or nhts number --}}
                          <div class="sm:col-span-2">
                            <label for="family_serial_number" class="block text-sm font-medium text-gray-700">Family Serial Number</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('family_serial_number')}}" required name="family_serial_number" id="family_serial_number" autocomplete="family_serial_number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>

                          <div class="sm:col-span-2">
                            <label for="fourps_nhts_number" class="block text-sm font-medium text-gray-700">4Ps or NHTS Number</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('fourps_nhts_number')}}" required name="fourps_nhts_number" id="fourps_nhts_number" autocomplete="fourps_nhts_number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <h1 class="mt-10 mb-2">Father's Name</h1>
                        <hr>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                          <div class="sm:col-span-2">
                            <label for="father_sname" class="block text-sm font-medium text-gray-700">Surename</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('father_sname')}}" required name="father_sname" id="father_sname" autocomplete="father_sname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="father_mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('father_mname')}}" required name="father_mname" id="father_mname" autocomplete="father_mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="father_fname" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('father_fname')}}" required name="father_fname" id="father_fname" autocomplete="father_fname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                          {{-- father address --}}
                          <div class="sm:col-span-4">
                            <label for="father_address" class="block text-sm font-medium text-gray-700">Address</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('father_address')}}" required name="father_address" id="father_address" autocomplete="father_address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <h1 class="mt-10 mb-2">Mother's Name</h1>
                        <hr>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                          <div class="sm:col-span-2">
                            <label for="mother_sname" class="block text-sm font-medium text-gray-700">Surename</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('mother_sname')}}" required name="mother_sname" id="mother_sname" autocomplete="mother_sname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="mother_mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('mother_mname')}}" required name="mother_mname" id="mother_mname" autocomplete="mother_mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="mother_fname" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('mother_fname')}}" required name="mother_fname" id="mother_fname" autocomplete="mother_fname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                          {{-- mother address --}}
                          <div class="sm:col-span-4">
                            <label for="mother_address" class="block text-sm font-medium text-gray-700">Address</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('mother_address')}}" required name="mother_address" id="mother_address" autocomplete="mother_address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
                              <input type="text" value="{{old('houseowner_name')}}" required name="houseowner_name" id="houseowner_name" autocomplete="houseowner_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
                        <input type="text" value="{{old('ht')}}" name="ht" id="ht" autocomplete="ht" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    {{-- 2nd column --}}
                    <div class="sm:col-span-1">
                      <label for="wt" class="block text-sm font-medium text-gray-700">WT:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('wt')}}"  name="wt" id="wt" autocomplete="wt" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 3rd column --}}
                    <div class="sm:col-span-1">
                      <label for="temp" class="block text-sm font-medium text-gray-700">TEMP:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('temp')}}"  name="temp" id="temp" autocomplete="temp" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 4th column --}}
                    <div class="sm:col-span-1">
                      <label for="pr" class="block text-sm font-medium text-gray-700">PR:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('pr')}}"  name="pr" id="pr" autocomplete="pr" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 5th column --}}
                    <div class="sm:col-span-1">
                      <label for="rr" class="block text-sm font-medium text-gray-700">RR:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('rr')}}"  name="rr" id="rr" autocomplete="rr" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    
                    {{-- 6th column --}}
                    <div class="sm:col-span-1">
                      <label for="bp" class="block text-sm font-medium text-gray-700">BP:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('bp')}}"  name="bp" id="bp" autocomplete="bp" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>  
                  </div>  

                  {{-- 6 column --}}
                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    {{-- 1st column --}}
                    <div class="sm:col-span-1">
                      <label for="menarche" class="block text-sm font-medium text-gray-700">MENARCHE:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('menarche')}}"  name="menarche" id="menarche" autocomplete="menarche" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    {{-- 2nd column --}}
                    <div class="sm:col-span-1">
                      <label for="lmp" class="block text-sm font-medium text-gray-700">LMP:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('lmp')}}"  name="lmp" id="lmp" autocomplete="lmp" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 3rd column --}}
                    <div class="sm:col-span-1">
                      <label for="gravida" class="block text-sm font-medium text-gray-700">GRAVIDA:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('gravida')}}"  name="gravida" id="gravida" autocomplete="gravida" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 4th column --}}
                    <div class="sm:col-span-1">
                      <label for="para" class="block text-sm font-medium text-gray-700">PARA:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('para')}}"  name="para" id="para" autocomplete="para" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 5th column --}}
                    <div class="sm:col-span-1">
                      <label for="fullterm" class="block text-sm font-medium text-gray-700">FULL TERM:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('fullterm')}}"  name="fullterm" id="fullterm" autocomplete="fullterm" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 6th column --}}
                    <div class="sm:col-span-1">
                      <label for="preterm" class="block text-sm font-medium text-gray-700">PRE TERM:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('preterm')}}"  name="preterm" id="preterm" autocomplete="preterm" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                  </div>

                  {{-- 6 column --}}
                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    {{-- 1st column --}}
                    <div class="sm:col-span-1">
                      <label for="abortion" class="block text-sm font-medium text-gray-700">ABORTION:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('abortion')}}"  name="abortion" id="abortion" autocomplete="abortion" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                    {{-- 2nd column --}}
                    <div class="sm:col-span-1">
                      <label for="stillbirth" class="block text-sm font-medium text-gray-700">STILL BIRTH:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('stillbirth')}}"  name="stillbirth" id="stillbirth" autocomplete="stillbirth" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 3rd column --}}
                    <div class="sm:col-span-1">
                      <label for="labresults" class="block text-sm font-medium text-gray-700">LAB RESULTS:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('labresults')}}"  name="labresults" id="labresults" autocomplete="labresults" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 4th column --}}
                    <div class="sm:col-span-1">
                      <label for="hgb" class="block text-sm font-medium text-gray-700">Hgb:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('hgb')}}"  name="hgb" id="hgb" autocomplete="hgb" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 5th column --}}
                    <div class="sm:col-span-1">
                      <label for="u_a" class="block text-sm font-medium text-gray-700">U/A:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('u_a')}}"  name="u_a" id="u_a" autocomplete="u_a" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    {{-- 6th column --}}
                    <div class="sm:col-span-1">
                      <label for="bdrl_rpr" class="block text-sm font-medium text-gray-700">BDRL/RPR:</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('bdrl_rpr')}}"  name="bdrl_rpr" id="bdrl_rpr" autocomplete="bdrl_rpr" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
                    <button id="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Submit Form
                    </button>
                </div>
              </form>
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
