@extends('score.layout')

@section('content')
<form class="w-full max-w-sm" action="{{ route('score.store') }}" method="POST">
  @csrf
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Nama
      </label>
    </div>
    <div class="md:w-2/3">
      <input name="name" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="Input Nama">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Nilai Quiz
      </label>
    </div>
    <div class="md:w-2/3">
      <input 
      name="quiz"
      type="number"
      oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
      class=" appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" placeholder="Input Nilai Quiz">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Nilai Tugas
      </label>
    </div>
    <div class="md:w-2/3">
      <input 
      name="tugas"
      type="number"
      oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
      class=" appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" placeholder="Input Nilai Tugas">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Nilai Absensi
      </label>
    </div>
    <div class="md:w-2/3">
      <input 
      name="absensi"
      type="number"
      oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
      class=" appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" placeholder="Input Nilai Absensi">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Nilai Praktik
      </label>
    </div>
    <div class="md:w-2/3">
      <input 
      name="praktik"
      type="number"
      oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
      class=" appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" placeholder="Input Nilai Praktik">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Nilai UAS
      </label>
    </div>
    <div class="md:w-2/3">
      <input 
      name="uas"
      type="number"
      oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
      class=" appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" placeholder="Input Nilai UAS">
    </div>
  </div>
  <div class="items-center">
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
      <button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
        Submit
      </button>
  </div>
</form>

<div class="container px-4 mx-auto">
    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart->container() !!}
    </div>
</div>

<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
@endsection