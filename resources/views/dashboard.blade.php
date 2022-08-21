<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @forelse ($images as $image)
                <div class="font-semibold text-2xl text-center p-6 bg-white border-b border-gray-200">
                    <div class="pb-6">{{ substr($image->name, 0, strpos($image->name, ".")) }}</div>
                    <img src="{{ asset($image->image_path) }}">
                </div>
                @empty
                <span>Nothing uploaded.</span>
                @endforelse
            </div>
        </div>
    </div> --}}

    <!-- Content Row -->
    <div class="container">
    @if (Auth()->id() == 1)
<br>
       <h5> Only test user can see this dashboard </h5>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header-text-center">
                        Information for APAR cohort
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="graduation_session">Graduation Session:</label>
                            <select class="form-control" name="graduation_session"
                                aria-label="Select Graduation Session" required>
                                <option value="2021/2022">2021/2022</option>
                                <option value="2022/2023">2022/2023</option>
                                <option value="2023/2024">2023/2024</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="graduation_semester">Graduation Semester:</label>
                            <select class="form-control" name="graduation_semester"
                                aria-label="Select Graduation Semester" required>
                                <option value="1">I</option>
                                <option value="2">II</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="total_student">Total number of students for this cohort:</label>
                            <input type="number" name="total_student" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="formFile" class="form-label">Upload student file</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <p> Task 21/8/2022, updated all the user and password, the year of APAR still configured (for now need to deleted file to proceed with a new year of APAR) </p>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th class="border">No</th>
                    <th class="border text-center">Email</th>
                    <th class="border text-center">Password</th>

                </tr>
            </thead>
            <tbody>
                        <tr>
                            <td class="border text-center">1</td>
                            <td class="border text-center">secrh@gmail.com</td>
                            <td class="border text-center">password</td>
                          </tr>
                          <tr>
                            <td class="border text-center">2</td>
                            <td class="border text-center">secjh@gmail.com</td>
                            <td class="border text-center">password</td>
                          </tr>
                          <tr>
                            <td class="border text-center">3</td>
                            <td class="border text-center">secph@gmail.com</td>
                            <td class="border text-center">password</td>
                          </tr>
                          <tr>
                            <td class="border text-center">4</td>
                            <td class="border text-center">secvh@gmail.com</td>
                            <td class="border text-center">password</td>
                          </tr>
                          <tr>
                            <td class="border text-center">5</td>
                            <td class="border text-center">secbh@gmail.com</td>
                            <td class="border text-center">password</td>
                          </tr>
            </tbody>
        </table>

    @endif
    </div>

</x-app-layout>
