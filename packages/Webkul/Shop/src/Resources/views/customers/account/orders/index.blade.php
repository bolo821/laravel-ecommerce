<x-shop::layouts.account>
    {{-- Page Title --}}
    <x-slot:title>
        @lang('shop::app.customers.account.orders.title')
    </x-slot>

    {{-- Breadcrumbs --}}
    @section('breadcrumbs')
        <x-shop::breadcrumbs name="orders"></x-shop::breadcrumbs>
    @endSection

    <div class="flex justify-between items-center">
        <div class="">
            <h2 class="text-[26px] font-medium">
                @lang('shop::app.customers.account.orders.title')
            </h2>
        </div>
    </div>

    <x-shop::datagrid :src="route('shop.customers.account.orders.index')"></x-shop::datagrid>
</x-shop::layouts.account>
