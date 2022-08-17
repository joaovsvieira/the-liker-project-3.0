<div class="flex items-center justify-between border-b border-gray-200 p-3">
    <div class="flex">
        <img src="{{ $post->user->profilePhoto() }}" alt="{{ $post->user->name }}" class="w-12 h-12 rounded-full mr-4">
        <div>
            <h2 class="font-semibold">{{ $post->user->name }} <span class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</span></h2>
            <p class="mb-2">{{ $post->body }}</p>
        </div>
    </div>
    <div>
        <a wire:click.prevent="storeLike" href="" class="inline-flex items-center">
            <span class="leading-none text-sm font-semibold mr-2 mt-1 text-gray-500">{{ $post->likes->count() }}</span>
            <svg clip="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
            </svg>
        </a>
    </div>
</div>
