@extends('layouts.dashboard')

@section('title', 'Dashboard - GEOMATIKA')

@section('content')
<div class="container-fluid p-0">
    <!-- Page Header -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i data-feather="calendar"></i>
                    Hari ini
                </button>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row g-4">
        <!-- Berita Terpublikasi Card -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-uppercase text-muted mb-0">Berita Terpublikasi</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $totalBerita }}</span>
                        </div>
                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                            <i data-feather="file-text"></i>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-success mr-2">
                            <i data-feather="trending-up" class="feather-sm"></i> {{ round(($totalBerita/$totalBerita)*100) }}%
                        </span>
                        <span class="text-nowrap">Total berita</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Total Dosen Card -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Dosen</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $totalDosen }}</span>
                        </div>
                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                            <i data-feather="users"></i>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-info mr-2">
                            <i data-feather="user-plus" class="feather-sm"></i> {{ round(($totalDosen/$totalDosen)*100) }}%
                        </span>
                        <span class="text-nowrap">Total dosen</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Alumni Card -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-uppercase text-muted mb-0">Alumni</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $totalTugasAkhir }}</span>
                        </div>
                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                            <i data-feather="book-open"></i>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-primary mr-2">
                            <i data-feather="book" class="feather-sm"></i> {{ round(($totalTugasAkhir/$totalTugasAkhir)*100) }}%
                        </span>
                        <span class="text-nowrap">Total alumni</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Pengunjung Website Card -->
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Pengunjung</h5>
                            <span class="h2 font-weight-bold mb-0">{{ array_sum($monthlyVisitors) }}</span>
                        </div>
                        <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                            <i data-feather="eye"></i>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-success mr-2">
                            <i data-feather="trending-up" class="feather-sm"></i> 
                            {{-- {{ round((end($monthlyVisitors)/max(array_sum($monthlyVisitors), 1)*100) }}% --}}
                        </span>
                        <span class="text-nowrap">Bulan ini</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Calendar Row -->
    <div class="row mt-4">
        <!-- Website Statistics Chart -->
        <div class="col-xl-8 col-lg-7 mb-4">
            <div class="card shadow h-100">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Statistik Pengunjung Website ({{ date('Y') }})</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow">
                            <div class="dropdown-header">Opsi:</div>
                            <a class="dropdown-item" href="#" id="refreshStats">Refresh Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="position: relative; height: 300px;">
                        <canvas id="websiteStatsChart"></canvas>
                    </div>
                    <hr>
                    <div class="row text-center">
                        <div class="col-6 col-md-4 mb-3 mb-md-0">
                            <div class="small text-muted">Pengunjung Unik</div>
                            <div class="h5">{{ array_sum($monthlyVisitors) }}</div>
                        </div>
                        <div class="col-6 col-md-4 mb-3 mb-md-0">
                            <div class="small text-muted">Total Kunjungan</div>
                            <div class="h5">{{ array_sum($monthlyPageViews) }}</div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="small text-muted">Rata-rata/Bulan</div>
                            <div class="h5">{{ round(array_sum($monthlyVisitors)/12) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Calendar -->
        <div class="col-xl-4 col-lg-5 mb-4">
            <div class="card shadow h-100">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kalender</h6>
                </div>
                <div class="card-body">
                    <div id="calendar-container">
                        <div class="calendar-header d-flex justify-content-between align-items-center mb-3">
                            <button class="btn btn-sm btn-outline-primary" id="prevMonth">
                                <i data-feather="chevron-left"></i>
                            </button>
                            <h5 id="currentMonth" class="mb-0">{{ date('F Y') }}</h5>
                            <button class="btn btn-sm btn-outline-primary" id="nextMonth">
                                <i data-feather="chevron-right"></i>
                            </button>
                        </div>
                        <div class="calendar-grid">
                            <div class="calendar-days-header">
                                <div class="calendar-day-header">Min</div>
                                <div class="calendar-day-header">Sen</div>
                                <div class="calendar-day-header">Sel</div>
                                <div class="calendar-day-header">Rab</div>
                                <div class="calendar-day-header">Kam</div>
                                <div class="calendar-day-header">Jum</div>
                                <div class="calendar-day-header">Sab</div>
                            </div>
                            <div id="calendar-dates" class="calendar-dates">
                                <!-- Calendar dates will be generated by JavaScript -->
                            </div>
                        </div>
                        <div class="mt-3">
                            <small class="text-muted">
                                <span class="badge bg-primary me-2"></span>Hari ini: {{ date('d F Y') }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities Section -->
    @if(count($latestActivities) > 0)
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Aktivitas Terkini</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Pengguna</th>
                                    <th>Aktivitas</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($latestActivities as $activity)
                                <tr>
                                    <td>{{ $activity->created_at->diffForHumans() }}</td>
                                    <td>{{ $activity->user->name ?? 'System' }}</td>
                                    <td>{{ $activity->log_name }}</td>
                                    <td>{{ $activity->description }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@push('css')
<style>
    .icon {
        width: 3rem;
        height: 3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }
    
    .feather-sm {
        width: 16px;
        height: 16px;
    }
    
    .calendar-grid {
        border: 1px solid #e3e6f0;
        border-radius: 0.35rem;
    }
    
    .calendar-days-header {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        background-color: #f8f9fc;
        border-bottom: 1px solid #e3e6f0;
    }
    
    .calendar-day-header {
        padding: 0.75rem 0.5rem;
        text-align: center;
        font-weight: 600;
        font-size: 0.75rem;
        text-transform: uppercase;
        color: #5a5c69;
        border-right: 1px solid #e3e6f0;
    }
    
    .calendar-day-header:last-child {
        border-right: none;
    }
    
    .calendar-dates {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
    }
    
    .calendar-date {
        padding: 0.75rem 0.5rem;
        text-align: center;
        border-right: 1px solid #e3e6f0;
        border-bottom: 1px solid #e3e6f0;
        cursor: pointer;
        transition: background-color 0.15s ease-in-out;
        min-height: 50px;
    }
    
    .calendar-date:hover {
        background-color: #f8f9fc;
    }
    
    .calendar-date:last-child {
        border-right: none;
    }
    
    .calendar-date.today {
        background-color: #4e73df;
        color: white;
        font-weight: bold;
    }
    
    .calendar-date.other-month {
        color: #d1d3e2;
    }
    
    .calendar-date.has-event::after {
        content: '';
        display: block;
        width: 5px;
        height: 5px;
        background-color: #4e73df;
        border-radius: 50%;
        margin: 3px auto 0;
    }
    
    .table th, .table td {
        vertical-align: middle;
    }
    
    .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        border: none;
        transition: transform 0.2s ease-in-out;
    }
    
    .card:hover {
        transform: translateY(-2px);
    }
    
    @media (max-width: 768px) {
        .card-body {
            padding: 1rem;
        }
        
        .calendar-date {
            padding: 0.5rem 0.25rem;
            min-height: 40px;
        }
    }
</style>
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Website Statistics Chart
    const ctx = document.getElementById('websiteStatsChart').getContext('2d');
    const websiteStatsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [
                {
                    label: 'Pengunjung Unik',
                    data: @json($monthlyVisitors),
                    backgroundColor: 'rgba(78, 115, 223, 0.5)',
                    borderColor: 'rgba(78, 115, 223, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Total Kunjungan',
                    data: @json($monthlyPageViews),
                    backgroundColor: 'rgba(28, 200, 138, 0.5)',
                    borderColor: 'rgba(28, 200, 138, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Refresh stats button
    document.getElementById('refreshStats').addEventListener('click', function(e) {
        e.preventDefault();
        window.location.reload();
    });

    // Calendar functionality
    let currentDate = new Date();
    
    function generateCalendar(year, month) {
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const daysInMonth = lastDay.getDate();
        const startingDayOfWeek = firstDay.getDay();
        
        const months = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
        
        document.getElementById('currentMonth').textContent = `${months[month]} ${year}`;
        
        const calendarDates = document.getElementById('calendar-dates');
        calendarDates.innerHTML = '';
        
        // Previous month's trailing dates
        const prevMonthLastDay = new Date(year, month, 0).getDate();
        for (let i = startingDayOfWeek - 1; i >= 0; i--) {
            const dateDiv = document.createElement('div');
            dateDiv.className = 'calendar-date other-month';
            dateDiv.textContent = prevMonthLastDay - i;
            calendarDates.appendChild(dateDiv);
        }
        
        // Current month dates
        const today = new Date();
        for (let day = 1; day <= daysInMonth; day++) {
            const dateDiv = document.createElement('div');
            dateDiv.className = 'calendar-date';
            dateDiv.textContent = day;
            
            if (year === today.getFullYear() && month === today.getMonth() && day === today.getDate()) {
                dateDiv.classList.add('today');
            }
            
            calendarDates.appendChild(dateDiv);
        }
        
        // Next month's leading dates
        const totalCells = calendarDates.children.length;
        const remainingCells = 42 - totalCells; // 6 rows × 7 days
        for (let day = 1; day <= remainingCells && remainingCells < 7; day++) {
            const dateDiv = document.createElement('div');
            dateDiv.className = 'calendar-date other-month';
            dateDiv.textContent = day;
            calendarDates.appendChild(dateDiv);
        }
    }
    
    // Initialize calendar
    generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    
    // Calendar navigation
    document.getElementById('prevMonth').addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    });
    
    document.getElementById('nextMonth').addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    });
});
</script>
@endpush
@endsection