@props([
    'title',
    'description' => null,
    'breadcrumb' => null,
    'breadcrumbRoute' => null,
    'actionRoute' => null,
    'actionText' => null,
    'showAcademicYear' => false,
])

<div class="mb-8 border-b border-[#E5E3DB] pb-5">

    {{-- Breadcrumb --}}
    @if ($breadcrumb && $breadcrumbRoute)
        <div class="mb-2 flex items-center gap-2 text-xs text-slate-500">

            <a href="{{ route($breadcrumbRoute) }}" class="hover:text-[#A16207] text-sm">
                {{ $breadcrumb }}
            </a>

            <span>></span>

            {{-- Breadcrumb Title --}}
            <span class="font-semibold text-[#16213A] text-sm">
                {{ $title }}
            </span>
        </div>
    @endif

    <div class="flex items-end justify-between">
        <div>
            {{-- Academic Year --}}
            @if ($showAcademicYear)
                <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
                    Tahun Ajaran 2025/2026
                </p>
            @endif

            {{-- Title --}}
            <h1 class="font-display text-3xl font-semibold text-[#16213A]">
                {{ $title }}
            </h1>

            {{-- Description --}}
            @if ($description)
                <p class="mt-1 text-sm text-slate-500">
                    {{ $description }}
                </p>
            @endif

        </div>

        {{-- Action Button --}}
        @if ($actionRoute && $actionText)
            <a href="{{ route($actionRoute) }}"
                class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
                {{ $actionText }}
            </a>
        @endif

    </div>

</div>