@extends('layouts.app')

@section('content')
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container {
    width: 100vw;
    height: 100vh;

    display: flex;
    flex-direction: column;

}

.project_list {
    margin-top: 1rem;
    border-radius: 0.3rem;
    box-shadow: 0px 1px 7px 3px rgba(0, 0, 0, 0.75);
}

.edit_form {
    display: none;
}

.project_info {
    padding: 1rem 1rem;
}

.add-item {
    margin-top: 1rem;
}

button {
    margin-top: 1rem;
}
</style>

<script>
$(document).ready(function() {
    $(".show-edit").on("click", function() {
        var clickedbtn = $(this);
        console.log(clickedbtn);

        $(this).parent().siblings(".edit_form").show();

    })
});
</script>

<div class="container">
    <h1>Supervisor List of Student Projects</h1>

    <hr>

    <div class="add-form">
        <h3>Add a project</h3>
        <form action="add" method="POST">
            @csrf

            <div class="add-item">
                <label for="student_id">Student ID</label>
                <input type="text" id="student_id" class="form-control" name="student_id" placeholder="" value="">
            </div>

            <div class="add-item">
                <label for="PSM_title">PSM Title</label>
                <input type="text" id="PSM_title" class="form-control" name="PSM_title" placeholder="" value="">
            </div>

            <div class="add-item">
                <label for="PSM_type">PSM Type</label>
                <select style="width:100%" name="PSM_type" class="custom-select" id="inputGroupSelect01" required>
                    <option value="Project">
                        Project
                    </option>
                    <option value="Research">
                        Research
                    </option>
                </select>
            </div>

            <input value="{{$supervisor_id}}" name="supervisor_id" type="hidden">
            <button class="btn btn-primary">Add</button>
        </form>
    </div>

    <hr>



    @foreach ($projects as $project)

    <div class="project_list">

        <div class="project_info">
            <h4>Student ID</h4>
            <p>{{$project->student_id}}</p>
            <h4>Student Name</h4>
            <p>{{$project->student_name}}</p>
            <h4>PSM Title</h4>
            <p>{{$project->PSM_title}}</p>
            <h4>PSM Type</h4>
            <p>{{$project->PSM_type}}</p>



            <form id="delete-frm" class="" action="delete/{{ $project->project_id }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger">Delete Project</button>
                <button type="button" class="btn btn-success show-edit">add Edit</button>
            </form>


            <div class="edit_form">

                <form action="update/{{$project->project_id}}" method="POST">
                    @csrf
                    @method('PUT')



                    <label for="PSM_title">PSM Title</label>
                    <input type=" text" id="PSM_title" class="form-control" name="PSM_title" placeholder=""
                        value="{{$project->PSM_title}}">

                    <label for="PSM_type">PSM Type</label>
                    <select style="width:100%" class="custom-select" id="inputGroupSelect01" name="PSM_type" required>
                        <option value="Project">
                            Project
                        </option>
                        <option value="Research">
                            Research
                        </option>

                    </select>

                    <button class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>





    </div>

    @endforeach

</div>

@endsection('content')