<x-app-layout>
    <div class="background-image"></div>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto" id="home">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <!-- Right: Actions -->
            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
            </div>

        </div>
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <!-- Line chart (Acme Plus) -->
            {{-- <x-dashboard.dashboard-card-01 :dataFeed="$dataFeed" /> --}}

            <!-- Line chart (Acme Advanced) -->
            {{-- <x-dashboard.dashboard-card-02 :dataFeed="$dataFeed" /> --}}

            <!-- Line chart (Acme Professional) -->
            {{-- <x-dashboard.dashboard-card-03 :dataFeed="$dataFeed" /> --}}

            <!-- Bar chart (Direct vs Indirect) -->
            {{-- <x-dashboard.dashboard-card-04 /> --}}

            <!-- Line chart (Real Time Value) -->
            {{-- <x-dashboard.dashboard-card-05 /> --}}

            <!-- Doughnut chart (Top Countries) -->
            {{-- <x-dashboard.dashboard-card-06 /> --}}

            <!-- Table (Top Channels) -->
            {{-- <x-dashboard.dashboard-card-07 /> --}}

            <!-- Line chart (Sales Over Time)  -->
            {{-- <x-dashboard.dashboard-card-08 /> --}}

            <!-- Stacked bar chart (Sales VS Refunds) -->
            {{-- <x-dashboard.dashboard-card-09 /> --}}

            <!-- Card (Customers)  -->
            {{-- <x-dashboard.dashboard-card-10 /> --}}

            <!-- Card (Reasons for Refunds)   -->
            {{-- <x-dashboard.dashboard-card-11 />              --}}

            <!-- Card (Recent Activity) -->
            {{-- <x-dashboard.dashboard-card-12 /> --}}
            
            <!-- Card (Income/Expenses) -->
            {{-- <x-dashboard.dashboard-card-13 /> --}}

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.min.js"></script>
    @if($notification['is_triggered'] == 'true')
        <script>
            Push.create('Health Record Management System', {
                body: "{{$notification['message']}}",
                timeout: 10000,
                onClick: function () {
                    window.focus();
                    this.close();
                }
            });
        </script>
    @endif
</x-app-layout>
