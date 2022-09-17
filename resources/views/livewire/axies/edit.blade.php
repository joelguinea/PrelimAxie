<div>
        <div class="card border border-primary ">
            <div class="card-header  bg-danger")">
                <h3 class="text-center mt-60 ">Edit Axie</h3>
            </div>
            <div class="card-body shadow">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="axie_name">
                    <label for="axie_name">Axie Name</label>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="axie_type">
                    <label for="axie_type">Axie Type</label>
                    @error('axie_type')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.debounce.500ms="price">
                    <label for="price">Price</label>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select name="color" class="form-select" wire:model.defer="color">
                        <option hidden="true">Select Color</option>
                        <option selected disabled>Select Color</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                        <option value="red">Red</option>
                        <option value="pink">Pink</option>
                    </select>
                    <label for="color">Color</label>
                    @error('sim_card')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-danger" wire:click="editAxie()">
                        Save Changes
                    </button>
                    <button class="btn btn-danger mx-2" wire:click="back()">
                        Back
                    </button>
                </div>
            </div>
        </div>
</div>
