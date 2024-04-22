<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>
<body class="p-5">
    <button x-data x-on:click="$dispatch('open-modal', { name: 'test' })" class="px-3 py-1 bg-teal-500 text-white rounded">  modal 1</button>
    <button x-data x-on:click="$dispatch('open-modal', { name: 'test2' })" class="px-3 py-1 bg-teal-500 text-white rounded">  modal 2</button>
    <x-modal name="test" title="Test">
        <x-slot:body>
            <span class= "p-5">body Tag Test</span>
        </x-slot:body>
    </x-modal>
    <x-modal name="test2" title="Test2">
         
        <x-slot:body>
            
        </x-slot:body>
        
    </x-modal>


    </body>
</html>

