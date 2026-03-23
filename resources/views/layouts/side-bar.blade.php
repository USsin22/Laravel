
    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->

<!-- Sidebar Layout -->
<div class="flex min-h-screen">
  <!-- Sidebar -->
  <aside class="w-64 bg-gray-900">
    <div class="flex h-full flex-col">
      <!-- Logo -->
      <div class="flex h-16 items-center gap-2 px-6">
        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
        <span class="text-lg font-semibold text-white">Your Company</span>
      </div>

      <!-- Navigation -->
      <nav class="flex-1 space-y-1 px-3 py-4">
        <!-- Product Dropdown -->
        <div>
          <button popovertarget="sidebar-product-menu" class="flex w-full items-center justify-between rounded-lg px-3 py-2 text-sm font-semibold text-white hover:bg-white/5">
            <span>Product</span>
            <svg viewBox="0 0 20 20" fill="currentColor" class="size-4 text-gray-500">
              <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
            </svg>
          </button>

          <el-popover id="sidebar-product-menu" anchor="bottom" popover class="w-64 rounded-lg bg-gray-800 p-2 text-sm shadow-lg transition data-closed:opacity-0 data-enter:duration-200 data-leave:duration-150">
            <div class="space-y-1">
              <a href="#" class="block rounded-md px-3 py-2 text-white hover:bg-white/5">Analytics</a>
              <a href="#" class="block rounded-md px-3 py-2 text-white hover:bg-white/5">Engagement</a>
              <a href="#" class="block rounded-md px-3 py-2 text-white hover:bg-white/5">Security</a>
              <a href="#" class="block rounded-md px-3 py-2 text-white hover:bg-white/5">Integrations</a>
              <a href="#" class="block rounded-md px-3 py-2 text-white hover:bg-white/5">Automations</a>
              <div class="my-2 border-t border-white/10"></div>
              <a href="#" class="block rounded-md px-3 py-2 text-white hover:bg-white/5">Watch demo</a>
              <a href="#" class="block rounded-md px-3 py-2 text-white hover:bg-white/5">Contact sales</a>
            </div>
          </el-popover>
        </div>

        <!-- Regular Links -->
        <a href="#" class="block rounded-lg px-3 py-2 text-sm font-semibold text-white hover:bg-white/5">Features</a>
        <a href="#" class="block rounded-lg px-3 py-2 text-sm font-semibold text-white hover:bg-white/5">Marketplace</a>
        <a href="#" class="block rounded-lg px-3 py-2 text-sm font-semibold text-white hover:bg-white/5">Company</a>
      </nav>

      <!-- Bottom Section -->
      <div class="border-t border-white/10 p-4">
        <a href="#" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm font-semibold text-white hover:bg-white/5">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-5 text-gray-400">
            <path d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          Log out
        </a>
      </div>
    </div>
  </aside>


</div>
