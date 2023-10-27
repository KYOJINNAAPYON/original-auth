<div>
    <table class="table-fixed mt-10">
        <div class="py-4">ユーザー一覧</div>
            <!-- <div>
                <form>
                <input type="text" placeholder="キーワード検索" wire:model.live="search" id="search" class="rounded-lg">
                </form>
            </div> -->
        <div class="p-3">
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead class="text-xs font-semibold">
                    <tr>
                    <th class="p-2 whitespace-nowrap text-center">Name</th>
                    <th class="p-2 whitespace-nowrap text-center">Email</th>
                    <th class="p-2 whitespace-nowrap text-center">create</th>
                    <th class="p-2 whitespace-nowrap text-center"></th>
                    <th class="p-2 whitespace-nowrap text-center"></th>
                    </tr>
                    </thead>
                    
                    @foreach($users as $user)
                    
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                    <td class="p-2 whitespace-nowrap text-center" wire:key="postId: {{ $user->id }}">{{ $user->name }}</td>
                    <td class="p-2 whitespace-nowrap text-center" wire:key="postId: {{ $user->id }}">{{ $user->email }}</td>
                    <td class="p-2 whitespace-nowrap text-center" wire:key="postId: {{ $user->id }}">{{ $user->created_at }}</td>
                    <td class="p-2 whitespace-nowrap text-center" wire:key="postId: {{ $user->id }}"></td>
                    <td class="p-2 whitespace-nowrap" wire:key="postId: {{ $user->id }}"></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="my-10">{{ $users->links() }}</div>
            </div>
        </div>
</div>
