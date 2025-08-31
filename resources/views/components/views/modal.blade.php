@props(['title', 'id'])

<!-- Main modal -->
<div id="{{ $id }}" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 flex items-center justify-center z-50">
    <div onclick="closeModal('{{ $id }}')" class="absolute inset-0 bg-black/50 transition-opacity duration-300"></div>
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm transform scale-95 opacity-0 transition-all duration-300" id="{{ $id }}-content">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-500 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-700">
                   {{ $title }}
                </h3>
                <button onclick="closeModal('{{ $id }}')" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-sky-600 dark:hover:text-white cursor-pointer">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                {{ $slot }}
            </div>
        </div>
    </div>
</div> 

<script>
    function openModal(id) {
        const modal = document.getElementById(id);
        const content = document.getElementById(id + '-content');
        modal.classList.remove('hidden');
        setTimeout(() => {
            content.classList.remove('scale-95', 'opacity-0');
            content.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        const content = document.getElementById(id + '-content');
        content.classList.add('scale-95', 'opacity-0');
        content.classList.remove('scale-100', 'opacity-100');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // mesma duração da transição
    }
</script>


