<div>
    <style>
        td,th{border: 1px solid lightgray; padding: 0 0.25rem;}
    </style>

    {{-- CLASS BUTTONS --}}
    <div class="flex flex-row flex-wrap gap-2 w-11/12 my-2">
        <button
            wire:click="$set('classOf', '-1')"
            class="bg-gray-800 text-white text-xs border-black rounded-full px-2 pt-1"
            type="button"
            title="All Alumni"
        > *
        </button>
        @foreach($classes AS $class)
            <button
                wire:click="$set('classOf', {{ $class }})"
                class="bg-gray-800 text-white text-xs border-black rounded-full px-2 "
                type="button"
                title="Class of {{ $class }} alumni"
            >
                {{ $class }}
            </button>
        @endforeach
    </div>

    {{-- SEARCH --}}
    <div class="my-2 bg-gray-100 w-full py-1">
        <input wire:model.live.debounce.500ms='search' class="w-1/3 ml-2 h-8 " type="text" placeholder="Search by name"/>
    </div>

    <div>Search: {{ $search }}</div>

    <table>
        <thead>
        <tr>
            <th>###</th>
            <th>
                Name
                <span class="text-xs italic">({{ count($students) }})</span>
            </th>
            <th>Class</th>
        </tr>
        </thead>
        <tbody>
     @foreach($students AS $student)
        <tr>
            <td class="text-center">
                {{ $loop->iteration }}
            </td>
            <td>
                {{$student['last_name']}}, {{ $student['first_name'] }} @if(strlen($student['maiden_name'])) (
                {{ $student['maiden_name'] }}) @endif
            </td>
            <td class="text-center">
                <button
                    wire:click="$set('classOf', {{ $student['class_of'] }})"
                    class="text-blue-600 hover:underline"
                    type="button"
                    title="Class of {{ $class }} alumni"
                >
                    {{ $student['class_of'] }}
                </button>
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>

</div>
