<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Number of Student Data') }}
        </h2>
    </x-slot>
    <br>
    <div class="container">
        <div class="overflow-scroll">
            <table class="table table-responsive-center">
                <thead>
                    <tr>
                        <th class="border">No</th>
                        <th class="border text-center">Year</th>
                        <th class="border text-center">Semester</th>
                        <th class="border text-center">Course</th>
                        <th class="border text-center">Course Code</th>
                        <th class="border text-center">Credit Hour</th>
                        <th class="border text-center">Total Student</th>
                        <th class="border text-center">PLO 1</th>
                        <th class="border text-center">PLO 2</th>
                        <th class="border text-center">PLO 3</th>
                        <th class="border text-center">PLO 4</th>
                        <th class="border text-center">PLO 5</th>
                        <th class="border text-center">PLO 6</th>
                        <th class="border text-center">PLO 7</th>
                        <th class="border text-center">PLO 8</th>
                        <th class="border text-center">PLO 9</th>
                        <th class="border text-center">PLO 10</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course1)
                        <tr>
                            <td class="border text-center">{{ $loop->iteration }}</td>
                            <td class="border text-center">{{ $course1->year_offer }}</td>
                            <td class="border text-center">{{ $course1->semester_offer }}</td>

                            <td class="border text-center">{{ $course1->course_name}}</td>

                            <td class="border text-center">{{ $course1->course}}</td>
                            <td class="border text-center">{{ $course1->credit_hour }}</td>
                            <td class="border text-center">{{ $course1->students->count() }}</td>
                            <td class="border text-center">{{ $course1->students->where('PO1', '>', 0)->count() }}</td>
                            <td class="border text-center">{{ $course1->students->where('PO2', '>', 0)->count() }}</td>
                            <td class="border text-center">{{ $course1->students->where('PO3', '>', 0)->count() }}</td>
                            <td class="border text-center">{{ $course1->students->where('PO4', '>', 0)->count() }}</td>
                            <td class="border text-center">{{ $course1->students->where('PO5', '>', 0)->count() }}</td>
                            <td class="border text-center">{{ $course1->students->where('PO6', '>', 0)->count() }}</td>
                            <td class="border text-center">{{ $course1->students->where('PO7', '>', 0)->count() }}</td>
                            <td class="border text-center">{{ $course1->students->where('PO8', '>', 0)->count() }}</td>
                            <td class="border text-center">{{ $course1->students->where('PO9', '>', 0)->count() }}</td>
                            <td class="border text-center">{{ $course1->students->where('PO10', '>', 0)->count() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>



</x-app-layout>
