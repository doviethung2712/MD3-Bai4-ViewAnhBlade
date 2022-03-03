<table>
    <thead>
        <tr>
            <th>Group</th>
            <th>User</th>
            <th>Post</th>
            <th>PostContent</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->posts->name}}</td>
                {{-- <td>{{$group->}}</td> --}}
                <td>{{$post->name}}</td>
                {{-- <td>{{$post->post->name}}</td> --}}
                <td>{{$post->content}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
