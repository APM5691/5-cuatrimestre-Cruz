<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Productos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table-fixed border-collapse border border-green-800">
                        <thead>
                            <tr>
                                <th class="border border-green-800" style="width:10% ">id </th>
                                <th class="border border-green-800" style="width:20% ">clave </th>
                                <th class="border border-green-800" style="width:20% ">producto  </th>
                                <th class="border border-green-800" style="width:25% ">existencias  </th>
                                <th class="border border-green-800" style="width:20% ">precio_unitario </th>
                                <th class="border border-green-800" style="width:60% ">unidad_medida  </th>
                                <th class="border border-green-800" style="width:60% ">estatus  </th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($productos as $producto)
                                 
                             
                              <tr>
                                  <td class="border border-green-800">{{$producto->id}} </td>
                                  <td class="border border-green-800">{{$producto->clave}} </td>
                                  <td class="border border-green-800">{{$producto->producto}} </td>
                                  <td class="border border-green-800">{{$producto->existencias}} </td>
                                  <td class="border border-green-800">{{$producto->precio_unitario}} </td>
                                  <td class="border border-green-800">{{$producto->unidad_medida}} </td>
                                  <td class="border border-green-800">{{$producto->estatus}} </td>
                              </tr>
                             @endforeach
                       </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
