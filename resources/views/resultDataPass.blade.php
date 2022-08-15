<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Percentage of students Passed KPI of Programme Learning Outcome') }}
        </h2>
    </x-slot>
    <br>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="container">

        <table class="table table-responsive">
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
                @php($i = 1)
                @foreach ($courses as $course1)
                    @if ($course1->students->where('user_id', Auth()->id())->count() > 0)
                        <tr>
                            <td class="border text-center">{{ $i++ }}</td>
                            <td class="border text-center">{{ $course1->year_offer }}</td>
                            <td class="border text-center">{{ $course1->semester_offer }}</td>
                            <td class="border text-center">{{ $course1->course_name }}</td>
                            <td class="border text-center">{{ $course1->course }}</td>
                            <td class="border text-center">{{ $course1->credit_hour }}</td>
                            <td class="border text-center">
                                {{ $course1->students->where('user_id', Auth()->id())->count() }}</td>
                            <td class="border text-center"> @php
                                $PO1 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO1', '>', 0);
                                foreach ($course1->students as $student) {
                                    if ($student->PO1 >= 65.0) {
                                        $PO1++;
                                    }
                                }
                            @endphp
                                {{ $PO1 }}</td>
                            <td class="border text-center"> @php
                                $PO2 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO2', '>', 0);
                                foreach ($course1->students as $student) {
                                    if ($student->PO2 >= 65.0) {
                                        $PO1++;
                                    }
                                }
                            @endphp
                                {{ $PO2 }}</td>
                            <td class="border text-center"> @php
                                $PO3 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO3', '>', 0);
                                foreach ($course1->students as $student) {
                                    if ($student->PO3 >= 65.0) {
                                        $PO3++;
                                    }
                                }
                            @endphp
                                {{ $PO3 }}</td>
                            </td>
                            <td class="border text-center">@php
                                $PO4 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO4', '>', 0);
                                foreach ($course1->students as $student) {
                                    if ($student->PO4 >= 65.0) {
                                        $PO4++;
                                    }
                                }
                            @endphp
                                {{ $PO4 }}</td>
                            <td class="border text-center">@php
                                $PO5 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO5', '>', 0);
                                foreach ($course1->students as $student) {
                                    if ($student->PO5 >= 65.0) {
                                        $PO5++;
                                    }
                                }
                            @endphp
                                {{ $PO5 }}</td>
                            <td class="border text-center">@php
                                $PO6 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO6', '>', 0);
                                foreach ($course1->students as $student) {
                                    if ($student->PO6 >= 65.0) {
                                        $PO6++;
                                    }
                                }
                            @endphp
                                {{ $PO6 }}</td>
                            <td class="border text-center">@php
                                $PO7 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO7', '>', 0);
                                foreach ($course1->students as $student) {
                                    if ($student->PO7 >= 65.0) {
                                        $PO7++;
                                    }
                                }
                            @endphp
                                {{ $PO7 }}</td>
                            <td class="border text-center">@php
                                $PO8 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO8', '>', 0);
                                foreach ($course1->students as $student) {
                                    if ($student->PO8 >= 65.0) {
                                        $PO8++;
                                    }
                                }
                            @endphp
                                {{ $PO8 }}</td>
                            <td class="border text-center">@php
                                $PO9 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO9', '>', 0);
                                foreach ($course1->students as $student) {
                                    if ($student->PO9 >= 65.0) {
                                        $PO9++;
                                    }
                                }
                            @endphp
                                {{ $PO9 }}</td>
                            <td class="border text-center">@php
                                $PO10 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO10', '>', 0);
                                foreach ($course1->students as $student) {
                                    if ($student->PO10 >= 65.0) {
                                        $PO10++;
                                    }
                                }
                            @endphp
                                {{ $PO10 }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

    </div>


</x-app-layout>
