	{{-- row 1 --}}
	<div class="form-row-total">
		<div class="form-row">
	{{-- event name	 --}}
			<label>Event Name</label>
				<input type="text" name="name" id="full-name" class="input-text"  value="{{ $event->name ?? '' }}" required>
		</div>

	{{-- clients	 --}}
	<div class="form-row">
		<label>Clients</label>
			<select class="input-text clients" name="clients[]" multiple="multiple">
					@if (isset($event))
						@foreach ($event->clients as $client)
							<option value="{{$client->name}}" selected>{{$client->name}}</option>
						@endforeach
					@endif
			</select>
		</div>
	</div>

	{{-- row 2 --}}
	<div class="form-row-total">
		<div class="form-row">
		{{-- event type --}}
			<label>Type</label>
				<input type="text" name="type" id="type" class="input-text" value="{{$event->type ?? ''}}" required>
			</div>
		<div class="form-row">
			<div class="input-field">
		</div>
	{{-- event date --}}
		<label>Date of Event</label>
			<input type="date" name="date" id="date" value="{{$event->date ?? ''}}" class="input-text"  required>
		</div>
	</div>

	{{-- row 3 --}}
	<div class="form-row-total">
		<div class="form-row">
		{{-- expiry date --}}
			<label>Expiry Date</label>
				<input type="date" name="expiry_date" id="edate" class="input-text" value="{{$event->expiry_date ?? ''}}" required>
			</div>
		<div class="form-row">
		{{-- password --}}
			<label>Password</label>
				<input type="password" name="password" id="password" class="input-text"  value="{{$event->password ?? ''}}"required>
					<i class="far fa-eye" id="togglePassword"></i>
		</div>
	</div>

{{-- row 4 --}}
	<div class="form-row-total">
		<div class="form-row">
		{{-- description --}}
			<label>Description</label>
				<textarea id="description" rows="4" cols="47" class="input-text" name="description" required>{{$event->description ?? ''}}</textarea>
		</div>
		<div class="form-row">
			<div class="input-field">
		{{-- upload display photo --}}
				<label>Upload Display Photo</label>
					<div class="display-upload" style="padding-top: .5rem;"></div>
				</div>
			</div>
		</div>
<br>
	{{-- row 5 --}}
	<div class="form-row-total">
		<div class="form-row">
	{{-- checkbox	 --}}
			<label class="check-label">Event Completed</label>
				<input type="checkbox" class="input-checkbox" name="check" id="check" value="{{$event->check ?? ''}}">
			</div>
		</div>
<br>
<br>
	{{-- upload photos --}}
	<div class="input-field">
		<label>Upload Media</label>
			<div class="media-upload" style="padding-top: .5rem;"></div>
		</div>

	{{-- save button --}}
	<div class="form-row-last">
		<input type="submit" name="register" class="register" value="Save">
</div>

{{-- password toogle scripts --}}
<script>
	const togglePassword = document.querySelector('#togglePassword');
	const password = document.querySelector('#password');

	togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>