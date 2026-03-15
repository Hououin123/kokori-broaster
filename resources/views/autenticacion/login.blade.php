@extends('autenticacion.app')
@section('titulo', 'Sistema - Login')
@section('contenido')
<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Inicio de Sesión</h2>
     @if(session('error'))
       <div class="text-xs text-red-700 font-medium block">
            <span>{{session('error')}}</span><br>
        </div>
    @endif
    @if(Session::has('mensaje'))
         <div class="text-xs text-red-700 font-medium block">
            <span>{{Session::get('mensaje')}}</span><br>
        </div>
    @endif
    <form class="space-y-4" action="{{route('login.post')}}" method="post">
    @csrf
    <div>
        <label for="loginEmail" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input
          id="loginEmail"
          type="email"
          name="email"
          value="{{old('email')}}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="your@email.com"
        />
      </div>

      <div>
        <label for="loginPassword" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
        <input
          id="loginPassword"
          type="password"
          name="password"
          type="password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="••••••••"
        />
      </div>

      <div class="flex items-center justify-between">
        <a href="{{route('password.request')}}" class="text-sm text-indigo-600 hover:text-indigo-500">Recuperar contraseña?</a>
      </div>

      <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors">
        Ingresar
      </button>
    </form>

    <div class="mt-6 text-center text-sm text-gray-600">
      Crear nueva cuenta
      <a href="{{route('registro')}}" class="text-indigo-600 hover:text-indigo-500 font-medium">Registrarse</a>
    </div>
  </div>
</div>
@endsection
