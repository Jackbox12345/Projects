<div>
    <body class="bg-gray-100" >
        <div class="h-96 flex justify-center  ">
            <div class="bg-white p-8 rounded shadow-md w-96">
                <h2 class="text-2xl font-bold mb-4">Registration Form</h2>
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name:</label>
                        <input wire:model="name" type="text" id="name" name="name" class="form-input mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="age" class="block text-gray-700">Age:</label>
                        <input wire:model="age" type="number" id="age" name="age" class="form-input mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="gender" class="block text-gray-700">Gender:</label>
                        <select wire:model="gender" id="gender" name="gender" class="form-select mt-1 block w-full" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <button wire:click.prevent='create' type="submit"
                    class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Create
                    +</button>
                
                    @if(session('success'))
                    <span class="text-green-500 text-xs">{{session('success')}}</span>
                    @endif
                </form>

            </div>
        </div>
</div>
