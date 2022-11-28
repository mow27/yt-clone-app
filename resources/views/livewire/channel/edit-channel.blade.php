<div>
    {{-- In work, do what you enjoy. --}}

<form wire:submit.prevent="submit">
    
   <input type="text" wire:model="name"> 
   <button type="submit">Submit</button>

</form>

   <h4> {{ $name }} </h4>

</div>
