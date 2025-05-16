<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background: linear-gradient(to bottom, #f3f4f6, #00528A);">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white bg-opacity-95 shadow-lg overflow-hidden sm:rounded-lg border border-gray-200">
            <slot />
        </div>
    </div>
</template>
