<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Job Title" name="title" placeholder="CEO" />
        <x-forms.input label="Job Location" name="location" placeholder="New York, NY" />
        <x-forms.input label="Job Salary" name="salary" placeholder="$100,000" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com" />
        <x-forms.checkbox label="Feature (Costs extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (separated by commas)" name="tags" placeholder="video, producer, education" />

        <x-forms.button>Create Job</x-forms.button>
    </x-forms.form>
</x-layout>
