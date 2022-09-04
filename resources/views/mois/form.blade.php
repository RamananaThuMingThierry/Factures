<hr>
    <div class="form-group">
        <label for="date_index" class="control-label sr-only">Date index</label>
        <input type="date" autocomplete="off"  value="{{ old('date_index') ?? $today}}" name="date_index" id="date_index" class="form-control rounded-0 @error('date_index') is-invalid @enderror" placeholder="Date index">
        @error('date_index')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="mois" class="mois-label sr-only">Mois</label>
        @if($submitButtonText == "Ajouter")
        <select name="mois" class="form-control rounded-0" id="mois">
            <option value="Janvier">Janvier</option>
            <option value="Février">Février</option>
            <option value="Mars">Mars</option>
            <option value="Avril">Avril</option>
            <option value="Mai">Mai</option>
            <option value="Juin">Juin</option>
            <option value="Juillet">Juillet</option>
            <option value="Août">Août</option>
            <option value="Septembre">Septembre</option>
            <option value="Octobre">Octobre</option>
            <option value="Novembre">Novembre</option>
            <option value="Décembre">Décembre</option>
        </select>
        @endif
    </div>

    <div class="form-group">
        <label for="ancien_index" class="control-label sr-only">Ancien index</label>
        <input type="text" autocomplete="off"  value="{{ old('ancien_index') ?? ($last_mois ?? $mois->ancien_index) }}" name="ancien_index" id="ancien_index" class="form-control rounded-0 @error('ancien_index') is-invalid @enderror" placeholder="Ancien index">
        @error('ancien_index')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="nouvel_index" class="control-label sr-only">Nouvel index</label>
        <input type="text" autofocus autocomplete="off"  value="{{ old('nouvel_index') ?? ($new_mois == false ? '' : $mois->nouvel_index) }}" name="nouvel_index" id="nouvel_index" class="form-control rounded-0 @error('nouvel_index') is-invalid @enderror" placeholder="Nouvel index">
        @error('nouvel_index')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
<hr>

<div class="form-group d-flex justify-content-end">
    <input type="submit" value="{{ $submitButtonText }}" class="btn btn-primary rounded-0"  type="button">
    <a type="button" class="btn btn-danger ml-1 rounded-0" data-dismiss="modal" href="{{ route('mois.index') }}" aria-label="Close">Annuler</a>
</div>
