@extends('../themes/' . $activeTheme . '/' . $activeLayout)

@section('subhead')
    <title>Dashboard - Midone - Tailwind Admin Dashboard Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">General Report</h2>
                        <a class="ml-auto flex items-center text-primary" href="">
                            <x-base.lucide class="mr-3 h-4 w-4" icon="RefreshCcw" /> Reload Data
                        </a>
                    </div>
                    <div class="mt-5 grid grid-cols-12 gap-6">
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div @class([
                                'relative zoom-in',
                                "before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']",
                            ])>
                                <div class="box p-5">
                                    <div class="flex">
                                        <x-base.lucide class="h-[28px] w-[28px] text-primary" icon="Users" />
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">{{ $users }}</div>
                                    <div class="mt-1 text-base text-slate-500">All users count</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div @class([
                                'relative zoom-in',
                                "before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']",
                            ])>
                                <div class="box p-5">
                                    <div class="flex">
                                        <x-base.lucide class="h-[28px] w-[28px] text-primary" icon="Store" />
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">{{ $sellers }}</div>
                                    <div class="mt-1 text-base text-slate-500">seller count</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div @class([
                                'relative zoom-in',
                                "before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']",
                            ])>
                                <div class="box p-5">
                                    <div class="flex">
                                        <x-base.lucide class="h-[28px] w-[28px] text-primary" icon="ShoppingCart" />
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">{{ $buyers }}</div>
                                    <div class="mt-1 text-base text-slate-500">
                                        buyer count
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div @class([
                                'relative zoom-in',
                                "before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']",
                            ])>
                                <div class="box p-5">
                                    <div class="flex">
                                        <x-base.lucide class="h-[28px] w-[28px] text-primary" icon="Package" />
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">{{ $products }}</div>
                                    <div class="mt-1 text-base text-slate-500">Total Product</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 grid grid-cols-12 gap-6">
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div @class([
                                'relative zoom-in',
                                "before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']",
                            ])>
                                <div class="box p-5">
                                    <div class="flex">
                                        <x-base.lucide class="h-[28px] w-[28px] text-primary" icon="UserPlus" />
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">{{ $genderMale }}</div>
                                    <div class="mt-1 text-base text-slate-500">Laki Laki</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div @class([
                                'relative zoom-in',
                                "before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']",
                            ])>
                                <div class="box p-5">
                                    <div class="flex">
                                        <x-base.lucide class="h-[28px] w-[28px] text-primary" icon="UserMinus" />
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">{{ $genderFemale }}</div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Perempuan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 mt-12 lg:col-span-12">
                    <div class="intro-y block h-10 items-center sm:flex">
                        <h2 class="mr-5 truncate text-lg font-medium">Sales Report</h2>
                        <div class="relative mt-3 text-slate-500 sm:ml-auto sm:mt-0">
                            <x-base.lucide class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4" icon="Calendar" />
                            <x-base.litepicker class="datepicker !box pl-10 sm:w-56" type="text" />
                        </div>
                    </div>
                    <div class="intro-y box mt-12 p-5 sm:mt-5">
                        <div class="flex flex-col md:flex-row md:items-center">
                            <div class="flex">
                                <div>
                                    <div class="text-lg font-medium text-primary dark:text-slate-300 xl:text-xl">
                                        $15,000
                                    </div>
                                    <div class="mt-0.5 text-slate-500">This Month</div>
                                </div>
                                <div
                                    class="mx-4 h-12 w-px border border-r border-dashed border-slate-200 dark:border-darkmode-300 xl:mx-5">
                                </div>
                                <div>
                                    <div class="text-lg font-medium text-slate-500 xl:text-xl">
                                        $10,000
                                    </div>
                                    <div class="mt-0.5 text-slate-500">Last Month</div>
                                </div>
                            </div>
                            <x-base.menu class="mt-5 md:ml-auto md:mt-0">
                                <x-base.menu.button class="font-normal" as="x-base.button" variant="outline-secondary">
                                    Filter by Category
                                    <x-base.lucide class="ml-2 h-4 w-4" icon="ChevronDown" />
                                </x-base.menu.button>
                                <x-base.menu.items class="h-32 w-40 overflow-y-auto">
                                    <x-base.menu.item>PC & Laptop</x-base.menu.item>
                                    <x-base.menu.item>Smartphone</x-base.menu.item>
                                    <x-base.menu.item>Electronic</x-base.menu.item>
                                    <x-base.menu.item>Photography</x-base.menu.item>
                                    <x-base.menu.item>Sport</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                        <div @class([
                            'relative',
                            'before:content-[\'\'] before:block before:absolute before:w-16 before:left-0 before:top-0 before:bottom-0 before:ml-10 before:mb-7 before:bg-gradient-to-r before:from-white before:via-white/80 before:to-transparent before:dark:from-darkmode-600',
                            'after:content-[\'\'] after:block after:absolute after:w-16 after:right-0 after:top-0 after:bottom-0 after:mb-7 after:bg-gradient-to-l after:from-white after:via-white/80 after:to-transparent after:dark:from-darkmode-600',
                        ])>
                            <x-report-line-chart class="-mb-6 mt-6" height="h-[275px]" />
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
            </div>
        </div>
    </div>
@endsection
