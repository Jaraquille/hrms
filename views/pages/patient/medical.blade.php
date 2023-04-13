<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="bg-white rounded-lg p-10">
            <h1 class="uppercase font-bold mb-4">Medical Record</h1>
            <hr>

            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg mt-10">
                <h1 class="m-2 font-bold">Family Planning</h1>
                <table class="min-w-full divide-y divide-gray-300">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">No.</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date & Time</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Type</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Method</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Reason</th>
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
                    @foreach ($familyplannings as $familyplanning)
                        <tr class="{{ $loop->iteration % 2 != 0 ? 'bg-white' : 'bg-gray-50' }}">
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $loop->iteration }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ \Carbon\Carbon::parse($familyplanning->created_at)->format('l, d F Y H:i:s A') }}</td>
                            {{-- <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$patient->age}}</td> --}}
                            {{-- <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 uppercase">{{substr($patient->gender, 0, 1)}}</td> --}}
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($familyplanning->type_of_patient) }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($familyplanning->method) }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ ucfirst($familyplanning->reason) }}</td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                <a href="family-planning-view/{{$familyplanning->id}}" class="text-indigo-600 hover:text-indigo-900">View</a>
                            </td>
                         </tr>
                    @endforeach
      
                    <!-- More people... -->
                  </tbody>

                  @if ($familyplannings->hasPages())
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
</x-app-layout>
