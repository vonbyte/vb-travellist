<x-app-layout>
    <form action="#">
        <div class="grid">
            <div>
                <label for="listName">{{ trans('packinglist.labels.name') }}</label>
                <input class="u-full-width" type="text" placeholder="Name" id="listName" required maxlength="150" value="">
            </div>

        </div>
        <div class="grid">
            <div>
                <label for="listStartDate">{{ trans('packinglist.labels.startDate') }}</label>
                <input class="u-full-width" type="date" id="listStartDate" value="">
            </div>
            <div>
                <label for="listEndDate">{{ trans('packinglist.labels.endDate') }}</label>
                <input class="u-full-width" type="date" id="listEndDate" value="">
            </div>
        </div>
        <div class="grid">
            <div>
                <label for="listDescription">{{ trans('packinglist.labels.description') }}</label>
                <textarea class="u-full-width" placeholder="…" id="listDescription" value=""></textarea>
            </div>

        </div>
        <div class="grid">
            <div>
                <label for="listNotes">{{ trans('packinglist.labels.notes') }}</label>
                <textarea class="u-full-width" placeholder="…" id="listNotes" value=""></textarea>
            </div>

        </div>
        <div class="grid">
            <div>
                <button class="button-secondary" type="button">Cancel</button>
            </div>
            <div>
                <input class="button-primary" type="submit" value="Submit">
            </div>

        </div>
    </form>
</x-app-layout>
