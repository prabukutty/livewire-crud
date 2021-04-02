<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
          <div class="form-group">
          <label for="firstname">FirstName</label>
          <input type="text" name="firstname" class="form-conrtol" wire:model="firstname"/>
          @error('firstname')<span class="text-danger">{{message}}</span> @enderror
          </div>
          <div class="form-group">
          <label for="lastname">LastName</label>
          <input type="text" name="lastname" class="form-conrtol" wire:model="lastname"/>
          @error('lastname')<span class="text-danger">{{message}}</span> @enderror
          </div>
          <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-conrtol" wire:model="email"/>
          @error('email')<span class="text-danger">{{message}}</span> @enderror
          </div>
          <div class="form-group">
          <label for="phone">Phone</label>
          <input type="number" name="phone" class="form-conrtol" wire:model="phone"/>
          @error('phone')<span class="text-danger">{{message}}</span> @enderror
          </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  wire:click.prevent="store()">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
