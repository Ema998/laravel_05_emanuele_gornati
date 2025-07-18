<x-layout>
    <header class="container-fluid">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="fw-bold text-center display-1 text-color">GAMELAND</h1>
                @if (session('success'))
                    <div class="alert alert-primary mt-5" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </header>
</x-layout>