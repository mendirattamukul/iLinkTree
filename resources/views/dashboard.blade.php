<x-app-layout>
   <div class="flex">
   <div x-data={show:false} class="w-6/12 text-center mt-2">
    <button class="bg-green-700 rounded p-1 w-6/12 text-white hover:text-black hover:bg-green-800" x-on:click="show=true">Add New Link</button>
   <x-add-link-form  :categories="$categories"/>
   <div class="mt-2 text-red-500">
   <ul>
  @foreach($errors->all() as $message)

      <li>{{$message}}</li>

  @endforeach
</ul>
   </div>
   <div class="text-white absolute bottom-0  p-2 rounded" style="background-color:#5F9EA0;">
      <h2>Your Link</h2>
   <h3 class="mt-2 text-white">
      <a class="hover:text-black"  href="{{request()->getSchemeAndHttpHost()}}/links/{{request()->user()->slug}}">{{request()->getSchemeAndHttpHost()}}/links/{{request()->user()->name}}</a>
   </h3>
   </div>
   </div>
    <div class="w-6/12 mx-2">
      
    <x-linkcomponent></x-linkcomponent>
    </div>
   </div>
</x-app-layout>
