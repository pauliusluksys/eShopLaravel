<div>
@include('livewire.admin.categories.create')
    @include('livewire.admin.categories.update')
<div class="container">
    <div class="card">
        <div class="row">

            <div class="card-body">
                @foreach($categories as $category)
                    <div class="col-md-12">
                        <h3>{{ $category->name }}</h3>
                        <button data-toggle="modal" data-target="#addModal" wire:click="edit({{ $category->id }})">Add</button>
                        <hr />
                        <div class="row my-3">
                            @foreach($category->children as $cats)
                                <div class="col-md-4">
                                    <div class="flex d-inline-flex ">
                                        <h4>{{ $cats->name }}</h4>

                                        <div class=" cat-button-height">
                                            <div class="dropdown show">
                                                <a class="btn btn-secondary dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-arrow-circle-down"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <button class="dropdown-item " data-toggle="modal" data-target="#addModal" wire:click="edit({{ $cats->id }})">Add</button>
                                                    <button class="dropdown-item" data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $cats->id }})">Edit</button>
                                                    <button class="dropdown-item" wire:click="delete({{ $category->id }})">Delete</button>
                                                </div>
                                            </div>

                                        </div>
                                        </div>
                                    <hr />
                                    @foreach($cats->children as $cat)
                                        <div class="d-flex flex-row py-2 justify-content-between">
                                        <div class="text-truncate"><h5>{{$cat->name}}</h5></div>
                                            <button class=" mx-1 btn btn-danger" wire:click="delete({{ $cat->id }})">Delete</button>
                                        </div><br>
                                    @endforeach
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>


</div>

</div>







