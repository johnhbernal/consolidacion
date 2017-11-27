<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\Http\Requests\UsuarioRequest;
use Dotenv\Exception\ValidationException;

class UsuarioController extends Controller
{

    //
    public static function index()
    {
        DB::beginTransaction();
        try {
            // $usuarios = Usuario::orderBy ( 'CONS_USUARIO', 'DESC' )->paginate ();
            $usuarios = Usuario::orderBy('updated_at', 'DESC')->paginate();
            // $total = count($usuarios);
            // echo '<pre>';
            // print_r($usuarios);
            // echo $total;
            // echo '</pre>';
            // die(__FILE__.' '.__LINE__);
            
            // return view ( 'usuarios.index', compact ( 'usuarios','total' ) );
            return view('usuarios.index', compact('usuarios'));
        } catch (ValidationException $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect()->route('usuarios.index')
                ->withErrors($e->getErrors())
                ->withInput();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
    }

    public function store(UsuarioRequest $request)
    {
        DB::beginTransaction();
        try {
            // Validate, then create if valid
            $usuario = new Usuario();
            
            // Get all existing numbers in database
            $ids = Usuario::pluck('id');
            
            // Generate a new unique number
            do {
                $id = rand(100000000, 999999999);
                $usuario->id = $id;
                $usuario->NUM_IDENTIFICACION = $request->NUM_IDENTIFICACION;
                $usuario->TIPO_DOCUMENTO = $request->TIPO_DOCUMENTO;
                $usuario->PRIMER_NOMBRE = $request->PRIMER_NOMBRE;
                $usuario->SEGUNDO_NOMBRE = $request->SEGUNDO_NOMBRE;
                $usuario->PRIMER_APELLIDO = $request->PRIMER_APELLIDO;
                $usuario->SEGUNDO_APELLIDO = $request->SEGUNDO_APELLIDO;
                $usuario->FECHA_DE_NACIMIENTO = $request->FECHA_DE_NACIMIENTO;
                $usuario->ESTADO = $request->ESTADO;
                $usuario->SEXO = $request->SEXO;
                $usuario->GRUPO_SANGUINEO = $request->GRUPO_SANGUINEO;
                $usuario->FACTOR_RH = $request->FACTOR_RH;
                $usuario->ESTADO_CIVIL = $request->ESTADO_CIVIL;
                $usuario->VINCULO_LABORAL = $request->VINCULO_LABORAL;
                $usuario->DISCAPACIDAD = $request->DISCAPACIDAD;
                $usuario->TIPO_DISCAPACIDAD = $request->TIPO_DISCAPACIDAD;
                $usuario->CONDICION_DISCAPACIDAD = $request->CONDICION_DISCAPACIDAD;
                $usuario->ETNIA = $request->ETNIA;
                
                $usuario->save();
                
                return redirect()->route('usuarios.index')->with('info', 'El usuario fue creado exitosamente');
            } while (in_array($id, $ids));
        } catch (ValidationException $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect()->route('usuarios.index')
                ->withErrors($e->getErrors())
                ->withInput();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
    }

    public function update(UsuarioRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            
            $usuario = Usuario::find($id);
            
            $usuario->NUM_IDENTIFICACION = $request->NUM_IDENTIFICACION;
            $usuario->TIPO_DOCUMENTO = $request->TIPO_DOCUMENTO;
            $usuario->PRIMER_NOMBRE = $request->PRIMER_NOMBRE;
            $usuario->SEGUNDO_NOMBRE = $request->SEGUNDO_NOMBRE;
            $usuario->PRIMER_APELLIDO = $request->PRIMER_APELLIDO;
            $usuario->SEGUNDO_APELLIDO = $request->SEGUNDO_APELLIDO;
            $usuario->FECHA_DE_NACIMIENTO = $request->FECHA_DE_NACIMIENTO;
            $usuario->ESTADO = $request->ESTADO;
            $usuario->SEXO = $request->SEXO;
            $usuario->GRUPO_SANGUINEO = $request->GRUPO_SANGUINEO;
            $usuario->FACTOR_RH = $request->FACTOR_RH;
            $usuario->ESTADO_CIVIL = $request->ESTADO_CIVIL;
            $usuario->VINCULO_LABORAL = $request->VINCULO_LABORAL;
            $usuario->DISCAPACIDAD = $request->DISCAPACIDAD;
            $usuario->TIPO_DISCAPACIDAD = $request->TIPO_DISCAPACIDAD;
            $usuario->CONDICION_DISCAPACIDAD = $request->CONDICION_DISCAPACIDAD;
            $usuario->ETNIA = $request->ETNIA;
            
            $usuario->save();
            
            return redirect()->route('usuarios.index')->with('info', 'El usuario fue actualizado');
        } catch (ValidationException $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect()->route('usuarios.index')
                ->withErrors($e->getErrors())
                ->withInput();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
    }

    public static function edit($id)
    {
        DB::beginTransaction();
        try {
            $usuario = Usuario::find($id);
            return view('usuarios.edit', compact('usuario'));
        } catch (ValidationException $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect()->route('usuarios.index')
                ->withErrors($e->getErrors())
                ->withInput();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
    }

    public function create()
    {
        DB::beginTransaction();
        try {
            return view('usuarios.create');
        } catch (ValidationException $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect()->route('usuarios.index')
                ->withErrors($e->getErrors())
                ->withInput();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
    }

    public static function show($id)
    {
        DB::beginTransaction();
        // $usuario = Usuario::where ( 'CONS_USUARIO', '=', $id )->first ();
        try {
            
            $usuario = Usuario::find($id);
            return view('usuarios.show', compact('usuario'));
        } catch (ValidationException $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect()->route('usuarios.index')
                ->withErrors($e->getErrors())
                ->withInput();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            // $usuario = Usuario::where('CONS_USUARIO','=',$id)->first();
            $usuario = Usuario::find($id);
            // $usuario = Usuario::where ( 'CONS_USUARIO', '=', $id )->delete ();
            $usuario->delete();
            return back()->with('info', 'El usuario con numero de identificacion ' + $usuario->NUM_IDENTIFICACION + ' fue eliminado.');
        } catch (ValidationException $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect()->route('usuarios.index')
                ->withErrors($e->getErrors())
                ->withInput();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
    }

    public function destroyUsuario(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            
            if ($request->ajax()) {
                $usuario = Usuario::find($id);
                $usuario->delete();
                
                return response()->json([
                    'message' => $product->name . ', fue eliminado correctamente.'
                ]);
            }
        } catch (ValidationException $e) {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return redirect()->route('usuarios.index')
                ->withErrors($e->getErrors())
                ->withInput();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
    }
}
