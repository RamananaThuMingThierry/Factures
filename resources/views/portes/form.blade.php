<hr>
    <div class="form-group">
        <label for="numero_porte" class="control-label sr-only">Numéro porte</label>
        <input type="number" autofocus autocomplete="off"  value="{{ old('numero_porte') }}" name="numero_porte" id="numero_porte" class="form-control rounded-0 @error('numero_porte') is-invalid @enderror" placeholder="Numéro porte">
        @error('numero_porte')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
<hr>

<div class="form-group d-flex justify-content-end">
    <input type="submit" value="{{ $submitButtonText }}" class="btn btn-primary rounded-0"  type="button">
    <a type="button" class="btn btn-danger ml-1 rounded-0" data-dismiss="modal" href="{{ route('portes.index') }}" aria-label="Close">Annuler</a>
</div>
