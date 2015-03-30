@extends('app')

@section('content')
<div class="panel-body">
    <h2>Add Your Username</h2>
    <form method="POST" action="/usernames">
        <input type="text" name="username" placeholder="Username"/>&nbsp;
        <select name="type_id">
            @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
            @endforeach
        </select>&nbsp;
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="submit" value="Save"/>
    </form>
    <br />
    <div class="table-responsive">
        <h2>Registered Usernames</h2>
        <table class="table table-striped table-bordered table-hover" id="username-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Type</th>
            </tr>
            </thead>
            <tbody>
                @foreach($usernames as $username)
                    <tr>
                        <td>{{ $username->id }}</td>
                        <td>{{ $username->username }}</td>
                        <td>{{ $username->type->type }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

    <script>
        $(document).ready(function() {
            $('#username-table').DataTable( {
                "iDisplayLength": 50
            } );
        } );
    </script>
@endsection
