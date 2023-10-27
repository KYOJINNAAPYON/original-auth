<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <table class="table-fixed mt-10">
    @if (session('success'))
        <div class="alert alert-successalert text-red-700">
        {{ session('success') }}
        </div>
    @endif

        <div class="p-3">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="text-xs font-semibold">
                    <tr>
                    <th class="p-2 whitespace-nowrap text-center">Name</th>
                    <th class="p-2 whitespace-nowrap text-center">Email</th>
                    <th class="p-2 whitespace-nowrap text-center">created_at</th>
                    <th class="p-2 whitespace-nowrap text-center"></th>
                    <th class="p-2 whitespace-nowrap text-center"></th>
                    </tr>
                    </thead>
                    
                    @foreach($users as $user)
                    
                    <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                    <td class="p-2 whitespace-nowrap text-center">{{ $user->name }}</td>
                    <td class="p-2 whitespace-nowrap text-center">{{ $user->email }}</td>
                    <td class="p-2 whitespace-nowrap text-center">{{ $user->created_at }}</td>
                    <td class="p-2 whitespace-nowrap text-center"></td>
                    <td class="p-2 whitespace-nowrap"></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="my-10">{{ $users->links() }}</div>
            </div>
        </div>
    </table>
</div>
