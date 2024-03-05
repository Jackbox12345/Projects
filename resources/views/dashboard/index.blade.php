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
                <body class="bg-gray-100" >
                    <div class="h-96 flex justify-center  ">
                        <div class="bg-white p-8 rounded shadow-md w-96">
                            <h2 class="text-2xl font-bold mb-4">Registration Form</h2>
                            <form action="#" method="POST">
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-700">Name:</label>
                                    <input type="text" id="name" name="name" class="form-input mt-1 block w-full" required>
                                </div>
                                <div class="mb-4">
                                    <label for="age" class="block text-gray-700">Age:</label>
                                    <input type="number" id="age" name="age" class="form-input mt-1 block w-full" required>
                                </div>
                                <div class="mb-4">
                                    <label for="gender" class="block text-gray-700">Gender:</label>
                                    <select id="gender" name="gender" class="form-select mt-1 block w-full" required>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Register</button>
                            </form>
                        </div>
                    </div>
            </x-slot:body>
        </x-modal>


</body>
</html>