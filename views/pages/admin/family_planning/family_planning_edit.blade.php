<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">Family planning edit</h1>
            <hr>

            <nav aria-label="Progress" class="mt-10">
              <ol role="list" id="progress" class="flex items-center">
                
              </ol>
              </nav>


              <form action="{{route('family-planning-form-update')}}" method="post" class="">
                  @csrf
                  <input type="text" class="hidden" id="id" name="id"  value="{{$plan->id}}">
                  <input type="text" class="hidden" id="patient_id" name="patient_id"  value="{{$patient->id}}">
                  <div class="p-4 steps" id="step1">
                    <div class="">
                      <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols">
                        <div class="sm:col-span">
                          <label for="name" class="block text-sm font-medium text-gray-700">Patient Name</label>
                          <div class="mt-1">
                            <input type="text" value="{{$patient->name}}" autocomplete="name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                        </div>
                      </div>   
                      <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                        <div class="sm:col-span-2">
                          <label for="philhealth_id" class="block text-sm font-medium text-gray-700">Philhealth Number</label>
                          <div class="mt-1">
                            <input type="text" value="{{$plan->philhealth_id}}" name="philhealth_id" id="philhealth_id" autocomplete="philhealth_id" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                        </div>
                
                        <div class="sm:col-span-2">
                          <label for="educational_attainment" class="block text-sm font-medium text-gray-700">Educational Attainment</label>
                          <div class="mt-1">
                            <input type="text" value="{{$plan->educational_attainment}}" name="educational_attainment" id="educational_attainment" autocomplete="educational_attainment" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                        </div>
                      </div>

                      <h1 class="mt-10 mb-2">Name of Spouse</h1>
                      <hr>
                      <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-2">
                          <label for="spouse_sname" class="block text-sm font-medium text-gray-700">Surename</label>
                          <div class="mt-1">
                            <input type="text" value="{{$plan->spouse_sname}}" name="spouse_sname" id="spouse_sname" autocomplete="spouse_sname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                        </div>
                
                        <div class="sm:col-span-2">
                          <label for="spouse_mname" class="block text-sm font-medium text-gray-700">Middle Name</label>
                          <div class="mt-1">
                            <input type="text" value="{{$plan->spouse_mname}}" name="spouse_mname" id="spouse_mname" autocomplete="spouse_mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                        </div>
                
                        <div class="sm:col-span-2">
                          <label for="spouse_fname" class="block text-sm font-medium text-gray-700">First Name</label>
                          <div class="mt-1">
                            <input type="text" value="{{$plan->spouse_fname}}" name="spouse_fname" id="spouse_fname" autocomplete="spouse_fname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                        </div>
                      </div>


                      <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-2">
                          <label for="number_of_living_children" class="block text-sm font-medium text-gray-700">Number of Living Children</label>
                          <div class="mt-1">
                            <input type="number" value="{{$plan->number_of_living_children}}" name="number_of_living_children" id="number_of_living_children" autocomplete="no_living_children" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                        </div>
                
                        <div class="sm:col-span-2">
                          <label for="plan_to_have_children" class="block text-sm font-medium text-gray-700">Plan to Have More Children?</label>
                          <div class="mt-1">
                            {{-- <input type="text" value="{{$plan->mname}}" name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                            <select name="plan_to_have_children" id="plan_to_have_children" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                              <option value="1" {{$plan->plan_to_have_children ? 'selected' : '' }}>Yes</option>
                              <option value="0" {{!$plan->plan_to_have_children ? 'selected' : '' }}>No</option>
                            </select>
                          </div>
                        </div>
                
                        <div class="sm:col-span-2">
                          <label for="average_monthly_income" class="block text-sm font-medium text-gray-700">Average Monthly Income</label>
                          <div class="mt-1">
                            <input type="number" value="{{$plan->average_monthly_income}}" name="average_monthly_income" id="average_monthly_income" autocomplete="average_monthly_income" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                      <div class="sm:col-span-2">
                        <label for="type_of_patient" class="block text-sm font-medium text-gray-700">Type of Client</label>
                        <div class="mt-1">
                          {{-- <input type="text" value="{{$plan->mname}}" name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                          <select name="type_of_patient" id="type_of_patient" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option  {{!$plan->type_of_patient == 'acceptor' ? 'selected' : '' }} value="acceptor">New Acceptor</option>
                            <option  {{!$plan->type_of_patient == 'changing method' ? 'selected' : '' }} value="changing method">Current User: Changing Method</option>
                            <option  {{!$plan->type_of_patient == 'changing clinic' ? 'selected' : '' }} value="changing clinic">Current User: Changing Clinic</option>
                            <option  {{!$plan->type_of_patient == 'dropout' ? 'selected' : '' }} value="dropout">Current User: Dropout/Restart</option>
                          </select>
                        </div>
                      </div>
                      <div class="sm:col-span-2">
                        <label for="reason" class="block text-sm font-medium text-gray-700">Reason</label>
                        <div class="mt-1">
                          <input type="text" value="{{$plan->reason}}" name="reason" id="reason" autocomplete="reason" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                      </div>
                     </div>
                     <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols">
                      <div class="sm:col-span">
                        <label for="method" class="block text-sm font-medium text-gray-700">Method Currently Used</label>
                        <div class="mt-1">
                          {{-- <input type="text" value="{{$plan->mname}}" name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                          <select name="method" id="method" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option {{$plan->method == 'n/a' ? 'selected' : ''}} value="n/a">N/A</option>
                            <option {{$plan->method == 'condom' ? 'selected' : ''}} value="condom">Condom</option>
                            <option {{$plan->method == 'pills' ? 'selected' : ''}} value="pills">Pills</option>
                            <option {{$plan->method == 'iud' ? 'selected' : ''}} value="iud">IUD</option>
                            <option {{$plan->method == 'implant' ? 'selected' : ''}} value="implant">Implant</option>
                            <option {{$plan->method == 'injection' ? 'selected' : ''}} value="injection">Injection</option>
                            <option {{$plan->method == 'vaginal ring' ? 'selected' : ''}} value="vaginal ring">Vaginal Ring</option>
                            <option {{$plan->method == 'vaginal sponge' ? 'selected' : ''}} value="vaginal sponge">Vaginal Sponge</option>
                            <option {{$plan->method == 'diaphragm' ? 'selected' : ''}} value="diaphragm">Diaphragm</option>
                            <option {{$plan->method == 'withdrawal' ? 'selected' : ''}} value="withdrawal">Withdrawal</option>
                            <option {{$plan->method == 'abstinence' ? 'selected' : ''}} value="abstinence">Abstinence</option>
                            <option {{$plan->method == 'other' ? 'selected' : ''}} value="other">Other</option>
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
                        <option {{$plan->step1_1 ? 'selected' : ''}} value="1">Yes</option>
                        <option {{!$plan->step1_1 ? 'selected' : ''}} value="0">No</option>
                      </select>
                    </div>
                  </div>
          
                  <div class="sm:col-span-2">
                    <label for="step1_2" class="block text-sm font-medium text-gray-700">History of stroke / Heart attack / 
                      Hypertension</label>
                    <div class="mt-1">
                      {{-- <input type="text" value="{{$plan->mname}}" name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                      <select name="step1_2" id="step1_2" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step1_2 ? 'selected' : ''}} value="1">Yes</option>
                        <option {{!$plan->step1_2 ? 'selected' : ''}} value="0">No</option>
                      </select>
                    </div>
                  </div>
          
                  <div class="sm:col-span-2">
                    <label for="step1_3" class="block text-sm font-medium text-gray-700">Non-traumatic hematoma / gum bleeding</label>
                    <div class="mt-1">
                      <select name="step1_3" id="step1_3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step1_3 ? 'selected' : ''}} value="1">Yes</option>
                        <option {{!$plan->step1_3 ? 'selected' : ''}} value="0">No</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="step1_4" class="block text-sm font-medium text-gray-700">History of breast cancer / breast mass</label>
                      <div class="mt-1">
                        <select name="step1_4" id="step1_4" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option {{$plan->step1_4 ? 'selected' : ''}} value="1">Yes</option>
                          <option {{!$plan->step1_4 ? 'selected' : ''}} value="0">No</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step1_5" class="block text-sm font-medium text-gray-700">Severe chest pain</label>
                      <div class="mt-1">
                        {{-- <input type="text" value="{{$plan->mname}}" name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                        <select name="step1_5" id="step1_5" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option {{$plan->step1_5 ? 'selected' : ''}} value="1">Yes</option>
                          <option {{!$plan->step1_5 ? 'selected' : ''}} value="0">No</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step1_6" class="block text-sm font-medium text-gray-700">Cough for more than 14 days</label>
                      <div class="mt-1">
                        <select name="step1_6" id="step1_6" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option {{$plan->step1_6 ? 'selected' : ''}} value="1">Yes</option>
                          <option {{!$plan->step1_6 ? 'selected' : ''}} value="0">No</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="step1_7" class="block text-sm font-medium text-gray-700">Jaundice</label>
                      <div class="mt-1">
                        <select name="step1_7" id="step1_7" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option {{$plan->step1_7 ? 'selected' : ''}} value="1">Yes</option>
                          <option {{!$plan->step1_7 ? 'selected' : ''}} value="0">No</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step1_8" class="block text-sm font-medium text-gray-700">Unexplained vaginal bleeding</label>
                      <div class="mt-1">
                        {{-- <input type="text" value="{{$plan->mname}}" name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                        <select name="step1_8" id="step1_8" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option {{$plan->step1_8 ? 'selected' : ''}} value="1">Yes</option>
                          <option {{!$plan->step1_8 ? 'selected' : ''}} value="0">No</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step1_9" class="block text-sm font-medium text-gray-700">Abnormal vaginal discharge</label>
                      <div class="mt-1">
                        <select name="step1_9" id="step1_9" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option {{$plan->step1_9 ? 'selected' : ''}} value="1">Yes</option>
                          <option {{!$plan->step1_9 ? 'selected' : ''}} value="0">No</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                      <label for="step1_10" class="block text-sm font-medium text-gray-700">Intake of phenobarbital or refampicin</label>
                      <div class="mt-1">
                        <select name="step1_10" id="step1_10" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option {{$plan->step1_1 ? 'selected' : ''}} value="1">Yes</option>
                          <option {{!$plan->step1_1 ? 'selected' : ''}} value="0">No</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step1_11" class="block text-sm font-medium text-gray-700">Is the client smoker?</label>
                      <div class="mt-1">
                        {{-- <input type="text" value="{{$plan->mname}}" name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                        <select name="step1_11" id="step1_11" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option {{$plan->step1_1 ? 'selected' : ''}} value="1">Yes</option>
                          <option {{!$plan->step1_1 ? 'selected' : ''}} value="0">No</option>
                        </select>
                      </div>
                    </div>
            
                    <div class="sm:col-span-2">
                      <label for="step1_12" class="block text-sm font-medium text-gray-700">With disability?</label>
                      <div class="mt-1">
                        <select name="step1_12" id="step1_12" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          <option {{$plan->step1_1 ? 'selected' : ''}} value="1">Yes</option>
                          <option {{!$plan->step1_1 ? 'selected' : ''}} value="0">No</option>
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
                      <input type="text" value="{{$plan->step2_g}}" name="step2_g" id="step2_g" autocomplete="step2_g" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
          
                  <div class="sm:col-span-1">
                    <label for="step2_p" class="block text-sm font-medium text-gray-700">P</label>
                    <div class="mt-1">
                      <input type="text" value="{{$plan->step2_p}}" name="step2_p" id="step2_p" autocomplete="step2_p" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
          
                  <div class="sm:col-span-1">
                    <label for="step2_full_term" class="block text-sm font-medium text-gray-700">Full term</label>
                    <div class="mt-1">
                      <input type="text" value="{{$plan->step2_full_term}}" name="step2_full_term" id="step2_full_term" autocomplete="step2_full_term" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>

                  <div class="sm:col-span-1">
                    <label for="step2_premature" class="block text-sm font-medium text-gray-700">Premature</label>
                    <div class="mt-1">
                      <input type="text" value="{{$plan->step2_premature}}" name="step2_premature" id="step2_premature" autocomplete="step2_premature" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>

                  <div class="sm:col-span-1">
                    <label for="step2_abortion" class="block text-sm font-medium text-gray-700">Abortion</label>
                    <div class="mt-1">
                      <input type="text" value="{{$plan->step2_abortion}}" name="step2_abortion" id="step2_abortion" autocomplete="step2_abortion" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>

                  <div class="sm:col-span-1">
                    <label for="step2_living_children" class="block text-sm font-medium text-gray-700">Living children</label>
                    <div class="mt-1">
                      <input type="text" value="{{$plan->step2_living_children}}" name="step2_living_children" id="step2_living_children" autocomplete="step2_living_children" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                  <div class="sm:col-span-2">
                    <label for="step2_last_delivery" class="block text-sm font-medium text-gray-700">Date of last delivery</label>
                    <div class="mt-1">
                      <input type="date" value="{{$plan->step2_last_delivery}}" name="step2_last_delivery" id="step2_last_delivery" autocomplete="step2_last_delivery" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
          
                  <div class="sm:col-span-2">
                    <label for="step2_type_last_delivery" class="block text-sm font-medium text-gray-700">Type of last delivery</label>
                    <div class="mt-1">
                      <select name="step2_type_last_delivery" id="step2_type_last_delivery" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step2_type_last_delivery == 'vagina' ? 'selected' : ''}}  value="vagina">Vagina</option>
                        <option {{$plan->step2_type_last_delivery == 'cesarean' ? 'selected' : ''}} value="cesarean">Cesarean Section</option>
                      </select>
                    </div>
                  </div>
          
                  <div class="sm:col-span-2">
                    <label for="step2_last_menstrual" class="block text-sm font-medium text-gray-700">Last Menstrual Period</label>
                    <div class="mt-1">
                      <input type="date" value="{{$plan->step2_last_menstrual}}" name="step2_last_menstrual" id="step2_last_menstrual" autocomplete="step2_last_menstrual" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                  <div class="sm:col-span-2">
                    <label for="step2_previous_menstrual" class="block text-sm font-medium text-gray-700">Previous Menstrual Period</label>
                    <div class="mt-1">
                      <input type="date" value="{{$plan->step2_previous_menstrual}}" name="step2_previous_menstrual" id="step2_previous_menstrual" autocomplete="step2_previous_menstrual" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
          
                  <div class="sm:col-span-2">
                    <label for="step2_menstrual_flow" class="block text-sm font-medium text-gray-700">Menstrual flow</label>
                    <div class="mt-1">
                      <select name="step2_menstrual_flow" id="step2_menstrual_flow" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step2_menstrual_flow == 'scanty' ? 'selected' : ''}} value="scanty">Scanty</option>
                        <option {{$plan->step2_menstrual_flow == 'moderate' ? 'selected' : ''}} value="moderate">Moderate</option>
                        <option {{$plan->step2_menstrual_flow == 'heavy' ? 'selected' : ''}} value="heavy">Heavy</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                  <div class="sm:col-span-2">
                    <label for="step2_dysmenorrhea" class="block text-sm font-medium text-gray-700">Dysmenorrhea</label>
                    <div class="mt-1">
                      <select name="step2_dysmenorrhea" id="step2_dysmenorrhea" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step2_dysmenorrhea ? 'selected' : ''}} value="1">Yes</option>
                        <option {{!$plan->step2_dysmenorrhea ? 'selected' : ''}} value="0" selected>No</option>
                      </select>
                    </div>
                  </div>
          
                  <div class="sm:col-span-2">
                    <label for="step2_hydatidiform_mole" class="block text-sm font-medium text-gray-700">Hydatidiform mole</label>
                    <div class="mt-1">
                      {{-- <input type="text" value="{{$plan->mname}}" name="mname" id="mname" autocomplete="mname" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                      <select name="step2_hydatidiform_mole" id="step2_hydatidiform_mole" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step2_hydatidiform_mole ? 'selected' : ''}} value="1">Yes</option>
                        <option {{!$plan->step2_hydatidiform_mole ? 'selected' : ''}} value="0" selected>No</option>
                      </select>
                    </div>
                  </div>
          
                  <div class="sm:col-span-2">
                    <label for="step2_ectopic_pregnancy" class="block text-sm font-medium text-gray-700">History of ectopic pregnancy</label>
                    <div class="mt-1">
                      <select name="step2_ectopic_pregnancy" id="step2_ectopic_pregnancy" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step2_ectopic_pregnancy ? 'selected' : ''}} value="1">Yes</option>
                        <option {{!$plan->step2_ectopic_pregnancy ? 'selected' : ''}} value="0" selected>No</option>
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
                      <input type="text" value="{{$plan->step3_weight}}" name="step3_weight" id="step3_weight" autocomplete="step3_weight" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
          
                  <div class="sm:col-span-1">
                    <label for="step3_height" class="block text-sm font-medium text-gray-700">Height</label>
                    <div class="mt-1">
                      <input type="text" value="{{$plan->step3_height}}" name="step3_height" id="step3_height" autocomplete="step3_height" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
          
                  <div class="sm:col-span-1">
                    <label for="step3_blood_pressure" class="block text-sm font-medium text-gray-700">Blood pressure</label>
                    <div class="mt-1">
                      <input type="text" value="{{$plan->step3_blood_pressure}}" name="step3_blood_pressure" id="step3_blood_pressure" autocomplete="step3_blood_pressure" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>

                  <div class="sm:col-span-1">
                    <label for="step3_pulse_rate" class="block text-sm font-medium text-gray-700">Pulse Rate</label>
                    <div class="mt-1">
                      <input type="text" value="{{$plan->step3_pulse_rate}}" name="step3_pulse_rate" id="step3_pulse_rate" autocomplete="step3_pulse_rate" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                  </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                  <div class="sm:col-span-2">
                    <label for="step3_skin" class="block text-sm font-medium text-gray-700">Skin</label>
                    <div class="mt-1">
                      <select name="step3_skin" id="step3_skin" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step3_skin == 'normal' ? 'selected' : ''}} value="normal">normal</option>
                        <option {{$plan->step3_skin == 'pale' ? 'selected' : ''}} value="pale">pale</option>
                        <option {{$plan->step3_skin == 'yellowish' ? 'selected' : ''}} value="yellowish">yellowish</option>
                        <option {{$plan->step3_skin == 'hematoma' ? 'selected' : ''}} value="hematoma">hematoma</option>
                      </select>
                    </div>
                  </div>

                  <div class="sm:col-span-2">
                    <label for="step3_extormities" class="block text-sm font-medium text-gray-700">Extermites</label>
                    <div class="mt-1">
                      <select name="step3_extormities" id="step3_extormities" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step3_extormities == 'normal' ? 'selected' : ''}} value="normal">normal</option>
                        <option {{$plan->step3_extormities == 'edema' ? 'selected' : ''}} value="edema">edema</option>
                        <option {{$plan->step3_extormities == 'varicosities' ? 'selected' : ''}} value="varicosities">varicosities</option>
                      </select>
                    </div>
                  </div>

                  <div class="sm:col-span-2">
                    <label for="step3_conjunctiva" class="block text-sm font-medium text-gray-700">Conjunctiva</label>
                    <div class="mt-1">
                      <select name="step3_conjunctiva" id="step3_conjunctiva" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step3_conjunctiva == 'normal' ? 'selected' : ''}} value="normal">normal</option>
                        <option {{$plan->step3_conjunctiva == 'pale' ? 'selected' : ''}} value="pale">pale</option>
                        <option {{$plan->step3_conjunctiva == 'yellowish' ? 'selected' : ''}} value="yellowish">yellowish</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-4">
                  <div class="sm:col-span-1">
                    <label for="step3_pelvic" class="block text-sm font-medium text-gray-700">Pelvic Examination</label>
                    <div class="mt-1">
                      <select name="step3_pelvic" id="step3_pelvic" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step3_conjunctiva == 'normal' ? 'selected' : ""}} value="normal">normal</option>
                        <option {{$plan->step3_conjunctiva == 'mass' ? 'selected' : ""}} value="mass">mass</option>
                        <option {{$plan->step3_conjunctiva == 'abnormal disharge' ? 'selected' : ""}} value="abnormal disharge">abnormal disharge</option>
                        <option {{$plan->step3_conjunctiva == 'cervical abnormalities' ? 'selected' : ""}} value="cervical abnormalities">cervical abnormalities</option>
                        <option {{$plan->step3_conjunctiva == 'cervical consistency' ? 'selected' : ""}} value="cervical consistency">cervical consistency</option>
                        <option {{$plan->step3_conjunctiva == 'cervical tenderness' ? 'selected' : ""}} value="cervical tenderness">cervical tenderness</option>
                        <option {{$plan->step3_conjunctiva == 'adnexal mass' ? 'selected' : ""}} value="adnexal mass">adnexal mass</option>
                        <option {{$plan->step3_conjunctiva == 'uterine position' ? 'selected' : ""}} value="uterine position">uterine position</option>
                      </select>
                    </div>
                  </div>

                  <div class="sm:col-span-1">
                    <label for="step3_neck" class="block text-sm font-medium text-gray-700">Neck</label>
                    <div class="mt-1">
                      <select name="step3_neck" id="step3_neck" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step3_neck == 'normal' ? 'selected' : '' }} value="normal">normal</option>
                        <option {{$plan->step3_neck == 'neck mass' ? 'selected' : '' }} value="neck mass">neck mass</option>
                        <option {{$plan->step3_neck == 'enlarged lymph nodes' ? 'selected' : '' }} value="enlarged lymph nodes">enlarged lymph nodes</option>
                      </select>
                    </div>
                  </div>

                  <div class="sm:col-span-1">
                    <label for="step3_breast" class="block text-sm font-medium text-gray-700">Breast</label>
                    <div class="mt-1">
                      <select name="step3_breast" id="step3_breast" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step3_neck == 'normal' ? 'selected' : '' }} value="normal">normal</option>
                        <option {{$plan->step3_neck == 'mass' ? 'selected' : '' }} value="mass">mass</option>
                        <option {{$plan->step3_neck == 'enlarged lymph nodes' ? 'selected' : '' }} value="enlarged lymph nodes">enlarged lymph nodes</option>
                      </select>
                    </div>
                  </div>

                  <div class="sm:col-span-1">
                    <label for="step3_abdomen" class="block text-sm font-medium text-gray-700">Abdomen</label>
                    <div class="mt-1">
                      <select name="step3_abdomen" id="step3_abdomen" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option {{$plan->step3_abdomen == 'normal' ? 'selected' : '' }} value="normal">normal</option>
                        <option {{$plan->step3_abdomen == 'normal' ? 'selected' : '' }} value="abdomen mass">abdomen mass</option>
                        {{$plan->step3_abdomen == 'normal' ? 'selected' : '' }}<option value="varicosities">varicosities</option>
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
                        Update Form
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
