@if($paginator->hasPages())
<div class="flex justify-between mt-5">
  @if($paginator->onFirstPage())
  <!-- previous -->
  <div class="livewire-paginate bg-gray-200">previous</div>
  @else
  <button class="livewire-paginate hover:bg-gray-200" wire:click="previousPage">previous</button>
  @endif

  @if($paginator->hasMorePages())
  <!-- next -->
  <button class="livewire-paginate hover:bg-gray-200" wire:click="nextPage">next</button>
  @else
  <div class="livewire-paginate bg-gray-200">next</div>
  @endif
</div>
@endif