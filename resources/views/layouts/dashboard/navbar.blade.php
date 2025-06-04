<a class="sidebar-toggle js-sidebar-toggle">
    <i class="hamburger align-self-center"></i>
</a>

<div class="navbar-collapse collapse">
    <ul class="navbar-nav navbar-align">
        <!-- Notifications Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="position-relative">
                    <i class="align-middle" data-feather="bell"></i>
                    <span class="indicator">{{ $notificationCount ?? 0 }}</span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                <div class="dropdown-menu-header">
                    {{ $notificationCount ?? 0 }} Notifikasi Baru
                </div>
                <div class="list-group">
                    @forelse($notifications ?? [] as $notification)
                    <a href="{{ $notification->link ?? '#' }}" class="list-group-item">
                        <div class="row g-0 align-items-center">
                            <div class="col-2">
                                <i class="text-{{ $notification->type_color ?? 'primary' }}" 
                                   data-feather="{{ $notification->icon ?? 'bell' }}"></i>
                            </div>
                            <div class="col-10">
                                <div class="text-dark">{{ $notification->title }}</div>
                                <div class="text-muted small mt-1">{{ $notification->message }}</div>
                                <div class="text-muted small mt-1">{{ $notification->time_ago }}</div>
                            </div>
                        </div>
                    </a>
                    @empty
                    <!-- Default notifications for demo -->
                    <a href="#" class="list-group-item">
                        <div class="row g-0 align-items-center">
                            <div class="col-2">
                                <i class="text-success" data-feather="check-circle"></i>
                            </div>
                            <div class="col-10">
                                <div class="text-dark">Sistem berhasil diperbarui</div>
                                <div class="text-muted small mt-1">Semua fitur berfungsi normal</div>
                                <div class="text-muted small mt-1">30m yang lalu</div>
                            </div>
                        </div>
                    </a>
                    @endforelse
                </div>
                <div class="dropdown-menu-footer">
                    <a href="#" class="text-muted">
                        Lihat semua notifikasi
                    </a>
                </div>
            </div>
        </li>

        <!-- Messages Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" 
               data-bs-toggle="dropdown" aria-expanded="false">
                <div class="position-relative">
                    <i class="align-middle" data-feather="message-square"></i>
                    @if(isset($messageCount) && $messageCount > 0)
                    <span class="indicator">{{ $messageCount }}</span>
                    @endif
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                <div class="dropdown-menu-header">
                    <div class="position-relative">
                        {{ $messageCount ?? 0 }} Pesan Baru
                    </div>
                </div>
                <div class="list-group">
                    @forelse($messages ?? [] as $message)
                    <a href="#" class="list-group-item">
                        {{-- <div class="row g-0 align-items-center">
                            <div class="col-2">
                                <img src="{{ $message->sender->avatar ?? asset('asset_dashboard/img/avatars/default-avatar.jpg') }}" 
                                     class="avatar img-fluid rounded-circle" 
                                     alt="{{ $message->sender->name }}">
                            </div>
                            <div class="col-10 ps-2">
                                <div class="text-dark">{{ $message->sender->name }}</div>
                                <div class="text-muted small mt-1">{{ Str::limit($message->content, 50) }}</div>
                                <div class="text-muted small mt-1">{{ $message->time_ago }}</div>
                            </div>
                        </div> --}}
                    </a>
                    @empty
                    <!-- Default messages for demo -->
                    <div class="list-group-item text-center py-3">
                        <div class="text-muted">Tidak ada pesan baru</div>
                    </div>
                    @endforelse
                </div>
                <div class="dropdown-menu-footer">
                    <a href="#" class="text-muted">
                        Lihat semua pesan
                    </a>
                </div>
            </div>
        </li>

        <!-- User Profile Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" 
               data-bs-toggle="dropdown" aria-expanded="false">
                <i class="align-middle" data-feather="settings"></i>
            </a>

            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" 
               data-bs-toggle="dropdown" aria-expanded="false">
                @auth
                {{-- <img src="{{ Auth::user()->avatar ?? asset('asset_dashboard/img/avatars/default-avatar.jpg') }}" 
                     class="avatar img-fluid rounded me-1" alt="{{ Auth::user()->name }}" /> --}}
                <span class="text-dark">{{ Auth::user()->name }}</span>
                
               
                @endauth
            </a>
            
            <div class="dropdown-menu dropdown-menu-end">
                @auth
                <a class="dropdown-item" href="#">
                    <i class="align-middle me-1" data-feather="user"></i> Profil
                </a>
                <a class="dropdown-item" href="#">
                    <i class="align-middle me-1" data-feather="pie-chart"></i> Analytics
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="align-middle me-1" data-feather="settings"></i> Pengaturan
                </a>
                <a class="dropdown-item" href="#">
                    <i class="align-middle me-1" data-feather="help-circle"></i> Bantuan
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">
                        <i class="align-middle me-1" data-feather="log-out"></i> Keluar
                    </button>
                </form>
                @endauth
            </div>
        </li>
    </ul>
</div>