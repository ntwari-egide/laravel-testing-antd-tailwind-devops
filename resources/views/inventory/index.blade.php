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

            @if( $message = Session::get('success'))
                <p class="bg-green-100 m-4 w-96 py-1 px-4 text-green-700">{{ $message }}</p>
            @endif

            <a class="flex ml-4 text-blue-700 bg-blue-100 px-4 py-2 rounded-sm font-light outline:none border-none w-16 text-xs" href=" {{ route('inventory.create') }} ">
                <ion-icon class="text-base font-medium" name="add-outline"></ion-icon>
            </a>

            <div class="m-4">
                <table class="border border-slate-500 w-full">
                    <thead>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Image</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Make</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Model</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Year</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Info</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Color</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Status</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Stock</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Sell</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">In Stock</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Date Added</td>
                        <td class="border-r w-32 px-2 py-2 text-sm text-slate-600 border-slate-500 text-center">Actions</td>
                    </thead>
                    @foreach( $inventories as $inventory )
                        <tbody class="text-xs">
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500">
                                <img class="w-24 h-14 object-cover object-center rounded-sm" src="{{ $inventory->image_url }}" alt="image" srcset="">
                            </td>
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500">{{ $inventory->name }}</td>
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500"> {{ $inventory->model }} </td>
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500">{{ $inventory->Year }}</td>
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500">
                                <div class=" bg-slate-900 rounded-sm text-center">
                                    <ion-icon class="text-slate-700 text-center text-xl cursor-pointer" name="information-outline"></ion-icon>
                                </div>
                            </td>
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500">
                                <div style="background: {{ $inventory->color }}" class="w-full h-8">
                                </div>
                            </td>
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500">
                                <span class="text-blue-600 bg-blue-200 rounded-md text-xs px-2 py-1">{{ $inventory->status }}</span>
                            </td>
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500">{{ $inventory->Stock }}</td>
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500 cursor-pointer">Sell</td>
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500">14 days</td>
                            <td class="border-r border-t w-32 px-2 py-2 text-xs text-slate-600 border-slate-500">{{ $inventory->created_at }}</td>
                            <td class="border-r border-t w-32 px-2 py-2 text-sm text-slate-600 border-slate-500">
                                <div class="flex ml-2">
                                    <div class="bg-blue-100 px-2 py-1 cursor-pointer rounded-md w-8">
                                        <ion-icon class="text-blue-700" name="create-outline"></ion-icon>
                                    </div>
                                    <div class="bg-red-100 ml-4 px-2 py-1 cursor-pointer rounded-md w-8">
                                        <ion-icon class="text-red-700" name="trash-outline"></ion-icon>
                                    </div>
                                </div>
                            </td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>   
</body>
</html>