<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        <h2 class="inline-block font-bold tracking-wider text-primary-dark dark:text-light">Profile Information</h2>
    </x-slot>

    <x-slot name="description">
        <label class="inline-block tracking-wider text-black dark:text-light ">Update your account\'s profile information and email address.</label>
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
            <!-- Profile Photo File Input -->
            <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

            <x-jet-label for="photo" value="{{ __('Photo') }}" />

            <!-- Current Profile Photo -->
            <div class="mt-2" x-show="! photoPreview">
                <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
            </div>

            <!-- New Profile Photo Preview -->
            <div class="mt-2" x-show="photoPreview">
                <span class="block rounded-full w-20 h-20" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                </span>
            </div>

            <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('Select A New Photo') }}
            </x-jet-secondary-button>

            @if ($this->user->profile_photo_path)
            <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                {{ __('Remove Photo') }}
            </x-jet-secondary-button>
            @endif

            <x-jet-input-error for="photo" class="mt-2" />
        </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full text-black dark:text-dark" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full text-black dark:text-dark" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Tempat dan Tanggal Lahir -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="ttd" value="{{ __('Tempat dan Tanggal Lahir') }}" />
            <x-jet-input id="ttd" type="text" class="mt-1 block w-full text-black dark:text-dark" wire:model.defer="state.ttd" />
            <x-jet-input-error for="ttd" class="mt-2" />
        </div>

        <!-- Jabatan -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="jabatan" value="{{ __('Jabatan') }}" />
            <x-jet-input id="jabatan" type="text" class="mt-1 block w-full text-black dark:text-dark" style="background: grey;" wire:model.defer="state.jabatan" readonly />
            <x-jet-input-error for="jabatan" class="mt-2" />
        </div>

        <!-- Nomor Telepon -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="no_telepon" value="{{ __('Nomor Telepon') }}" />
            <x-jet-input id="no_telepon" type="number" class="mt-1 block w-full text-black dark:text-dark" wire:model.defer="state.no_telepon" />
            <x-jet-input-error for="no_telepon" class="mt-2" />
        </div>

        <!-- Alamat -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
            <x-jet-input id="alamat" type="text" class="mt-1 block w-full text-black dark:text-dark" wire:model.defer="state.alamat" />
            <x-jet-input-error for="alamat" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>