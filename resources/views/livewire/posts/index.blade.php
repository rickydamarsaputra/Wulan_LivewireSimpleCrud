<div class="w-4/5 mx-auto mt-10">

    @if(session()->has('message'))
    <div class="my-5 bg-green-400 p-3 text-white font-medium capitalize text-sm">{{session('message')}}</div>
    @endif

    <div class="grid grid-cols-3 gap-5">
        @forelse($posts as $post)
        <div class="shadow-md border-l-4 rounded border-gray-700 pl-4 p-5">
            <div><a href="{{route('post.show', $post->id)}}" class="font-medium text-sm hover:line-through">{{$post->name}}</a></div>
            <div>{{Str::limit($post->body, 100)}}</div>
            <div class="flex justify-between">
                <div class="capitalize text-xs text-gray-700 mt-2">published {{$post->created_at->format('d F Y')}}</div>
                <button wire:click="deletePost({{$post->id}})" class="capitalize text-xs text-red-700 hover:line-through focus:outline-none">delete</button>
            </div>
        </div>
        @empty
        <div class="uppercase col-span-3 font-medium text-center shadow-md border-l-4 rounded border-gray-700 pl-4 p-5">you do'nt have post!</div>
        @endforelse
    </div>
    {{$posts->links('components.pagination')}}
</div>