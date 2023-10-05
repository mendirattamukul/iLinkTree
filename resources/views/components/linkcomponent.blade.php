<div class="w-9/12 mt-2">
  <div {{$attributes(['class'=>'rounded grid justify-items-center'])}} style="height:15rem;overflow:hidden;background-color:#5F9EA0;">
    <div class="" >
        <img src="/images/default.png"  class="rounded-full p-2" width="200rem" alt="user"></img>
   </div>
        <h3 class="text-white">{{$username}}</h3>
    </div>
    
    <div class="grid justify-items-center mt-5">
      @foreach ($links as $link)
      <div class="flex hover:bg-green-800  bg-green-700 mt-2 w-full rounded p-2">
      <img src="{{asset($link->category->image)}}" width="25rem" alt="category"/>
      <a target="_blank" href="{{$link->url}}" style="text-decoration:none;" class="hover:text-black mx-2 text-white">{{$link->title}}</a>
      </div>
      @endforeach
</div>
