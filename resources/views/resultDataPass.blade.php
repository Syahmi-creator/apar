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
                    {{-- <th class="border text-center">Year</th>
                    <th class="border text-center">Semester</th> --}}
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
                @php
                    $i = 1;
                @endphp
                @foreach ($courses as $course1)
                    @if ($course1->students->where('user_id', Auth()->id())->count() > 0)
                        <tr>
                            <td class="border text-center">{{ $i++ }}</td>
                            {{-- <td class="border text-center">{{ $course1->year_offer }}</td>
                            <td class="border text-center">{{ $course1->semester_offer }}</td> --}}
                            <td class="border text-center">{{ $course1->course_name }}</td>
                            <td class="border text-center">{{ $course1->course }}</td>
                            <td class="border text-center">{{ $course1->credit_hour }}</td>
                            <td class="border text-center">
                                {{ $course1->students->where('user_id', Auth()->id())->count() }}</td>
                            <td class="border text-center">
                                @php
                                $PO1 = 0;
                                $T_studentPassedPO1 = $course1->students->where('user_id', Auth()->id())->where('PO1', '>', 0)->count();
                                foreach ($course1->students as $student) {
                                    if ($student->PO1 >= 65.0) {
                                        $PO1++;
                                    }
                                }

                                if(  $T_studentPassedPO1 != 0){
                                    $resultPO1 = $PO1/$T_studentPassedPO1;
                                }else{
                                    $resultPO1 = $PO1;
                                }
                            @endphp
                                {{ $resultPO1 }}</td>
                            <td class="border text-center"> @php
                                $PO2 = 0;
                                $T_studentPassedPO2 = $course1->students->where('user_id', Auth()->id())->where('PO2', '>', 0)->count();
                                foreach ($course1->students as $student) {
                                    if ($student->PO2 >= 65.0) {
                                        $PO2++;
                                    }
                                }
                                if(  $T_studentPassedPO2 != 0){
                                    $resultPO2 = $PO2/$T_studentPassedPO2;
                                }else{
                                    $resultPO2 = $PO2;
                                }
                            @endphp
                                {{ $resultPO2 }}</td>

                            <td class="border text-center"> @php
                                $PO3 = 0;
                                $T_studentPassedPO3 = $course1->students->where('user_id', Auth()->id())->where('PO3', '>', 0)->count();
                                foreach ($course1->students as $student) {
                                    if ($student->PO3 >= 65.0) {
                                        $PO3++;
                                    }
                                }
                                if(  $T_studentPassedPO3 != 0){
                                    $resultPO3 = $PO3/$T_studentPassedPO3;
                                }else{
                                    $resultPO3 = $PO3;
                                }
                            @endphp
                                {{ $resultPO3 }}</td>
                            </td>
                            <td class="border text-center">@php
                                $PO4 = 0;
                                $T_studentPassedPO4 = $course1->students->where('user_id', Auth()->id())->where('PO4', '>', 0)->count();
                                foreach ($course1->students as $student) {
                                    if ($student->PO4 >= 65.0) {
                                        $PO4++;
                                    }
                                }
                                if(  $T_studentPassedPO4 != 0){
                                    $resultPO4 = $PO4/$T_studentPassedPO4;
                                }else{
                                    $resultPO4 = $PO4;
                                }
                            @endphp
                                {{ $resultPO4 }}</td>
                            <td class="border text-center">@php
                                $PO5 = 0;
                                $T_studentPassedPO5 = $course1->students->where('user_id', Auth()->id())->where('PO5', '>', 0)->count();
                                foreach ($course1->students as $student) {
                                    if ($student->PO5 >= 65.0) {
                                        $PO5++;
                                    }
                                }
                                if(  $T_studentPassedPO5 != 0){
                                    $resultPO5 = $PO5/$T_studentPassedPO5;
                                }else{
                                    $resultPO5 = $PO5;
                                }
                            @endphp
                                {{ $resultPO5 }}</td>
                            <td class="border text-center">@php
                                $PO6 = 0;
                                $T_studentPassedPO6 = $course1->students->where('user_id', Auth()->id())->where('PO6', '>', 0)->count();
                                foreach ($course1->students as $student) {
                                    if ($student->PO6 >= 65.0) {
                                        $PO6++;
                                    }
                                }
                                if(  $T_studentPassedPO6 != 0){
                                    $resultPO6 = $PO6/$T_studentPassedPO6;
                                }else{
                                    $resultPO6 = $PO6;
                                }
                            @endphp
                                {{ $resultPO6 }}</td>
                            <td class="border text-center">@php
                                $PO7 = 0;
                                $T_studentPassedPO7 = $course1->students->where('user_id', Auth()->id())->where('PO7', '>', 0)->count();
                                foreach ($course1->students as $student) {
                                    if ($student->PO7 >= 65.0) {
                                        $PO7++;
                                    }
                                }
                                if(  $T_studentPassedPO7 != 0){
                                    $resultPO7 = $PO7/$T_studentPassedPO7;
                                }else{
                                    $resultPO7 = $PO7;
                                }
                            @endphp
                                {{ $resultPO7 }}</td>
                            <td class="border text-center">@php
                                $PO8 = 0;
                                $T_studentPassedPO8 = $course1->students->where('user_id', Auth()->id())->where('PO8', '>', 0)->count();
                                foreach ($course1->students as $student) {
                                    if ($student->PO8 >= 65.0) {
                                        $PO8++;
                                    }
                                }
                                if(  $T_studentPassedPO8 != 0){
                                    $resultPO8 = $PO8/$T_studentPassedPO8;
                                }else{
                                    $resultPO8 = $PO8;
                                }
                            @endphp
                                {{   $resultPO8 }}</td>
                            <td class="border text-center">@php
                                $PO9 = 0;
                                $T_studentPassedPO9 = $course1->students->where('user_id', Auth()->id())->where('PO9', '>', 0)->count();
                                foreach ($course1->students as $student) {
                                    if ($student->PO9 >= 65.0) {
                                        $PO9++;
                                    }
                                }
                                if(  $T_studentPassedPO9 != 0){
                                    $resultPO9 = $PO9/$T_studentPassedPO9;
                                }else{
                                    $resultPO9 = $PO9;
                                }
                            @endphp
                                {{  $resultPO9 }}</td>
                            <td class="border text-center">@php
                                $PO10 = 0;
                                $T_studentPassedPO10 = $course1->students->where('user_id', Auth()->id())->where('PO10', '>', 0)->count();
                                foreach ($course1->students as $student) {
                                    if ($student->PO10 >= 65.0) {
                                        $PO10++;
                                    }
                                }
                                if(  $T_studentPassedPO10 != 0){
                                    $resultPO10 = $PO10/$T_studentPassedPO10;
                                }else{
                                    $resultPO10 = $PO10;
                                }
                            @endphp
                                {{  $resultPO10 }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

    </div>


</x-app-layout>
