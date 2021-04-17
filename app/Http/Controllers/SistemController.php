<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Venta;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Material;
use Mapper;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\mail;
use App\Mail\Welcome;

class SistemController extends Controller
{
    public function login()
    {

        return  view("templates.login");
    }

    public function home()
    {
        return  view("layouts.index");
    }

    public function registrarse()
    {
        return  view("templates.registrarse");
    }

    public function iniciar_sesion()
    {
        return  view("templates.iniciar_sesion");
    }

    public function catalogo(Request $request, $buscar = null)
    {
        $usus = Producto::paginate(9);

        $orders = Producto::Buscar($request->get('buscar'))
            ->orderBy('nombre');
        return  view("templates.catalogo")
            ->with(['usus' => $usus])
            ->with(['orders' => $orders]);
    }

    public function usuarios()
    {
        $usus = UsuariosModel::all();
        return  view("templates.usuarios")
            ->with(['usus' => $usus]);
    }

    public function guardar(Request $request)
    {

        $file = $request ->file('imagen');
        $nombre = $file -> getClientOriginalName();

         $request->file('imagen')->storeAs('',$nombre);


        $usu = Cliente::create(array(

            'imagen' => $nombre,
            'nombre_cliente'  => $request->input('nombre_cliente'),
            'primer_apellido' => $request->input('primer_apellido'),
            'segundo_apellido' => $request->input('segundo_apellido'),
            'password' => $request->input('password'),
            'correo_electronico' => $request->input('correo_electronico'),
            'telefono' => $request->input('telefono'),
            'sexo' => $request->input('sexo'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'matricula' => $request->input('matricula'),
            'tipo_sesion' => $request->input('tipo_sesion'),

        ));
        Mail::to($request->correo_electronico)->send(new Welcome($usu));
        return redirect()->route('iniciar_sesion');
    }

    public function modificar(UsuariosModel $id)
    {
        return view("templates.editar")
            ->with(['usu' => $id]);
    }
    public function salvar(UsuariosModel $id, Request $request)
    {

        $id->update($request->only('nombre', 'email', 'app', 'apm', 'pass', 'tel', 'matricula', 'fn'));

        return redirect()->route('usuarios');
    }

    public function borrar(UsuariosModel $id)
    {
        $id->delete();
        return redirect()->route('usuarios');
    }



    public function guardarProductos(Request $request)
    {


        $file = $request->file('fotografia');

        $img = $file->getClientOriginalName();
        // $img = $request -> file('img')->getClientOriginalName();

        \Storage::disk('local')->put($img, \File::get($file));

        $usu = Producto::create(array(
            'fotografia' =>  $img,
            'tipo_de_joya_id' => $request->input('tipo_de_joya_id'),
            'clave' => $request->input('clave'),
            'nombre_producto' => $request->input('nombre_producto'),
            'numero_existencias' => $request->input('numero_existencias'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
            'medida' => $request->input('medida'),
            'precio_oferta' => $request->input('precio_oferta'),
            

        ));

        return redirect()->route('productos');
    }

    public function registrarProductos()
    {
        return  view("templates.registrar_productos");
    }

    public function modificarProductos(Producto $id)
    {
        return view("templates.editarProductos")
            ->with(['usu' => $id]);
    }

    public function salvarProductos(Producto $id, Request $request)
    {

        $id->update($request->only('nombre_producto', 'numero_existencias', 'precio', 'descripcion', 'medida', 'precio_oferta'));

        return redirect()->route('productos');
    }

    public function borrarProducto(Producto $id)
    {
        $id->delete();
        return redirect()->route('productos');
    }



    public function productos()
    {
        $usus = Producto::all();
        return  view("templates.productos")
            ->with(['usus' => $usus]);
    }

    public function carrito()
    {
        $usus = Producto::all();
        
        return view('templates.carrito')
            ->with(['usus' => $usus]);
    }

    public function addCarrito($id = null)
    {
        $usus = Producto::all();
        return view('templates.carrito')
            ->with('id', $id)
            ->with(['usus' => $usus]);
    }

    public function detalleProducto($id = null)
    {
        $usus = Producto::find($id);
        return view('templates.detalle_producto')
            ->with('id', $id)
            ->with(['usu' => $usus]);
    }

    public function buscar(Request $request)
    {

        $query = Producto::Buscar($request->get('buscar'))->paginate(3);
        // dd($query);
        return view("templates.catalogo")
            ->with(['usus' => $query]);
    }
    public function reporte()
    {

        return  view("templates.reporte_ventas");
    }
    public function detalleUsuario()
    {
        $usus = Cliente::all();
        return view('templates.detalle_usuario')
            ->with(['usus' => $usus]);
    }

    public function mapa()
    {
        Mapper::map(19.283295, -99.660684);
        return view('templates.mapa');
    }



    public function registrarDireccion($id = null, $cantidad = null)
    {
        $usus = UsuariosModel::find($id);
        $direccion = DireccionesModel::find($id);
        $ventas = VentasModel::all();
        $comps = UsuariosModel::all();
        $todos = DireccionesModel::all();

        $usu = VentasModel::create(array(
            'monto_total'    => $cantidad,
            'direcciones_id' => $direccion->clientes_id,
            'clientes_id'    => $id,
        ));

        return view('templates.ventas')
            ->with(['usus' => $ventas])
            ->with(['comps' => $comps])
            ->with(['todos' => $todos]);
    }
    public function ventas()
    {
        $usus = Venta::all();
        return  view("templates.ventas")
            ->with(['usus' => $usus]);
    }

    public function modificarVentas(Venta $id)
    {
        return view("templates.editarVentas")
            ->with(['usu' => $id]);
    }
    
    
    public function salvarVentas(Venta $id, Request $request)
    {

        $id->update($request->only('monto_total', 'direcciones_id', 'clientes_id'));

        return redirect()->route('ventas');
    }
    public function borrarVenta(Venta $id)
    {
        $id->delete();
        return redirect()->route('ventas');
    }


    public function registrarMateriales()
    {
        return  view("templates.registrar_materiales");
    }
    public function guardarMateriales(Request $request)
    {

        $usu = Material::create(array(
            'nombre' => $request->input('nombre'),
            'tipo_material' => $request->input('tipo_material'),
        ));

        return redirect()->route('materiales');
    }

    public function materiales()
    {
        $usus = Material::all();
        return  view("templates.materiales")
            ->with(['usus' => $usus]);
    }
    public function modificarMateriales(Material $id)
    {
        return view("templates.editarMateriales")
            ->with(['usu' => $id]);
    }
    public function salvarMateriales(Material $id, Request $request)
    {

        $id->update($request->only('nombre', 'tipo_material'));

        return redirect()->route('materiales');
    }
    public function borrarMaterial(Material $id)
    {
        $id->delete();
        return redirect()->route('materiales');
    }
}
