<div class="w-4/5 mx-auto mt-10">
    <div class="flex justify-between">
        <div class="font-medium text-lg">{{$post->name}}</div>
        <div><a href="{{route('post.index')}}" class="text-sm font-medium rounded-sm py-1 px-2 bg-gray-400 hover:bg-gray-500">Back</a></div>
    </div>
    <div class="text-sm mt-4">{{$post->body}}</div>
    <div class="text-sm capitalize flex space-x-1 border-t-2 border-gray-700 mt-4">
        <div>publised</div>
        <div class="font-medium">{{$post->created_at->format('d F Y')}}</div>
    </div>
</div>