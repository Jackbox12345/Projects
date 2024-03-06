<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link rel="stylesheet" href="{{asset('css/member.css')}}"> --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Project</title>
</head>
<body>

    <div class="sidebar">
        <div class="logo"></div>
            <ul class="menu">
                <li class="active">
                            <a href="#" >
                                <i class='bx bxs-tachometer'></i>
                                <span>Dashboard</span>
                            </a>
                    <li>
                            <a href="#" >
                                <i class='bx bxs-user'></i>
                            <span>Profile</span>
                            </a>
                    <li>
                            <a href="#" >
                                <i class='bx bx-bar-chart' ></i>
                                <span>Chart</span>
                            </a>
                     <li>
                            <a href="#" >
                                <i class='bx bx-question-mark'></i>
                                    <span>FAQ</span>
                            </a>
                </li>
                <li>
                            <a href="{{route('todoview')}}" >
                            <i class='bx bx-list-check' ></i>
                                    <span>Todo List</span>
                            </a>
                </li>
                <li>
                    <a x-data x-on:click="$dispatch('open-modal', { name: 'test' })" >
                        <i class='bx bx-group' ></i>
                            <span>Add Members</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="{{route('logout')}}">
                        <i class='bx bx-log-out'></i>
                            <span>Log out</span>
                    </a>
        </li>
            </ul>
        
    </div>

        @livewire('finance-table')

        <x-modal name="test" title="Registration Modal">
            <x-slot:body>
                <livewire:members />
            </x-slot:body>
        </x-modal>


</body>
</html>