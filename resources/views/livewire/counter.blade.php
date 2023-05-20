<div class="p-16 flex justify-center gap-6 items-center flex-col w-full	">
    <div>
        <h2>Counter</h2>
    </div>
    <div>
        <button wire:click="increment" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">+</button>
        <span class="px-4">{{ $count }}</span>
        <button wire:click="decrement" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">-</button>
    </div>
    <hr class="w-full border-solid border-gray-700"> 
</div>

