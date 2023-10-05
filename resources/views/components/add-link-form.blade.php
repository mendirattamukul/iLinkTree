@props(['categories'])
 <div class="mt-5 grid justify-items-center" x-show="show">
    <div class="w-2/3 p-2 bg-gray-200 border-gray-500  rounded grid justify-items-center">
        <div class="w-4/5 ">
        <form method="post" action="/addlink">
            @csrf
            <div class="w-full">
            <input class="w-full mt-2 border-gray-400  rounded" type="text" placeholder="Title"
                name="title">
                  
            </div>
            <div class="w-full">
            <input class="w-full mt-2 border-gray-400  rounded" type="text" placeholder="Url"
                name="url">
            </div>
            <div class="w-full">
            <select class="w-full  mt-2 border-gray-400 rounded" placeholder="Select Category" name="category_id"
                >

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach


            </select>
           
            </div>
           
          <div class="w-full grid justify-items-end">
          <input type="submit" class="w-36 mt-2 bg-green-700 text-white hover:bg-green-800 hover:text-black rounded" value="Add"></input>
          </div>
               
              
                
          
        </form>
        </div>
    </div>
 </div> 
