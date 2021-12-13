<div>
    <!-- New company Button -->
    <div class="text-center p-3 mx-auto">
        <x-jet-button wire:click="$emit('showCreateCompanyModal')">
            New Company
        </x-jet-button>
    </div>

    <!-- Company Card: We will insert for each statement here. ----------------------------------------------------------------------->
    <div class="bg-white shadow overflow-hidden sm:rounded-md">

        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Role
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @if($companies)
                @foreach($companies as $company)
                <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ $company->name }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $company->type->name}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $company->main_line }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $company->website }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td>
            </tr>
                @endforeach
            @else
                <p>There are no companies in your database.</p>
            @endif
          </tbody>
        </table>
      </div>
    </div>

    <!-- company Pagination -->
    <div class="py-2">
        {{ $companies->links() }}
    </div>
</div>