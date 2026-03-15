@extends('autenticacion.app')
@section('titulo', 'Sistema - Registro')

@section('contenido')
<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Registro</h2>
    @if(Session::has('mensaje'))
         <div class="text-xs text-red-700 font-medium block">
            <span>{{Session::get('mensaje')}}</span><br>
        </div>
    @endif
    <form class="space-y-4" action="{{route('registro.store')}}" method="post">
    @csrf

     <div>
        <label for="loginEmail" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
        @error('name')
            <div class="text-xs text-red-700 font-medium block">{{ $message }}</div>
        @enderror
        <input
          id="name"
          type="text"
          name="name"
          value="{{old('name')}}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="Jonh Dae"
        />
      </div>

    <div>
        <label for="registerEmail" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        @error('email')
            <div class="text-xs text-red-700 font-medium block">{{ $message }}</div>
        @enderror
        <input
          id="registerEmail"
          type="email"
          name="email"
          value="{{old('email')}}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="your@email.com"
        />
      </div>

      <div>
        <label for="registerPassword" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
        @error('password')
            <div class="text-xs text-red-700 font-medium block">{{ $message }}</div>
        @enderror
        <input
          id="registerPassword"
          type="password"
          name="password"
          type="password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="••••••••"
        />
      </div>

        <div>
        <label for="registerConfirmationPassword" class="block text-sm font-medium text-gray-700 mb-1">Confirmar contraseña</label>
        @error('password_confirmation')
            <div class="text-xs text-red-700 font-medium block">{{ $message }}</div>
        @enderror
        <input
          id="registerConfirmationPassword"
          type="password"
          name="password_confirmation"
          type="password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="••••••••"
        />
      </div>

      <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors">
        Registarse
      </button>
    </form>

    <div class="mt-6 text-center text-sm text-gray-600">
      Tienes cuenta?
      <a href="{{route('login')}}" class="text-indigo-600 hover:text-indigo-500 font-medium">Iniciar Sesion</a>
    </div>
  </div>
</div>
@endsection
