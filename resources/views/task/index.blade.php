<x-app-layout>
    <x-slot name="header" >
        <div class="flex  justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{($project->title) }}
        </h2>
        
        <a href=""  style="background-color: gray; color:white;border-radius:15px; width:120px; text-align:center" >crear tarea</a>
    </div>
    </x-slot>
    
    @foreach ($tasks as $task)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  ">
            <form method="POST" action="" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-between ">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    {{ $task->title }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    {{ $task->status}}
                
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    {{ $task->updated_at }}
                </div>
                <div class="flex items-center w-72 justify-around " >
                
                
                <a href=""  style="color:green">Editar</a>
                <button style="color:red">Eliminar</button>
                    @csrf
                    @method('DELETE')
                
                
                </div>
            </form>
        </div>
    </div>
   
    @endforeach
</x-app-layout>