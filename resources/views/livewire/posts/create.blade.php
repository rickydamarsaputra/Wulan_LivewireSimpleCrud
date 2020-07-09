<div class="w-4/5 mx-auto mt-5">
    <form wire:submit.prevent="createPost">
        <div class="mt-5">
            <label for="name" class="text-sm font-medium">Post Name</label>
            <input wire:model="name" id="name" type="text" class="border-b-4 border-gray-700 focus:outline-none w-full py-1 capitalize">
            @error('name')<div class="text-xs text-red-600 mt-2">{{$message}}</div>@enderror
        </div>
        <div class="mt-5">
            <label for="body" class="text-sm font-medium">Post Body</label>
            <input wire:model="body" id="body" type="text" class="border-b-4 border-gray-700 focus:outline-none w-full py-1 capitalize">
            @error('body')<div class="text-xs text-red-600 mt-2">{{$message}}</div>@enderror
        </div>
        <button class="uppercase text-sm font-medium py-2 px-8 mt-5 rounded bg-gray-700 text-white focus:outline-none">submit</button>
    </form>
</div>