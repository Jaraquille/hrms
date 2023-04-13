<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">Family planning form</h1>
            <hr>

            <nav aria-label="Progress" class="mt-10">
              <ol role="list" id="progress" class="flex items-center">
                
              </ol>
              </nav>




              <form action="{{route('family-planning-form-create')}}" method="post" class="">
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
                              <input type="text" value="{{old('philhealth_id')}}" required name="philhealth_id" id="philhealth_id" autocomplete="philhealth_id" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="educational_attainment" class="block text-sm font-medium text-gray-700">Educational Attainment</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('educational_attainment')}}" required name="educational_attainment" id="educational_attainment" autocomplete="educational_attainment" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>

                        <h1 class="mt-10 mb-2">Name of Spouse</h1>
                        <hr>
                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                          <div class="sm:col-span-2">
                            <label for="spouse_sname" class="block text-sm font-medium text-gray-700">Surename</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('spouse_sname')}}" required name="spouse_sname" id="spouse_sname" autocomplete="spouse_sname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="spouse_mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('spouse_mname')}}" required name="spouse_mname" id="spouse_mname" autocomplete="spouse_mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="spouse_fname" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                              <input type="text" value="{{old('spouse_fname')}}" required name="spouse_fname" id="spouse_fname" autocomplete="spouse_fname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                        </div>


                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                          <div class="sm:col-span-2">
                            <label for="number_of_living_children" class="block text-sm font-medium text-gray-700">Number of Living Children</label>
                            <div class="mt-1">
                              <input type="number" value="{{old('number_of_living_children')}}" required name="number_of_living_children" id="number_of_living_children" autocomplete="number_of_living_children" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="plan_to_have_children" class="block text-sm font-medium text-gray-700">Plan to Have More Children?</label>
                            <div class="mt-1">
                              {{-- <input type="text" required name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                              <select name="plan_to_have_children" id="plan_to_have_children" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="Yes" {{old('plan_to_have_children') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{old('plan_to_have_children') == 'No' ? 'selected' : '' }}>No</option>
                              </select>
                            </div>
                          </div>
                  
                          <div class="sm:col-span-2">
                            <label for="average_monthly_income" class="block text-sm font-medium text-gray-700">Average Monthly Income</label>
                            <div class="mt-1">
                              <input type="number" value="{{old('average_monthly_income')}}" required name="average_monthly_income" id="average_monthly_income" autocomplete="average_monthly_income" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                          </div>
                      </div>

                      <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                        <div class="sm:col-span-2">
                          <label for="type_of_patient" class="block text-sm font-medium text-gray-700">Type of Client</label>
                          <div class="mt-1">
                            {{-- <input type="text" required name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                            <select name="type_of_patient" id="type_of_patient" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              <option value="acceptor" {{old('type_of_patient') == 'acceptor' ? 'selected' : '' }}>New Acceptor</option>
                              <option value="changing method" {{old('type_of_patient') == 'changing method' ? 'selected' : '' }}>Current User: Changing Method</option>
                              <option value="changing clinic" {{old('type_of_patient') == 'changing clinic' ? 'selected' : '' }}>Current User: Changing Clinic</option>
                              <option value="dropout" {{old('type_of_patient') == 'dropout' ? 'selected' : '' }}>Current User: Dropout/Restart</option>
                            </select>
                          </div>
                        </div>
                        <div class="sm:col-span-2">
                          <label for="reason" class="block text-sm font-medium text-gray-700">Reason</label>
                          <div class="mt-1">
                            <input type="text" value="{{old('reason')}}" required name="reason" id="reason" autocomplete="reason" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                        </div>
                       </div>
                       <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols">
                        <div class="sm:col-span">
                          <label for="method" class="block text-sm font-medium text-gray-700">Method Currently Used</label>
                          <div class="mt-1">
                            {{-- <input type="text" required name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                            <select name="method" id="method" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              <option value="n/a" {{old('method') == 'n/a' ? 'selected' : '' }}>N/A</option>
                              <option value="condom" {{old('method') == 'condom' ? 'selected' : '' }}>Condom</option>
                              <option value="pills" {{old('method') == 'pills' ? 'selected' : '' }}>Pills</option>
                              <option value="iud" {{old('method') == 'iud' ? 'selected' : '' }}>IUD</option>
                              <option value="implant" {{old('method') == 'implant' ? 'selected' : '' }}>Implant</option>
                              <option value="injection" {{old('method') == 'injection' ? 'selected' : '' }}>Injection</option>
                              <option value="vaginal ring" {{old('method') == 'vaginal ring' ? 'selected' : '' }}>Vaginal Ring</option>
                              <option value="patch" {{old('method') == 'patch' ? 'selected' : '' }}>Patch</option>
                              <option value="diaphragm" {{old('method') == 'diaphragm' ? 'selected' : '' }}>Diaphragm</option>
                              <option value="withdrawal" {{old('method') == 'withdrawal' ? 'selected' : '' }}>Withdrawal</option>
                              <option value="abstinence" {{old('method') == 'abstinence' ? 'selected' : '' }}>Abstinence</option>
                              <option value="other" {{old('method') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                          </div>
                        </div>
                       </div>
                    </div>
                </div>

                <div class="p-4 steps" id="step2">
                  <h1 class="mt-10 mb-2">Does the client have any of the following?</h1>
                  <hr>

                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="step1_1" class="block text-sm font-medium text-gray-700">Severe headaches / Migraine</label>
                      <div class="mt-1">
                        <select name="step1_1" id="step1_1" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="1" {{old('step1_1') == '1' ? 'selected' : ''}}>Yes</option>
                          <option value="0" {{old('step1_1') == '0' ? 'selected' : ''}}>No</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step1_2" class="block text-sm font-medium text-gray-700">History of stroke / Heart attack / 
                        Hypertension</label>
                      <div class="mt-1">
                        {{-- <input type="text" required name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                        <select name="step1_2" id="step1_2" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="1" {{old('step1_2') == '1' ? 'selected' : ''}}>Yes</option>
                          <option value="0" {{old('step1_2') == '0' ? 'selected' : ''}}>No</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step1_3" class="block text-sm font-medium text-gray-700">Non-traumatic hematoma / gum bleeding</label>
                      <div class="mt-1">
                        <select name="step1_3" id="step1_3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="1" {{old('step1_3') == '1' ? 'selected' : ''}}>Yes</option>
                          <option value="0" {{old('step1_3') == '0' ? 'selected' : ''}}>No</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                      <div class="sm:col-span-2">
                        <label for="step1_4" class="block text-sm font-medium text-gray-700">History of breast cancer / breast mass</label>
                        <div class="mt-1">
                          <select name="step1_4" id="step1_4" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1" {{old('step1_4') == '1' ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{old('step1_4') == '0' ? 'selected' : ''}}>No</option>
                          </select>
                        </div>
                      </div>
              
                      <div class="sm:col-span-2">
                        <label for="step1_5" class="block text-sm font-medium text-gray-700">Severe chest pain</label>
                        <div class="mt-1">
                          {{-- <input type="text" required name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                          <select name="step1_5" id="step1_5" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1" {{old('step1_5') == '1' ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{old('step1_5') == '0' ? 'selected' : ''}}>No</option>
                          </select>
                        </div>
                      </div>
              
                      <div class="sm:col-span-2">
                        <label for="step1_6" class="block text-sm font-medium text-gray-700">Cough for more than 14 days</label>
                        <div class="mt-1">
                          <select name="step1_6" id="step1_6" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1" {{old('step1_6') == '1' ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{old('step1_6') == '0' ? 'selected' : ''}}>No</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                      <div class="sm:col-span-2">
                        <label for="step1_7" class="block text-sm font-medium text-gray-700">Jaundice</label>
                        <div class="mt-1">
                          <select name="step1_7" id="step1_7" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1" {{old('step1_7') == '1' ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{old('step1_7') == '0' ? 'selected' : ''}}>No</option>
                          </select>
                        </div>
                      </div>
              
                      <div class="sm:col-span-2">
                        <label for="step1_8" class="block text-sm font-medium text-gray-700">Unexplained vaginal bleeding</label>
                        <div class="mt-1">
                          {{-- <input type="text" required name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                          <select name="step1_8" id="step1_8" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1" {{old('step1_8') == '1' ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{old('step1_8') == '0' ? 'selected' : ''}}>No</option>
                          </select>
                        </div>
                      </div>
              
                      <div class="sm:col-span-2">
                        <label for="step1_9" class="block text-sm font-medium text-gray-700">Abnormal vaginal discharge</label>
                        <div class="mt-1">
                          <select name="step1_9" id="step1_9" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1" {{old('step1_9') == '1' ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{old('step1_9') == '0' ? 'selected' : ''}}>No</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                      <div class="sm:col-span-2">
                        <label for="step1_10" class="block text-sm font-medium text-gray-700">Intake of phenobarbital or refampicin</label>
                        <div class="mt-1">
                          <select name="step1_10" id="step1_10" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1" {{old('step1_10') == '1' ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{old('step1_10') == '0' ? 'selected' : ''}}>No</option>
                          </select>
                        </div>
                      </div>
              
                      <div class="sm:col-span-2">
                        <label for="step1_11" class="block text-sm font-medium text-gray-700">Is the client smoker?</label>
                        <div class="mt-1">
                          {{-- <input type="text" required name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                          <select name="step1_11" id="step1_11" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1" {{old('step1_11') == '1' ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{old('step1_11') == '0' ? 'selected' : ''}}>No</option>
                          </select>
                        </div>
                      </div>
              
                      <div class="sm:col-span-2">
                        <label for="step1_12" class="block text-sm font-medium text-gray-700">With disability?</label>
                        <div class="mt-1">
                          <select name="step1_12" id="step1_12" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="1" {{old('step1_12') == '1' ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{old('step1_12') == '0' ? 'selected' : ''}}>No</option>
                          </select>
                        </div>
                      </div>
                    </div>


                </div>




                <div class="p-4 steps" id="step3">
                  <h1 class="mt-10 mb-2">Number of Pregnancies</h1>
                  <hr>

                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-1">
                      <label for="step2_g" class="block text-sm font-medium text-gray-700">G</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('step2_g')}}" required name="step2_g" id="step2_g" autocomplete="step2_g" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-1">
                      <label for="step2_p" class="block text-sm font-medium text-gray-700">P</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('step2_p')}}" required name="step2_p" id="step2_p" autocomplete="step2_p" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-1">
                      <label for="step2_full_term" class="block text-sm font-medium text-gray-700">Full term</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('step2_full_term')}}" required name="step2_full_term" id="step2_full_term" autocomplete="step2_full_term" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    <div class="sm:col-span-1">
                      <label for="step2_premature" class="block text-sm font-medium text-gray-700">Premature</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('step2_premature')}}" required name="step2_premature" id="step2_premature" autocomplete="step2_premature" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    <div class="sm:col-span-1">
                      <label for="step2_abortion" class="block text-sm font-medium text-gray-700">Abortion</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('step2_abortion')}}" required name="step2_abortion" id="step2_abortion" autocomplete="step2_abortion" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    <div class="sm:col-span-1">
                      <label for="step2_living_children" class="block text-sm font-medium text-gray-700">Living children</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('step2_living_children')}}" required name="step2_living_children" id="step2_living_children" autocomplete="step2_living_children" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                  </div>

                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="step2_last_delivery" class="block text-sm font-medium text-gray-700">Date of last delivery</label>
                      <div class="mt-1">
                        <input type="date" value="{{old('step2_last_delivery')}}" required name="step2_last_delivery" id="step2_last_delivery" autocomplete="step2_last_delivery" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step2_type_last_delivery" class="block text-sm font-medium text-gray-700">Type of last delivery</label>
                      <div class="mt-1">
                        <select name="step2_type_last_delivery" id="step2_type_last_delivery" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="vagina" value="{{old('step2_type_last_delivery') == 'vagin' ? 'selected' : ''}}">Vagina</option>
                          <option value="cesarean" value="{{old('step2_type_last_delivery') == 'cesarean' ? 'selected' : ''}}">Cesarean</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step2_last_menstrual" class="block text-sm font-medium text-gray-700">Last Menstrual Period</label>
                      <div class="mt-1">
                        <input type="date" value="{{old('step2_last_menstrual')}}" required name="step2_last_menstrual" id="step2_last_menstrual" autocomplete="step2_last_menstrual" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                  </div>

                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                    <div class="sm:col-span-2">
                      <label for="step2_previous_menstrual" class="block text-sm font-medium text-gray-700">Previous Menstrual Period</label>
                      <div class="mt-1">
                        <input type="date" value="{{old('step2_previous_menstrual')}}" required name="step2_previous_menstrual" id="step2_previous_menstrual" autocomplete="step2_previous_menstrual" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step2_menstrual_flow" class="block text-sm font-medium text-gray-700">Menstrual flow</label>
                      <div class="mt-1">
                        <select name="step2_menstrual_flow" id="step2_menstrual_flow" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="scanty" {{old('step2_menstrual_flow') == 'scanty' ? 'selected' : ''}}>Scanty</option>
                          <option value="moderate" {{old('step2_menstrual_flow') == 'moderate' ? 'selected' : ''}}>Moderate</option>
                          <option value="heavy" {{old('step2_menstrual_flow') == 'heavy' ? 'selected' : ''}}>Heavy</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="step2_dysmenorrhea" class="block text-sm font-medium text-gray-700">Dysmenorrhea</label>
                      <div class="mt-1">
                        <select name="step2_dysmenorrhea" id="step2_dysmenorrhea" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="0" {{old('step2_dysmenorrhea') == '0' ? 'selected' : ''}}>No</option>
                          <option value="1" {{old('step2_dysmenorrhea') == '1' ? 'selected' : ''}}>Yes</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step2_hydatidiform_mole" class="block text-sm font-medium text-gray-700">Hydatidiform mole</label>
                      <div class="mt-1">
                        {{-- <input type="text" required name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                        <select name="step2_hydatidiform_mole" id="step2_hydatidiform_mole" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="0" {{old('step2_hydatidiform_mole') == '0' ? 'selected' : ''}}>No</option>
                          <option value="1" {{old('step2_hydatidiform_mole') == '1' ? 'selected' : ''}}>Yes</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step2_ectopic_pregnancy" class="block text-sm font-medium text-gray-700">History of ectopic pregnancy</label>
                      <div class="mt-1">
                        <select name="step2_ectopic_pregnancy" id="step2_ectopic_pregnancy" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="0" {{old('step2_ectopic_pregnancy') == '0' ? 'selected' : ''}}>No</option>
                          <option value="1" {{old('step2_ectopic_pregnancy') == '1' ? 'selected' : ''}}>Yes</option>
                        </select>
                      </div>
                    </div>
                  </div>

                </div>



                <div class="p-4 steps" id="step4">
                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                    <div class="sm:col-span-1">
                      <label for="step3_weight" class="block text-sm font-medium text-gray-700">Weight</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('step3_weight')}}" required name="step3_weight" id="step3_weight" autocomplete="step3_weight" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-1">
                      <label for="step3_height" class="block text-sm font-medium text-gray-700">Height</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('step3_height')}}" required name="step3_height" id="step3_height" autocomplete="step3_height" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
            
                    <div class="sm:col-span-1">
                      <label for="step3_blood_pressure" class="block text-sm font-medium text-gray-700">Blood pressure</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('step3_blood_pressure')}}" required name="step3_blood_pressure" id="step3_blood_pressure" autocomplete="step3_blood_pressure" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>

                    <div class="sm:col-span-1">
                      <label for="step3_pulse_rate" class="block text-sm font-medium text-gray-700">Pulse Rate</label>
                      <div class="mt-1">
                        <input type="text" value="{{old('step3_pulse_rate')}}" required name="step3_pulse_rate" id="step3_pulse_rate" autocomplete="step3_pulse_rate" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      </div>
                    </div>
                  </div>

                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="step3_skin" class="block text-sm font-medium text-gray-700">Skin</label>
                      <div class="mt-1">
                        <select name="step3_skin" id="step3_skin" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="normal" {{old('step3_skin') == 'normal' ? 'selected' : ''}}>normal</option>
                          <option value="pale" {{old('step3_skin') == 'pale' ? 'selected' : ''}}>pale</option>
                          <option value="yellowish" {{old('step3_skin') == 'yellowish' ? 'selected' : ''}}>yellowish</option>
                          <option value="hematoma" {{old('step3_skin') == 'hematoma' ? 'selected' : ''}}>hematoma</option>
                        </select>
                      </div>
                    </div>

                    <div class="sm:col-span-2">
                      <label for="step3_extormities" class="block text-sm font-medium text-gray-700">Extermites</label>
                      <div class="mt-1">
                        <select name="step3_extormities" id="step3_extormities" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="normal" {{old('step3_extormities') == 'normal' ? 'selected' : ''}}>normal</option>
                          <option value="edema" {{old('step3_extormities') == 'edema' ? 'selected' : ''}}>edema</option>
                          <option value="varicosities" {{old('step3_extormities') == 'varicosities' ? 'selected' : ''}}>varicosities</option>
                        </select>
                      </div>
                    </div>

                    <div class="sm:col-span-2">
                      <label for="step3_conjunctiva" class="block text-sm font-medium text-gray-700">Conjunctiva</label>
                      <div class="mt-1">
                        <select name="step3_conjunctiva" id="step3_conjunctiva" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="normal" {{old('step3_conjunctiva') == 'normal' ? 'selected' : ''}}>normal</option>
                          <option value="pale" {{old('step3_conjunctiva') == 'pale' ? 'selected' : ''}}>pale</option>
                          <option value="yellowish" {{old('step3_conjunctiva') == 'pale' ? 'selected' : ''}}>yellowish</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                    <div class="sm:col-span-1">
                      <label for="step3_pelvic" class="block text-sm font-medium text-gray-700">Pelvic Examination</label>
                      <div class="mt-1">
                        <select name="step3_pelvic" id="step3_pelvic" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="normal" {{old('step3_pelvic') == 'normal' ? 'selected' : ''}}>normal</option>
                          <option value="mass" {{old('step3_pelvic') == 'normal' ? 'selected' : ''}}>mass</option>
                          <option value="abnormal disharge" {{old('step3_pelvic') == 'abnormal disharge' ? 'selected' : ''}}>abnormal disharge</option>
                          <option value="cervical abnormalities" {{old('step3_pelvic') == 'cervical abnormalities' ? 'selected' : ''}}>cervical abnormalities</option>
                          <option value="cervical consistency" {{old('step3_pelvic') == 'cervical consistency' ? 'selected' : ''}}>cervical consistency</option>
                          <option value="cervical tenderness" {{old('step3_pelvic') == 'cervical tenderness' ? 'selected' : ''}}>cervical tenderness</option>
                          <option value="adnexal mass" {{old('step3_pelvic') == 'adnexal mass' ? 'selected' : ''}}>adnexal mass</option>
                          <option value="uterine position" {{old('step3_pelvic') == 'uterine position' ? 'selected' : ''}}>uterine position</option>
                        </select>
                      </div>
                    </div>

                    <div class="sm:col-span-1">
                      <label for="step3_neck" class="block text-sm font-medium text-gray-700">Neck</label>
                      <div class="mt-1">
                        <select name="step3_neck" id="step3_neck" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="normal" {{old('step3_neck') == 'normal' ? 'selected' : ''}}>normal</option>
                          <option value="enlarged lymph nodes" {{old('step3_neck') == 'enlarged lymph nodes' ? 'selected' : ''}}>enlarged lymph nodes</option>
                          <option value="neck mass" {{old('step3_neck') == 'neck mass' ? 'selected' : ''}}>neck mass</option>
                        </select>
                      </div>
                    </div>

                    <div class="sm:col-span-1">
                      <label for="step3_breast" class="block text-sm font-medium text-gray-700">Breast</label>
                      <div class="mt-1">
                        <select name="step3_breast" id="step3_breast" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="normal" {{old('step3_breast') == 'normal' ? 'selected' : ''}}>normal</option>
                          <option value="enlarged lymph nodes" {{old('step3_breast') == 'enlarged lymph nodes' ? 'selected' : ''}}>enlarged lymph nodes</option>
                          <option value="mass" {{old('step3_breast') == 'mass' ? 'selected' : ''}}>neck mass</option>
                        </select>
                      </div>
                    </div>

                    <div class="sm:col-span-1">
                      <label for="step3_abdomen" class="block text-sm font-medium text-gray-700">Abdomen</label>
                      <div class="mt-1">
                        <select name="step3_abdomen" id="step3_abdomen" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option value="normal" {{old('step3_abdomen') == 'normal' ? 'selected' : ''}}>normal</option>
                          <option value="abdomen mass" {{old('step3_abdomen') == 'abdomen mass' ? 'selected' : ''}}>abdomen mass</option>
                          <option value="varicosities" {{old('step3_abdomen') == 'varicosities' ? 'selected' : ''}}>varicosities</option>
                        </select>
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
        let steps = 4;
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
