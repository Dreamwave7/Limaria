





<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{route('feedback.store')}}">
    @csrf
    @method("post")
    <div class="row row-10">
        <div class="col-md-6 wow-outer">
            <div class="form-wrap wow fadeSlideInUp">
                <label class="form-label-outside" for="contact-first-name">Імя *</label>
                <input class="form-input" id="contact-first-name" type="text" name="first_name" value="{{ old('first_name') }}" required>
                @error('first_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6 wow-outer">
            <div class="form-wrap wow fadeSlideInUp">
                <label class="form-label-outside" for="contact-last-name">Прізвище </label>
                <input class="form-input" id="contact-last-name" type="text" name="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6 wow-outer">
            <div class="form-wrap wow fadeSlideInUp">
                <label class="form-label-outside" for="contact-email">Електронна пошта *</label>
                <input class="form-input" id="contact-email" type="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6 wow-outer">
            <div class="form-wrap wow fadeSlideInUp">
                <label class="form-label-outside" for="contact-phone">Номер телефону *</label>
                <input class="form-input" id="contact-phone" type="text" name="phone" value="{{ old('phone') }}" required>
                @error('phone')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-12 wow-outer">
            <div class="form-wrap wow fadeSlideInUp">
                <label class="form-label-outside" for="contact-message">Ваше запитання *</label>
                <textarea class="form-input" id="contact-message" name="message" required>{{ old('message') }}</textarea>
                @error('message')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="group group-middle">
        <div class="wow-outer">
            <button class="button button-primary button-winona wow slideInRight" type="submit">Відправити</button>
        </div>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</form>


@push('scripts')
{{--    <script src="https://cdn.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.8/dist/inputmask.min.js"></script>

    <script>
        $(document).ready(function() {
            Inputmask({
                mask: "+38 (999) 999-99-99",
                placeholder: "_",
                showMaskOnHover: false,
                clearIncomplete: true
            }).mask("#contact-phone");
        });

        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector('.rd-form');

            form.addEventListener('submit', function (e) {
                let isValid = true;

                document.querySelectorAll('.text-danger').forEach(el => el.remove());
                form.querySelectorAll('[required]').forEach(input => {
                    if (!input.value.trim()) {
                        isValid = false;
                        const error = document.createElement('small');
                        error.classList.add('text-danger');
                        error.textContent = 'Це поле є обов\'язковим.';
                        input.closest('.form-wrap').appendChild(error);
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector('.rd-form');

            const newForm = form.cloneNode(true);
            form.parentNode.replaceChild(newForm, form);


            newForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const formData = new FormData(newForm);

                fetch(newForm.action, {
                    method: newForm.method,
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            newForm.reset();
                        } else {
                            console.error('Ошибка:', data.errors);
                        }
                    })
                    .catch(error => {
                        console.error('error:', error);
                    });
            });
        });

    </script>
@endpush
