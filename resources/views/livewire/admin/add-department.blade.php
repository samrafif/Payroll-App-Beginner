<div>
    <flux:modal.trigger name="add-department">
        <flux:button icon="plus" variant="primary" type="button"
            class="hover:scale-105 transition-transform duration-200">
            {{ __('Add Department') }}
        </flux:button>
    </flux:modal.trigger>

    <flux:modal wire:close="close" name="add-department" class="md:w-96"
        enter="transition ease-out duration-300 transform" enter-start="opacity-0 scale-90"
        enter-end="opacity-100 scale-100" leave="transition ease-in duration-200 transform"
        leave-start="opacity-100 scale-100" leave-end="opacity-0 scale-90">
        <form wire:submit="addDepartment" class="space-y-6">

            <div>
                <flux:heading size="lg" class="animate-fade-in">New Department</flux:heading>
                <flux:text class="mt-2 animate-fade-in">Add a new department to your company and manage your team.
                </flux:text>
            </div>
            <flux:input wire:model="name" label="Name" placeholder="Department Name" required
                class="animate-slide-in-left delay-100" />
            <flux:textarea wire:model="description" label="Description" placeholder="Department Description"
                class="animate-slide-in-left delay-200" />
            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" variant="primary" icon="check"
                    class="hover:scale-105 transition-transform duration-200 animate-bounce-in delay-300">Save
                </flux:button>
            </div>

        </form>
    </flux:modal>
</div>
