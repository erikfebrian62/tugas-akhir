@extends('users.layouts.main')

@section('content')
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
    <div class="col">
      <div class="card radius-10 border-start border-0 border-3 border-info">
         <div class="card-body">
             <div class="d-flex align-items-center">
                 <div>
                     <p class="mb-0 text-secondary">Modal Hari Ini</p>
                     <h4 class="my-1 text-info">Rp 4805</h4>
                     <p class="mb-0 font-13">+2.5% from last day</p>
                 </div>
                 <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bxs-wallet'></i>
                 </div>
             </div>
         </div>
      </div>
    </div>
    <div class="col">
     <div class="card radius-10 border-start border-0 border-3 border-success">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <p class="mb-0 text-secondary">Keuntungan Hari Ini</p>
                    <h4 class="my-1 text-success">Rp 84,245</h4>
                    <p class="mb-0 font-13">+5.4% from last day</p>
                </div>
                <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-dollar-circle'></i>
                </div>
            </div>
        </div>
     </div>
   </div>
   <div class="col">
     <div class="card radius-10 border-start border-0 border-3 border-danger">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <p class="mb-0 text-secondary">Keuntungan Mingguan</p>
                    <h4 class="my-1 text-danger">Rp 34.6%</h4>
                    <p class="mb-0 font-13">-4.5% from last week</p>
                </div>
                <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-bar-chart-alt-2' ></i>
                </div>
            </div>
        </div>
     </div>
   </div>
   <div class="col">
     <div class="card radius-10 border-start border-0 border-3 border-warning">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div>
                    <p class="mb-0 text-secondary">Keuntungan Bulanan</p>
                    <h4 class="my-1 text-warning">Rp 8.4K</h4>
                    <p class="mb-0 font-13">+8.4% from last month</p>
                </div>
                <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-bar-chart-alt-2'></i>
                </div>
            </div>
        </div>
     </div>
   </div> 
 </div><!--end row-->

 <div class="row">
    <div class="col-12 col-lg-12">
       <div class="card radius-10">
           <div class="card-body">
             <div class="d-flex align-items-center">
                 <div>
                     <h6 class="mb-0">Profit Overview</h6>
                 </div>
                 <div class="dropdown ms-auto">
                     <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                     </a>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="javascript:;">Harian</a>
                         </li>
                         <li><a class="dropdown-item" href="javascript:;">Mingguan</a>
                         </li>
                         <li><a class="dropdown-item" href="javascript:;">Bulanan</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
                 <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #14abef"></i>Sales</span>
                 <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #ffc107"></i>Visits</span>
             </div>
             <div class="chart-container-1">
                 <canvas id="chart1"></canvas>
               </div>
           </div>
           <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
             <div class="col">
               <div class="p-3">
                 <h5 class="mb-0">24.15M</h5>
                 <small class="mb-0">Overall Visitor <span> <i class="bx bx-up-arrow-alt align-middle"></i> 2.43%</span></small>
               </div>
             </div>
             <div class="col">
               <div class="p-3">
                 <h5 class="mb-0">12:38</h5>
                 <small class="mb-0">Visitor Duration <span> <i class="bx bx-up-arrow-alt align-middle"></i> 12.65%</span></small>
               </div>
             </div>
             <div class="col">
               <div class="p-3">
                 <h5 class="mb-0">639.82</h5>
                 <small class="mb-0">Pages/Visit <span> <i class="bx bx-up-arrow-alt align-middle"></i> 5.62%</span></small>
               </div>
             </div>
           </div>
       </div>
    </div>
 </div><!--end row-->
@endsection
@push('js')
    <script>
        @if (Session::has('success'))
        const Toast = Swal.mixin({
           toast: true,
           position: 'top-end',
           showConfirmButton: false,
           timer: 3000,
           timerProgressBar: true,
           didOpen: (toast) => {
               toast.addEventListener('mouseenter', Swal.stopTimer)
               toast.addEventListener('mouseleave', Swal.resumeTimer)
           }
           })
           Toast.fire({
           icon: 'success',
           title: '{{ Session::get('success') }}'
           })
        @endif
    </script>


    <script>
        @if (Session::has('notif'))
        const Toast = Swal.mixin({
           toast: true,
           position: 'top-end',
           showConfirmButton: false,
           timer: 3000,
           timerProgressBar: true,
           didOpen: (toast) => {
               toast.addEventListener('mouseenter', Swal.stopTimer)
               toast.addEventListener('mouseleave', Swal.resumeTimer)
           }
           })
           Toast.fire({
           icon: 'info',
           title: '{{ Session::get('notif') }}'
           })
        @endif
    </script>
@endpush