<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin.head')
</head>

@section('content')
<div class="wrapper">
    <div class="main-header">
        @include('layouts.admin.nav')
    </div>
    @include('layouts.admin.sidebar')
    <div class="main-panel">
        <div class="content">
            <div class="panel-header" style="background: linear-gradient(to bottom right, #013679, #012f5d);">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
						<h2 class="text-white pb-2">Welcome back, {{ Auth::user()->name }}!</h2>
						<h5 class="text-white op-7 mb-4">The journey to transformation starts with the self before it reaches the world.</h5>
					</div>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row mt--2">
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-info bubble-shadow-small" style="background-color: #013679">
                                            <i class="flaticon-file-1"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Catalog Products</p>
                                            <h4 class="card-title">{{ $cP }} Page</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-info bubble-shadow-small" style="background-color: #013679">
                                            <i class="flaticon-chat-8"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">Customers</p>
                                            <h4 class="card-title">{{ $cM }} Message</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-info bubble-shadow-small" style="background-color: #013679">
                                            <i class="flaticon-stopwatch"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ml-3 ml-sm-0">
                                        <div class="numbers">
                                            <p class="card-category" id="dynamic-time1">---</p>
                                            <h4 class="card-title" id="dynamic-time2">---</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (Auth::user()->level == 'Super Admin')
                    <div class="col-md-4">
                        <div class="card text-white" style="background: linear-gradient(to bottom right, #013679, #012f5d);">
                            <div class="card-body">
                                <h4 class="mt-3 b-b1 pb-2 mb-3 fw-bold">Current Active Visitors</h4>
                                <h1 class="mb-4 fw-bold">{{ $cVO }}</h1>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @include('layouts.admin.footer')
    </div>
</div>
<script>
    @if(session('successprof'))
        Swal.fire({
            icon: "success",
            title: "{{ session('successprof') }}",
            showConfirmButton: false,
            timer: 3000
        });
    @elseif(session('successlog'))
        Swal.fire({
            icon: "success",
            title: "{{ session('successlog') }}",
            showConfirmButton: false,
            timer: 3000
        });
    @endif

    // Client Side
    // function updateTime() {
    //     const timeElement1 = document.getElementById('dynamic-time1');
    //     const timeElement2 = document.getElementById('dynamic-time2');
    //     const now = new Date();
    //     const options = { day: 'numeric', month: 'long', year: 'numeric' };
    //     const formattedDate = now.toLocaleDateString('en-GB', options);
    //     const formattedTime = now.toLocaleTimeString('en-GB', { hour12: false });
    //     timeElement1.textContent = `${formattedDate}`;
    //     timeElement2.textContent = `${formattedTime}`;
    // }
    // setInterval(updateTime, 1000);
    // updateTime();

    // Server Side
    async function updateTime() {
        const timeElement1 = document.getElementById('dynamic-time1');
        const timeElement2 = document.getElementById('dynamic-time2');
        try {
            const response = await fetch('/server-time');
            const data = await response.json();
            const serverTime = new Date(data.server_time);
            const options = { day: 'numeric', month: 'long', year: 'numeric' };
            const formattedDate = serverTime.toLocaleDateString('en-GB', options);
            const formattedTime = serverTime.toLocaleTimeString('en-GB', { hour12: false });
            timeElement1.textContent = formattedDate;
            timeElement2.textContent = formattedTime;
        } catch (error) {
            console.error('Failed to fetch server time:', error);
        }
    }
    setInterval(updateTime, 1000);
    updateTime();
</script>
@include('layouts.admin.script')
@endsection

<body>
    @yield('content')
</body>
</html>
