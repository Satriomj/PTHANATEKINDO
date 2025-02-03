@extends('layouts.admin.app')

@section('title', 'Kelola Tema')

@section('content')
    <div class="container">
        <h2>Kelola Tema</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form Update Background -->
            <div class="card mb-4">
                <div class="card-header">Update Tampilan Gambar Background</div>
                <div class="card-body">
                    @if($kelolaTema && $kelolaTema->background_image)
                        <img src="{{ asset($kelolaTema->background_image) }}" class="img-thumbnail mb-2" width="200">
                    @else
                        <p>No background image set.</p>
                    @endif
                    <form action="{{ route('kelola-tema.updateBackground') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="file" class="form-control" name="background_image" required>
                        @error('background_image') <div class="text-danger">{{ $message }}</div> @enderror
                        <button type="submit" class="btn btn-primary mt-2">Update Background</button>
                    </form>
                </div>
            </div>


       <!-- Form Update Logo -->
            <div class="card mb-4">
                <div class="card-header">Update Tampilan Logo Website</div>
                <div class="card-body">
                    @if($kelolaTema && $kelolaTema->logo_image)
                        <img src="{{ asset($kelolaTema->logo_image) }}" class="img-thumbnail mb-2" width="100">
                    @endif
                    <form action="{{ route('kelola-tema.updateLogo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="file" class="form-control" name="logo_image" required>
                        @error('logo_image') <div class="text-danger">{{ $message }}</div> @enderror
                        <button type="submit" class="btn btn-primary mt-2">Update Logo</button>
                    </form>
                </div>
            </div>


        <!-- Form Update Menu Navigasi -->
        <div class="card mb-4">
            <div class="card-header">Update Susunan Menu</div>
            <div class="card-body">
                <ul id="sortable-menu" class="list-group">
                    @foreach(json_decode($kelolaTema->menu_navigation ?? '[]', true) as $menu)
                        <li class="list-group-item d-flex justify-content-between align-items-center" data-route="{{ $menu['route'] }}">
                            <i class="{{ $menu['icon'] }}"></i> {{ $menu['name'] }}
                            <span class="btn btn-danger btn-sm remove-menu">X</span>
                        </li>
                    @endforeach
                </ul>

                <form action="{{ route('kelola-tema.updateMenu') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="menu_navigation" id="menu-navigation-input">
                    <button type="submit" class="btn btn-primary mt-2">Update Menu Navigasi</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#sortable-menu").sortable({
                update: function() {
                    updateMenuJson();
                }
            });

            $(".remove-menu").click(function() {
                $(this).parent().remove();
                updateMenuJson();
            });

            function updateMenuJson() {
                let menuData = [];
                $("#sortable-menu li").each(function() {
                    menuData.push({
                        route: $(this).data("route"),
                        icon: $(this).find("i").attr("class"),
                        name: $(this).text().trim().replace("X", "")
                    });
                });
                $("#menu-navigation-input").val(JSON.stringify(menuData));
            }
        });
    </script>
@endsection
