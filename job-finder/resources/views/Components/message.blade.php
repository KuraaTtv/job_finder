@if(session()->has('Message'))
<div class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3 shadow-xl"
x-data={show:true} x-init="setTimeout(() => show=false,2000)" x-show ="show">
    <p>
        {{session('Message')}}
    </p>
</div>

@endif