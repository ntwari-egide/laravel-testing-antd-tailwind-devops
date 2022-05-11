<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory Cars</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <Link rel="stylesheet" href="/../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>

    <style>
        body{
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
<body>

    @component('components.header')

    @endcomponent

    <div class="flex">
        <div>
            @component('components.sidebar')
            @endcomponent
        </div>


        <div class="mt-8">

            <a class="flex ml-4 text-blue-700 bg-blue-100 px-4 py-2 rounded-sm font-light outline:none border-none w-16 text-xs" href=" {{ route('inventory.store') }} ">
                <ion-icon class="text-base font-medium"  name="arrow-back-outline"></ion-icon>
            </a>

            <div class="ml-64 mt-8">
                <h1 class="text-center font-semibold text-slate-500">Add New Car Brand Model</h1>

                <div class="mx-auto h-96 border border-slate-100  px-8 rounded-md py-16 mt-8">
                    <form action="{{ route('inventory.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input class="w-96 outline-none text-sm border border-[1px] border- px-3 py-1" type="text" placeholder="Model Image Url " name="image_url"  /> 
                        <input class="ml-8 outline-none text-sm  w-96 border border-[1px] px-3 py-1" type="text" placeholder="name " name="name" > <br /><br />
                        
                        <input class="w-96 outline-none text-sm border border-[1px] border- px-3 py-1" type="text" placeholder="model" name="model"  /> 
                        <input class="ml-8 outline-none text-sm  w-96 border border-[1px] px-3 py-1" type="date" placeholder="year " name="year" > <br /><br />
                        
                        <input class="w-96 outline-none text-sm border border-[1px] border- px-3 py-1" type="text" placeholder="info" name="info"  /> 
                        <input class="ml-8 outline-none text-sm  w-96 border border-[1px] px-3 py-1" type="color" placeholder="color " name="color" > <br /><br />
                        
                        <input class="w-96 outline-none text-sm border border-[1px] border- px-3 py-1" type="text" placeholder="status" name="status"  /> 
                        <input class="ml-8 outline-none text-sm  w-96 border border-[1px] px-3 py-1" type="text" placeholder="stock " name="stock" > <br /><br />
                      
                        <button class="bg-blue-600 font-light text-white py-3 w-full my-8 px-6">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>   
</body>
</html>