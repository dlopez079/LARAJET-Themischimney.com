<div wire:model="showClientCard" id="clientCard" class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="mt-6 text-gray-500 text-center pb-3">
        Select Client Above to display Details.
    </div>

    <div class="p-6 sm:px-20 bg-white">

        <!-- 
            Client Edit Card
            This card will display underneath the Client list.
        -->
        <div class="px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">

                <!-- Company Number  -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Company #
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_id }}
                    </dd>
                </div>

                <!-- Company Name  -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Company Name
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_name }}
                        {{ $selected_status }}
                    </dd>
                </div>

                <!-- Client Address -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_street}} {{ $selected_city}} {{ $selected_state }} {{ $selected_zip}}
                    </dd>
                </div>

                <!-- Client Contact (s)  -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Contact
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_contact }}
                    </dd>
                </div>

                <!-- Client Telephone  -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Telephone
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_phone }}
                    </dd>
                </div>

                <!-- Client Email -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_email }}
                    </dd>
                </div>

                <!-- Client Website -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Website
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_website }}
                    </dd>
                </div>

                <!-- Client Notes -->
                <div class="py-2 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Description
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $selected_description }}
                    </dd>
                </div>

            </dl>
        </div>

    </div>
</div>